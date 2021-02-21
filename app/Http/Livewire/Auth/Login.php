<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Login extends Component
{
    public $email ='';
    public $password ='';


    public function login(){

        $request=$this->validate([
             'email'=>'required|email|',
             'password'=>'required|min:6',
         ]);

        $user=User::where('email','=',$request['email'])->exists();

       if (!$user) {
        session()->flash('fail', 'Login failed. Please check your credential');
        return $this->failLogin();
       } else {
           //dd('p00p');
         return $this->successLogin();
       }
     }

     public function successLogin(){
         return redirect()->route('welcome');
     }

     public function failLogin(){
        return redirect()->route('livewire.login');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
