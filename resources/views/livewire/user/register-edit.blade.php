
<form wire:submit.prevent="update">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    Name: <input wire:model="name" type="text">

    <button>Save</button>
</form>
