<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\ContatMessage;
use Illuminate\Support\Facades\Mail;

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
            'name' => 'required|min:3|mix:100|string',
            'email' => 'required|email',
            'subject' => 'required|max:200',
            'message' => 'required',


        ],[
            'name.required' => 'Please Provide Name Field',
            'email.required' => 'Please Provide Email Field',
            'subject.required' => 'Please Provide Subject Field',
            'message.required' => 'Please Provide Message Field',
        ]);

    }

    // save form
    public function contact_submit(){

        $savecontact =  $this->validate([
            'name' => 'required|min:3|mix:100|string',
            'email' => 'required|email',
            'subject' => 'required|max:200',
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

