<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class FormContacts extends Component
{
    public $name, $email, $phone;

    public function newContact()
    {
        // validation
        $this->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|min:3|max:50',
            'phone' => 'required|min:3|max:50',
        ]);

        // temporary store in log file
        Log::info('novo contacto: ' . $this->name . ' - ' . $this->email . ' - ' . $this->phone);

        // clear form

        // option 1
//        $this->name = '';
//        $this->email = '';
//        $this->phone = '';

        // option 2
        $this->reset();
    }
    public function render()
    {
        return view('livewire.form-contacts');
    }
}
