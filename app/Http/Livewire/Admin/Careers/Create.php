<?php

namespace App\Http\Livewire\Admin\Careers;

use App\Models\admin\Career;
use Livewire\Component;

class Create extends Component
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

    public function save()
    {
        $this->validate([
            'title' => 'required', // 1MB Max
            'si_title' => 'required',
            'ta_title' => 'required',
            'closing_date' => 'required',
            'company' => 'required',
        ]);

        $report = Career::create([
            'title' => $this->title,
            'si_title' => $this->si_title,
            'ta_title' => $this->ta_title,
            'job_description' => $this->job_description,
            'si_job_description' => $this->si_job_description,
            'ta_job_description' => $this->ta_job_description,
            'closing_date' => $this->closing_date,
            'company' => $this->company,
            'is_published' => false,
            'added_by' => auth()->user()->id,
        ]);

        session()->flash('message', 'Career successfully inserted.');
    }

    public function render()
    {
        return view('livewire.admin.careers.create');
    }
}
