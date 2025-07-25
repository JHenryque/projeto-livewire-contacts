<div>
    <div class="text-center">
        <p>Do you really want to delete this contact?</p>
        <p>Name: <br><strong class="text-white">{{ $contact->name }}</strong></p>
        <p>E-mail: <br><strong class="text-white">{{ $contact->email }}</strong></p>
        <p>Phone: <br><strong class="text-white">{{ $contact->phone }}</strong></p>
        <button wire:click="cancel" class="btn btn-success px-5">NO</button>
        <button wire:click="delete" class="btn btn-danger px-5">Yes</button>
    </div>
</div>
