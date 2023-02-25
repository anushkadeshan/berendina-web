<?php

namespace App\Http\Livewire\Admin\Press;

use App\Models\admin\NewsCategory;
use Livewire\Component;

class Categories extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = NewsCategory::get();
    }

    public function render()
    {
        return view('livewire.admin.press.categories');
    }
}
