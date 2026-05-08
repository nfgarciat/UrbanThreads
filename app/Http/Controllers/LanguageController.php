<?php

/**
 * Sara Vasquez
 */

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LanguageController extends Controller
{
    public function switchLang(string $lang): RedirectResponse
    {
        if (in_array($lang, ['en', 'es'])) {
            session()->put('locale', $lang);
        }

        return redirect()->back();
    }
}
