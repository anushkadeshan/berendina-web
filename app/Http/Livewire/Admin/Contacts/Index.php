<?php

namespace App\Http\Livewire\Admin\Contacts;

use App\Models\BranchContact;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Index extends LivewireDatatable
{
    public $model = BranchContact::class;

    public function columns()
    {
        return [
            Column::callback(['id'], function ($id) {
                return view('livewire.admin.contacts.index', ['id' => $id]);
            })->alignRight()->label('Edit'),
            NumberColumn::name('id'),
            Column::name('branch_name')->defaultSort('asc')
                ->searchable(),
            Column::name('company'),
            Column::name('address'),
            Column::name('lat'),
            Column::name('lng'),
            Column::delete()->alignRight(),
        ];
    }
}
