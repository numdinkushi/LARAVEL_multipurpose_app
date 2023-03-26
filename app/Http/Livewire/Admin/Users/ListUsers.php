<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ListUsers extends Component
{  
   public $state = [];



    public function render()
    {   
        $users = User::latest()->paginate(10);

        return view('livewire.admin.users.list-users', compact('users'));
    }
    public function addNew()
    {
        $this->dispatchBrowserEvent('show-form');
    }

    public function createUser()
    {
       $validatedData = Validator::make($this->state, [
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed'
        ])->validate();

        User::create($validatedData);

        $this->dispatchBrowserEvent('hide-form');
        $users = User::latest()->paginate();
        // dd($users);
     
    }

    
}
