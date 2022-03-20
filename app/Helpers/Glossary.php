<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
class Glossary {
    private $glossaryLocation = 'glossary/glossary.json';
    private $glossary;

    public function __construct() {
        if(Storage::exists($this->glossaryLocation)) {
            // TODO: Load up json
            $this->glossary = collect(json_decode(Storage::get($this->glossaryLocation), true));
        } else {
            $this->glossary = collect();
        }
    }
}