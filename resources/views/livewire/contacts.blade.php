<div class="card p-5">
    <p class="mb-3">CONTACTS</p>
    <hr>

    @if($contacts->count() === 0)
             <div class="opacity-50 p-4">No contact found</div>
        <hr class="m-0 p-0">
    @else
        @foreach($contacts as $contact)
            <div class="card p-3 mb-1">
                <div class="row">
                    <div class="col-3">Name: {{ $contact->name }}</div>
                    <div class="col-4">E-mail: {{ $contact->email }}</div>
                    <div class="col">Phone: {{ $contact->phone }}</div>
                    <div class="col">
                        <a class="btn btn-primary p-2" href="{{ route('contacts.edit', ['id' => $contact->id]) }}">Edit</a>
                        <a class="btn btn-danger p-2" href="{{ route('contacts.delete', ['id' => $contact->id]) }}">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div>
            {{ $contacts->links() }}
        </div>
    @endif

</div>
