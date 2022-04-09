<?php

namespace App\Http\Livewire\Admin\Careers;

use App\Models\admin\Career;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Table extends LivewireDatatable
{
    public $model = Career::class;

    public function columns()
    {
        return [
            Column::callback(['id'], function ($id) {
                return view('livewire.admin.careers.table', ['id' => $id]);
            })->alignRight()->label('Edit'),
            NumberColumn::name('id'),
            Column::name('title')
                ->searchable(),
            Column::name('company'),
            DateColumn::name('closing_date')->defaultSort('desc'),
            DateColumn::name('created_at'),
            BooleanColumn::name('is_published')
                ->label('is Published'),
            Column::delete()->alignRight(),
        ];
    }

}
