<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function changeLanguage($lang)
    {
        // Validate the language code if necessary
        $supportedLanguages = ['en', 'mr']; // Add your supported languages here

        if (in_array($lang, $supportedLanguages)) {
            session(['applocale' => $lang]);
        }

        return redirect()->back();
    }
}
