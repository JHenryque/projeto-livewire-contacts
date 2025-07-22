<?php

namespace App\Livewire;

use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Validate;
use Livewire\Component;

class FormContacts extends Component
{
    #[Validate('required|min:3|max:50')]
    public $name;

    #[Validate('required|email|min:3|max:50')]
    public $email;
    #[Validate('required|min:3|max:50')]
    public $phone;

    // error and success messages
    public $error = '';
    public $success = '';

    public function newContact()
    {
        // validation
//        $this->validate([
//            'name' => 'required|min:3|max:50',
//            'email' => 'required|email|min:3|max:50',
//            'phone' => 'required|min:3|max:50',
//        ]);
        $this->validate();

        // temporary store in log file
        //Log::info('novo contacto: ' . $this->name . ' - ' . $this->email . ' - ' . $this->phone); para teste

        // store contact in database nao sera aprovado se o email for igual
        //Contact::firstOrCreate(['name' => $this->name, 'email' => $this->email], ['name' => $this->name, 'email' => $this->email, 'phone' => $this->phone]);
        // o nome for igual nao sera aprovado
       $resul = Contact::firstOrCreate(['name' => $this->name, 'email' => $this->email], ['phone' => $this->phone]);


        // clear form

        // option 1
//        $this->name = '';
//        $this->email = '';
//        $this->phone = '';


        // check for success or error
        if ($resul->wasRecentlyCreated) {
            // clear all public properties  option 2
            $this->reset();
            $this->success = "Contact created added successfully.";
        } else {
            $this->error = "the contact already exists.";
        }
    }
    public function render()
    {
        return view('livewire.form-contacts');
    }
}
