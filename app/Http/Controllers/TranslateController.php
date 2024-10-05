<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslateController extends Controller
{
    public function index(){
        $en = new GoogleTranslate('en');

        $translatedText = $en->translate('merhaba');

        dd($translatedText);
    }
}
