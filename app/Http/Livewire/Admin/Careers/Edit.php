<?php

namespace App\Http\Livewire\Admin\Careers;

use App\Models\admin\Career;
use Livewire\Component;

class Edit extends Component
{
    public $title;

    public $si_title;

    public $ta_title;

    public $job_description;

    public $si_job_description;

    public $ta_job_description;

    public $closing_date;

    public $company;

    public $is_published;

    public $career_id;

    public function mount($career)
    {
        $this->title = $career->title;
        $this->career_id = $career->id;
        $this->si_title = $career->si_title;
        $this->ta_title = $career->ta_title;
        $this->job_description = $career->job_description;
        $this->si_job_description = $career->si_job_description;
        $this->ta_job_description = $career->ta_job_description;
        $this->closing_date = $career->closing_date;
        $this->company = $career->company;
        $this->is_published = $career->is_published;
    }

    public function save()
    {
        $career = Career::find($this->career_id);
        //dd($career);
        $career->title = $this->title;
        $career->si_title = $this->si_title;
        $career->ta_title = $this->ta_title;
        $career->job_description = $this->job_description;
        $career->si_job_description = $this->si_job_description;
        $career->ta_job_description = $this->ta_job_description;
        $career->closing_date = $this->closing_date;
        $career->company = $this->company;
        $career->save();

        session()->flash('message', 'Career successfully updated.');
    }

    public function isPublished()
    {
        $case = Career::find($this->career_id);

        $case->is_published = $case->is_published ? false : true;
        $case->save();
        $this->mount($case);
    }

    public function render()
    {
        return view('livewire.admin.careers.edit');
    }
}
