<?php

namespace App\Http\Livewire\User;

use App\User;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class Register extends Component
{
    public $name;
    public $email;
    public $password;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|min:2',
            'email' => 'required|email|max:50',
//            'password' => 'required|required_with:password_confirmation|min:6'
        ]);
    }

    public function goToAddPage() {
        return redirect()->to('/users');
    }

    public function saveUser()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:2',
            'email' => 'required|email|max:50',
//            'password' => 'required|required_with:password_confirmation|min:6'
        ]);
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
        session()->flash('message', 'User successfully updated.');
        return redirect()->to('/user/create');
    }
    public function render()
    {
        return view('livewire.user.register');
    }
}
