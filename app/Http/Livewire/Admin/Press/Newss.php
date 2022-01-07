<?php

namespace App\Http\Livewire\Admin\Press;

use App\Models\News;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\TimeColumn;

class Newss extends LivewireDatatable
{

    public $model = News::class;

    public function columns()
    {
        return [
            Column::callback(['id', 'title'], function ($id, $name) {
                return view('livewire.admin.press.newss', ['id' => $id, 'name' => $name]);
            })->alignRight(),

            NumberColumn::name('id'),



            Column::name('title')
                ->defaultSort('asc')
                ->searchable(),

            Column::name('likes'),
            DateColumn::name('created_at'),
            BooleanColumn::name('published')
                ->label('is Published'),
            Column::delete()->alignRight(),

        ];
    }
}
