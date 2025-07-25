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

    public string $search = '';
    private int $contactsPerPage = 5;

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
        $contacts = null;
             if ($this->search) {
                 $contacts = Contact::where('name', 'like', '%' . $this->search . '%')
                     ->orWhere('email', 'like', '%' . $this->search . '%')
                     ->orWhere('phone', 'like', '%' . $this->search . '%')
                     ->paginate($this->contactsPerPage);
             } else {
                 $contacts = Contact::paginate($this->contactsPerPage);
             }

        return view('livewire.contacts')->with('contacts', $contacts);
    }
}
