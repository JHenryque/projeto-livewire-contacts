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
        Contact::firstOrCreate(['name' => $this->name, 'email' => $this->email], ['phone' => $this->phone]);


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
