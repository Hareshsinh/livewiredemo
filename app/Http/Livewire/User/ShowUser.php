<?php

namespace App\Http\Livewire\User;

use App\User;
use Livewire\Component;
use Livewire\WithPagination;

class ShowUser extends Component
{
    use WithPagination;
    public $search = '';
//    public $id = '';
    public $readyToLoad = false;
    public function loadUsers()
    {
        $this->readyToLoad = true;
    }

    public function goToAddPage() {
        return redirect()->to('/user/create');
    }
    public function editRegister($id) {
//        $user = User::where('id',$id)->first();
//        return view('livewire.user.register-edit', ['user'=>$user]);
        return redirect()->to('/user/'.$id);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.user.show-user', [
            'users' => $this->readyToLoad ? User::where('name', 'like', '%'.$this->search.'%')->paginate(10) : [],
        ]);
    }


}
