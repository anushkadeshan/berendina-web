<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function index($locale)
    {
        $languages = [
            'en' => 'English',
            'si' => 'Sinhala',
            'ta' => 'Tamil',
        ];

        if (array_key_exists($locale, $languages)) {
            Session::put('applocale', $locale);
        }
        session()->put('locale', $locale);

        return redirect()->back();
    }
}
