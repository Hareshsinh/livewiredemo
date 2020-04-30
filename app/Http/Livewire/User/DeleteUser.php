<?php

namespace App\Http\Livewire\User;

use App\User;
use Livewire\Component;

class DeleteUser extends Component
{
    public $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function delete()
    {
        $this->user->delete();
    }

    public function render()
    {
        return <<<'blade'
            <div>
                <button wire:click="delete">Delete User</button>
            </div>
        blade;
    }
}
