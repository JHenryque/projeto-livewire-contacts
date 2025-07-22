<div class="card p-5">
    <p class="mb-3">Contacts</p>

    @if($contacts->count() === 0)
        <hr class="m-0 p-0">
             <div class="opacity-50 p-4">No contact found</div>
        <hr class="m-0 p-0">
    @else
        @foreach($contacts as $contact)
            <div class="card p-3 mb-1">
                <div class="row">
                    <div class="col-3">Name: {{ $contact->name }}</div>
                    <div class="col">E-mail: {{ $contact->email }}</div>
                    <div class="col-4">Phone: {{ $contact->phone }}</div>
                </div>
            </div>
        @endforeach
    @endif

</div>
