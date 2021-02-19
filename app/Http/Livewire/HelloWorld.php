<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name= '';
    public $loud= false;
    public $greeting= ['Yo'];

    public function render()
    {
        $hullo ="Pak Yu";
        return view('livewire.hello-world',compact('hullo'));

        /* Not Using public */
        //  $name='Jelly';
        //  return view('livewire.hello-world',compact('name'));
    }
}
