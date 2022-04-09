<?php

namespace App\Http\Livewire\Client\Contact;

use App\Mail\ContactUser;
use App\Models\Conatct;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactUs extends Component
{

    public $name;
    public $email;
    public $subject;
    public $phone;
    public $message;

    public function submit(){
        
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
        $contact = Conatct::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'phone' => $this->phone,
            'message' => $this->message,
            'action_taken' => false
        ]);

        $this->name = '';
        $this->email = '';
        $this->subject = '';
        $this->phone = '';
        $this->message = '';


        Mail::to('deshan@bds.berendina.org')->send(new ContactUser($contact));

        session()->flash('message', trans('msg.Your Messeage sent successfully'));
    }

    public function render()
    {
        return view('livewire.client.contact.contact-us');
    }
}
