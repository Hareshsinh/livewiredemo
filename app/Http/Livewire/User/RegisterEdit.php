<?php

namespace App\Http\Livewire\User;

use App\User;
use Livewire\Component;

class RegisterEdit extends Component
{
    public $user;
    public $name;
    public $email;
    public $password;

    public function mount(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
    }

    public function update()
    {
        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        session()->flash('message', 'User successfully updated.');
    }

    public function render()
    {
        return view('livewire.user.register-edit',['user'=>$this->user]);
    }
}
