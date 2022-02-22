<?php

namespace App\Http\Livewire\Admin\Media\PhotoGallery;

use App\Models\Album;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class GalleryTable extends LivewireDatatable
{
    public $model = Album::class;

    public function columns()
    {
        return [
            Column::callback(['id', 'title'], function ($id, $name) {
                return view('livewire.admin.media.photo-gallery.gallery-table', ['id' => $id, 'name' => $name]);
            })->alignRight(),

            NumberColumn::name('id'),
            Column::name('title')
                ->defaultSort('asc')
                ->searchable(),
            Column::name('company'),
            BooleanColumn::name('isPublished')
                ->label('is Published to Web'),
            Column::delete()->alignRight(),
        ];
    }
}
