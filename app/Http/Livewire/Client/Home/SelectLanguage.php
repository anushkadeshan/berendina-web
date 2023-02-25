<?php

namespace App\Http\Livewire\Client\Home;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class SelectLanguage extends Component
{
    public function selectLang($locale)
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

        return redirect()->to('/home');
    }

    public function render()
    {
        return view('livewire.client.home.select-language');
    }
}
