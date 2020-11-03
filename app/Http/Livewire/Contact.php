<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\ContatMessage;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;

class Contact extends Component
{
    public function render()
    {
        return view('livewire.contact');
    }

    public $name;
    public $email;
    public $subject;
    public $message;
    // validation form
    public function updated($field){

        $this->validateOnly($field, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ],[
            'name.required' => 'Please Provide Name Field',
            'email.required' => 'Please Provide Email Field',
            'subject.required' => 'Please Provide Subject Field',
            'message.required' => 'Please Provide Message Field',
        ]);

    }

    // save form
    public function contact_submit(Request $request){

        $savecontact =  $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ],[
            'name.required' => 'Please Provide Name Field',
            'email.required' => 'Please Provide Email Field',
            'subject.required' => 'Please Provide Subject Field',
            'message.required' => 'Please Provide Message Field',
        ]);

        ContatMessage::create([
            'name' =>  $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
            'created_at' => Carbon::now(),
        ]);

        $dataNew = [
            'name' =>  $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message
        ];

        Mail::to('web.zakirbd@gmail.com')->send(new SendMail($dataNew));

        session()->flash('success', 'Your Message Successfully Sent!');
        $this->cleanevars();
    }

    private function cleanevars(){
        $this->name = null;
        $this->email = null;
        $this->subject = null;
        $this->message = null;
    }
}
