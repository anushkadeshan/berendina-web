<?php

namespace App\Http\Livewire\Client\Careers;

use App\Mail\SendCV;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Admin\JobApplication;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ViewCareer extends Component
{
    use WithFileUploads;
    public $name;
    public $sex;
    public $email;
    public $cv;
    public $message;
    public $career_id;
    public $career = [];
    public function mount($career){
       // dd($career->id);
        $this->career = $career;
        $this->career_id = $career->id;
    }

    public function save(){
       //dd(storage_path());
        $this->validate([
            'name' => 'required',
            'sex' => 'required',
            'email' => 'email|required',
            'cv' => 'required|max:10000|mimes:pdf,docx,doc'
        ]);
        if(!empty($this->cv)){
            $fileHashName = $this->cv->hashName();
            $this->cv->store('public/documents/cvs');

            $application =  JobApplication::create([
                'name' => $this->name,
                'email'=> $this->email,
                'sex' => $this->sex,
                'message' => $this->message,
                'cv' =>$fileHashName,
                'career_id' => $this->career_id,
            ]);
            $this->name = '';
            $this->sex = '';
            $this->email = '';
            $this->cv = '';
            $this->message = '';

            $data = JobApplication::with('career')->find($application->id);
            //dd($data);
            Mail::to('deshan@bds.berendina.org')->send(new SendCV($data));
            session()->flash('message', trans('msg.Job Application successfully recived.'));
        }
    }
    public function render()
    {
        return view('livewire.client.careers.view-career');
    }
}
