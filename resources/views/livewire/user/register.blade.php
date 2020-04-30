
<div class="col-md-12">
    <h1>User Registration</h1>
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="col-md-6">
    <div class="form-group">
        <label for="title">Name</label>
        <input type="text" class="form-control" wire:model.lazy="name" placeholder="Enter name" name="name">
        @if($errors->has('name'))<span class="error">{{ $errors->first('name') }}</span> @endif
    </div>
    <div class="form-group">
        <label for="Email">Email</label>
        <input wire:model.lazy="email" class="form-control" placeholder="Enter email" name="email">
        @if($errors->has('email'))<span class="error">{{ $errors->first('email') }}</span>@endif
    </div>
    <div class="form-group">
        <label for="title">Password</label>
        <input type="password" class="form-control" wire:model.lazy="password" placeholder="Enter password" name="password">
        @if($errors->has('password'))<span class="error">{{ $errors->first('password') }}</span> @endif
        @if($errors->has('password_confirmation'))<span class="error">{{ $errors->first('password_confirmation') }}</span> @endif
    </div>
{{--    <div class="form-group">--}}
{{--        <label for="title">Conform Password</label>--}}
{{--        <input type="password" class="form-control" wire:model.lazy="password_confirmation" placeholder="Enter Password Confirmation" name="password_confirmation">--}}
{{--        @if($errors->has('password_confirmation'))<span class="error">{{ $errors->first('password_confirmation') }}</span> @endif--}}
{{--    </div>--}}
    <button wire:click="saveUser" class="btn btn-primary">Save Contact</button>

    <div wire:loading wire:target="saveUser">
        Processing Registration...
    </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <button for="title" class="btn btn-primary" wire:click="goToAddPage">List of register</button>
        </div>
        <div class="form-group">
            <label for="title"><h1><div wire:poll>{{ now() }}</div></h1></label>
        </label>
    </div>
</div>

