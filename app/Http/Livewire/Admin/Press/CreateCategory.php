<?php

namespace App\Http\Livewire\Admin\Press;

use App\Models\admin\NewsCategory;
use Livewire\Component;

class CreateCategory extends Component
{
    public $name;

    protected $rules = [
        'name' => 'required',
    ];

    public function save(){
        $this->validate();
        NewsCategory::create([
            'name' => $this->name,
        ]);

        session()->flash('message', 'Category successfully inserted.');

        $this->name = '';
    }

    public function render()
    {
        return view('livewire.admin.press.create-category');
    }
}
