<?php

namespace App\Http\Livewire\Admin\Common;

use App\Models\AnnualReport;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class AnnualReports extends LivewireDatatable
{
    public $model = AnnualReport::class;

    public function columns()
    {
        return [
            Column::callback(['id'], function ($id) {
                return view('livewire.admin.common.annual-reports', ['id' => $id]);
            })->alignRight()->label('Edit'),
            NumberColumn::name('id'),
            Column::name('title')
                ->defaultSort('asc')
                ->searchable(),
            Column::name('year'),
            Column::name('company'),
            DateColumn::name('created_at'),
            BooleanColumn::name('isPublished')
                ->label('is Published'),
            Column::delete()->alignRight(),
        ];
    }
}
