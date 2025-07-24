<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Contacts extends Component
{
//    public $contacts;
//    public function mount()
//    {
//        $this->contacts = Contact::all();
//    }

    use withPagination;
    #[On('contactAdded')]
    public function updateContactList()
    {
        //$this->updateContact();
    }

//    public function updateContact()
//    {
//        $this->contacts = Contact::all();
//    }
    public function render()
    {
        return view('livewire.contacts')->with('contacts', Contact::paginate(3));
    }
}
