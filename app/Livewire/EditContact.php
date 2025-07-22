<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Attributes\Title;
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
        $this->name = $this->contact->name;
        $this->email = $this->contact->email;
        $this->phone = $this->contact->phone;
    }

    // val
    public function updateContact()
    {
        $this->validate();

        // check if the name and email already exists
        $contact = Contact::where('name', $this->name)->where('email', $this->email)->where('phone', $this->phone)->where('id', '!=', $this->contact->id)->first();

        if ($contact) {
           session()->flash('error', 'Contact already exists.');
           return;
        }

        $this->contact->update([
          'name' => $this->name,
          'email' => $this->email,
          'phone' => $this->phone,
        ]);

        return redirect()->route('home');
    }
    public function cancel()
    {
        return redirect()->route('home');
    }

    #[Title('Edit contact')]
    public function render()
    {
        return view('livewire.edit-contact');
    }
}
