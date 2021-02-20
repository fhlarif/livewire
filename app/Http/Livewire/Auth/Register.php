<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $email ='';
    public $password ='';
    public $name ='';
    public $passwordConfirmation ='';

    public function register(){

        $data = $this->validate([
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|same:passwordConfirmation',
            'name'=>'required',
        ]);

        User::create([
            'email'=> $this->email,
            'name'=> $this->name,
            'password'=> Hash::make($this->password),
        ]);

        return redirect()->route('welcome');
        // return redirect()->route('register.success');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
