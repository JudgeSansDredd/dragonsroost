<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
class Glossary {
    private static $glossaryLocation = 'glossary/glossary.json';

    public static function getGlossary() {
        // Add metadata to the glossary (anchor tags and ids)
        return self::_addMetaData(self::_getRawGlossary());
    }

    public static function addAnchorTagsToText($text) {
        $terms = self::_getTerms(self::_getRawGlossary());
        return self::_addAnchorTags($terms, $text);
    }

    private static function _getRawGlossary() {
        // If the json file exists, load it up, otherwise use an empty glossary
        if(Storage::exists(self::$glossaryLocation)) {
            $glossary = collect(json_decode(Storage::get(self::$glossaryLocation), true));
        } else {
            $glossary = collect();
        }
        return $glossary;
    }

    private static function _addMetaData($glossary) {
        // Grab all the names (flatten out the array and grab all the names)
        $names = self::_getTerms($glossary);

        // Add metadata to the glossary
        return $glossary->map(function($arrSection) use ($names) {
            // Make it a collection for easier function calls
            $section = collect($arrSection);

            // Add metadata to the section
            $section = self::_addIndividualMetaData($section, $names);

            return $section;
        });
    }

    private static function _addIndividualMetaData($section, $names) {
        // Make it a collection
        $section = collect($section);

        // Add the id
        $section['id'] = self::_formatId($section['name']);

        // Add anchor tags
        $section['definition'] = self::_addAnchorTags($names, $section['definition'], [$section['name']]);

        // Check subsections for anchor tags
        if($section->has('subEntries')) {
            $subEntries = collect($section['subEntries']);
            $subEntries = collect($subEntries)->map(function($subEntry) use ($names) {
                return self::_addIndividualMetaData($subEntry, $names);
            });
            $section['subEntries'] = $subEntries;
        }

        return $section;
    }

    private static function _addAnchorTags($glossaryTerms, $haystack, $ignoreWords = []) {
        $ignoreWords = collect($ignoreWords)->map(function($ignoreWord) { return strtolower($ignoreWord); });
        // Check each name for matches, and add anchor tags
        foreach ($glossaryTerms as $glossaryTerm) {
            if($ignoreWords->contains($glossaryTerm)) {
                continue;
            }
            // Build the route for the anchor tag
            $route = route('glossary') . '#' . self::_formatId($glossaryTerm);
            // Build the hard part of the anchor tag
            $anchorStart = "<a class=\"text-drlightblue font-bold hover:bg-drwhite rounded-md px-2\" href=\"$route\">";
            // What would we replace a match with... note the $1 for a capture group
            $replacement = $anchorStart . '$1</a>';
            // Our search pattern, note the capture group
            $searchPattern = "/(" . self::_stripArticles($glossaryTerm) . ")/i";
            $haystack = preg_replace($searchPattern, $replacement, $haystack);
        }

        return $haystack;
    }

    private static function _stripArticles($string) {
        $articles = [
            'a', 'an', 'the'
        ];

        foreach($articles as $article) {
            $string = preg_replace("/\s$article\s/i", '', $string);
            $string = preg_replace("/^$article\s/i", '', $string);
        }

        return $string;
    }

    private static function _formatId($name) {
        return preg_replace('/\W+/', '-', strtolower($name));
    }

    private static function _getTerms($glossary) {
        return $glossary->map(function($arrSection) {
            $section = collect($arrSection);
            $name = $section['name'];
            if($section->has('subEntries')) {
                $subEntryNames = collect($section['subEntries'])->map(function($subEntry) {
                    return $subEntry['name'];
                });
            } else {
                $subEntryNames = collect();
            }
            return collect(compact('name', 'subEntryNames'));
        })->flatten()->map(function($name) { return strtolower($name); });
    }

}