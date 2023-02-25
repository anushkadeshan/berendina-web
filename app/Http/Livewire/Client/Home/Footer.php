<?php

namespace App\Http\Livewire\Client\Home;

use App\Mail\ContactUser;
use App\Models\Conatct;
use App\Models\News;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Footer extends Component
{
    public $latest_news;

    public $name;

    public $message;

    public $phone;

    public function mount()
    {
        $this->latest_news = News::latest()->get()->take(3);
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'message' => 'required',
        ]);

        $contact = Conatct::create([
            'name' => $this->name,
            'message' => $this->message,
            'phone' => $this->phone,
            'action_taken' => false,
        ]);

        $this->name = '';
        $this->message = '';
        $this->phone = '';

        Mail::to('deshan@bds.berendina.org')->send(new ContactUser($contact));

        session()->flash('message', trans('msg.Your Messeage sent successfully'));
    }

    public function render()
    {
        return view('livewire.client.home.footer');
    }
}
