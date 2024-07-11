<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{

    public $name;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.register');
    }

    public function store(){
        $data = $this->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8']
        ]);

        $user = User::create($data);

        Auth::login($user);

        session()->flash('success', $user->name . ' Registered Successfully');

        return $this->redirect('/customers', navigate:true);
    }
}
