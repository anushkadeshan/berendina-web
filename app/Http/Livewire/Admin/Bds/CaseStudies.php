<?php

namespace App\Http\Livewire\Admin\Bds;

use App\Models\Casestudy;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\TimeColumn;

class CaseStudies extends LivewireDatatable
{
    public $model = Casestudy::class;

    public function columns()
    {
        return [
            Column::callback(['id'], function ($id) {
                return view('livewire.admin.bds.case-studies', ['id' => $id]);
            })->alignRight()->label('Edit'),
            NumberColumn::name('id'),
            Column::name('title')
                ->defaultSort('asc')
                ->searchable(),
            DateColumn::name('created_at'),
            BooleanColumn::name('active')
                ->label('active'),
            Column::delete()->alignRight(),
        ];
    }
}
