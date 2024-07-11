<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;

    public $password;

    public function store(Request $request){
        $user = $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($user)){
            $request->session()->regenerate();

            session()->flash('success', Auth::user()->name . ' Logged In Successfully');

            return $this->redirect(route('customer'), navigate:true);
        }

        $this->addError('email', 'The email or password is invalid');
        $this->addError('password', 'The email or password is invalid');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
