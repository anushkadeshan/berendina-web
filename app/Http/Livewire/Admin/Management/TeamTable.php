<?php

namespace App\Http\Livewire\Admin\Management;

use Livewire\Component;
use App\Models\Admin\Management;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class TeamTable extends LivewireDatatable
{
    public $model = Management::class;

    public function columns()
    {
        return [
            Column::callback(['id'], function ($id) {
                return view('livewire.admin.management.team-table', ['id' => $id]);
            })->alignRight()->label('Edit'),
            NumberColumn::name('id'),
            Column::name('display_name')
                ->defaultSort('asc')
                ->searchable(),
            Column::name('designation'),
            Column::name('company'),
            DateColumn::name('created_at'),
            BooleanColumn::name('is_published')
                ->label('is Published'),
            Column::delete()->alignRight(),
        ];
    }
}

