<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditContact extends Component
{
    #[Validate('required|min:3|max:50')]
    public $name;

    #[Validate('required|email|min:3|max:50')]
    public $email;
    #[Validate('required|min:3|max:50')]
    public $phone;

    public Contact $contact;
    public function mount($id)
    {
        $this->contact = Contact::find($id);
    }

    // val
    public function updateContact()
    {
        return $this->validate();
        dd($this->contact);
    }
    public function cancel()
    {
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.edit-contact');
    }
}
