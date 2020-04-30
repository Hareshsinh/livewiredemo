<?php

namespace App\Http\Livewire\User;

use App\User;
use Livewire\Component;

class RegisterList extends Component
{
    public function render()
    {
        return view('livewire.show-users', [
            'users' => User::all(),
        ]);
    }
}
