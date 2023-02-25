<?php

namespace App\Http\Livewire\Admin\Home;

use App\Models\admin\Figure;
use Livewire\Component;

class FigureCounter extends Component
{
    public $figures = [];

    public $edit = false;

    public $figure_id;

    public $figure_name_en;

    public $figure_name_si;

    public $figure_name_ta;

    public $order;

    public $amount;

    public $icon_location;

    public $background_css;

    public function mount()
    {
        $this->figures = Figure::get();
    }

    public function openModal()
    {
        $this->dispatchBrowserEvent('openModel');
    }

    public function closeModal()
    {
        $this->dispatchBrowserEvent('closeModel');
    }

    public function edit($id)
    {
        if ($id != '') {
            $this->edit = true;
            $this->figure_id = $id;
            $figure = Figure::find($id);
            $this->figure_name_en = $figure->figure_name_en;
            $this->figure_name_si = $figure->figure_name_si;
            $this->figure_name_ta = $figure->figure_name_ta;
            $this->order = $figure->order;
            $this->amount = $figure->amount;
            $this->icon_location = $figure->icon_location;
            $this->background_css = $figure->style;
        }
        $this->openModal();
    }

    public function save()
    {
        $this->validate([
            'figure_name_en' => 'required',
            'figure_name_si' => 'required',
            'figure_name_ta' => 'required',
            'order' => 'required',
            'amount' => 'required',
            'icon_location' => 'required',
            'background_css' => 'required',
        ]);
        $figure = Figure::updateOrCreate(['id' => $this->figure_id], [
            'figure_name_en' => $this->figure_name_en,
            'figure_name_si' => $this->figure_name_si,
            'figure_name_ta' => $this->figure_name_ta,
            'order' => $this->order,
            'amount' => $this->amount,
            'icon_location' => $this->icon_location,
            'style' => $this->background_css,
        ]);

        $this->figure_id = $figure->id;
        $this->closeModal();
        $this->mount();
    }

    public function delete($id)
    {
        Figure::find($id)->delete();
        $this->mount();
    }

    public function render()
    {
        return view('livewire.admin.home.figure-counter');
    }
}
