<?php

namespace App\Http\Livewire\Admin\Common;

use App\Models\AnnualReport;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateAr extends Component
{
    use WithFileUploads;

    public $title;

    public $photo;

    public $report;

    public $year;

    public $company;

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
            'title' => 'required',
            'year' => 'required',
            'report' => 'file|mimes:pdf|required',
            'company' => 'required',
        ]);

        if (! empty($this->photo)) {
            $imageHashName = $this->photo->hashName();
            $fileHashName = $this->report->hashName();

            $report = AnnualReport::create([
                'title' => $this->title,
                'year' => $this->year,
                'company' => $this->company,
                'isPublished' => false,
                'thumb_url' => $imageHashName,
                'file_url' => $fileHashName,
                'added_by' => auth()->user()->id,
            ]);

            $this->photo->store('public/photos/annual-reports');
            $this->report->store('public/documents/annual-reports');

            session()->flash('message', 'Annual Report successfully inserted.');

            $this->title = '';
            $this->year = '';
            $this->company = '';
        }
    }

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);
    }

    public function render()
    {
        return view('livewire.admin.common.create-ar');
    }
}
