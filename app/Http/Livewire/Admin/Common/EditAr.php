<?php

namespace App\Http\Livewire\Admin\Common;

use Livewire\Component;
use App\Models\AnnualReport;
use Livewire\WithFileUploads;

class EditAr extends Component
{
    use WithFileUploads;
    public $title;
    public $photo;
    public $thumb_url;
    public $a_report;
    public $file_url;
    public $year;
    public $company;
    public $ar_id;
    public $active;

    public function mount($report){
        $this->title = $report->title;
        $this->thumb_url = $report->thumb_url;
        $this->file_url = $report->file_url;
        $this->year = $report->year;
        $this->company = $report->company;
        $this->ar_id = $report->id;
        $this->active = $report->isPublished;
    }

    public function save(){
        $report = AnnualReport::find($this->ar_id);
        $report->title = $this->title;
        $report->year = $this->year;
        $report->company = $this->company;
        $report->save();

        if(!empty($this->photo)){
            $imageHashName = $this->photo->hashName();
            $this->photo->store('public/photos/annual-reports');
            $report->thumb_url = $imageHashName;
            $report->save();
         }

         if(!empty($this->a_report)){
            $fileHashName = $this->a_report->hashName();
            $this->report->store('public/documents/annual-reports');
            $report->file_url = $fileHashName;
            $report->save();
         }

         session()->flash('message', 'Annual Report successfully updated.');

         return redirect()->route('annual-reports.index');
    }

    public function isPublished(){
        $case = AnnualReport::find($this->ar_id);

        $case->isPublished = $case->isPublished ? false : true;
        $case->save();
        $this->mount($case);
    }

    public function render()
    {
        return view('livewire.admin.common.edit-ar');
    }
}
