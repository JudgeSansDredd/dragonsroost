<?php

namespace App\Http\Controllers;

use App\Helpers\Glossary;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function glossary() {
        $glossary = Glossary::getGlossary();
        return view('glossary')->with(compact('glossary'));
    }
}
