<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $company;
    public $message;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'phone' => 'required|min:11',
        'company' => 'required|min:2',
        'message' => 'required|min:10',
    ];


    public function sendContact(){
        $this->validate();
    }
    public function render()
    {
        return view('livewire.site.contact-form');
    }
}
