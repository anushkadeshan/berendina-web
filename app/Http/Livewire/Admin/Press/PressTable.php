<?php

namespace App\Http\Livewire\Admin\Press;

use App\Models\admin\PressRelease;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class PressTable extends LivewireDatatable
{
    public $model = PressRelease::class;

    public function columns()
    {
        return [
            Column::callback(['id', 'title'], function ($id, $name) {
                return view('livewire.admin.press.press-table', ['id' => $id, 'name' => $name]);
            })->alignRight(),

            NumberColumn::name('id'),
            Column::name('title')
                ->defaultSort('asc')
                ->searchable(),
            DateColumn::name('published_date'),
            Column::name('company'),
            BooleanColumn::name('isPublished')
                ->label('is Published to Web'),
            Column::delete()->alignRight(),

        ];
    }
}
