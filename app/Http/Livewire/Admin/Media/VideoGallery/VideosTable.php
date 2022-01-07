<?php

namespace App\Http\Livewire\Admin\Media\VideoGallery;

use App\Models\Video;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class VideosTable extends LivewireDatatable
{
    public $model = Video::class;

    public function columns()
    {
        return [
            Column::callback(['id', 'description'], function ($id, $name) {
                return view('livewire.admin.media.video-gallery.videos-table', ['id' => $id, 'name' => $name]);
            })->alignRight(),

            NumberColumn::name('id'),
            Column::name('description')
                ->defaultSort('asc')
                ->searchable(),
            Column::name('company'),
            BooleanColumn::name('published')
                ->label('is Published to Web'),
            Column::delete()->alignRight(),
        ];
    }

}
