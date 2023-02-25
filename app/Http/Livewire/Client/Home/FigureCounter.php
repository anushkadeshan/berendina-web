<?php

namespace App\Http\Livewire\Client\Home;

use App\Models\client\home\Figure;
use Livewire\Component;

class FigureCounter extends Component
{
    public $figures;

    public function mount()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'si':
                $this->figures = Figure::select('figure_name_si as name', 'amount', 'icon_location', 'style')
                ->orderBy('order', 'asc')
                ->get();
                break;

            case 'ta':
                $this->figures = Figure::select('figure_name_ta as name', 'amount', 'icon_location', 'style')
                ->orderBy('order', 'asc')
                ->get();
                break;

            default:
                $this->figures = Figure::select('figure_name_en as name', 'amount', 'icon_location', 'style')
                ->orderBy('order', 'asc')
                ->get();
                break;
        }
    }

    public function render()
    {
        return view('livewire.client.home.figure-counter');
    }
}
