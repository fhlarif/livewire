<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public function render()
    {
        $name='Jelly';
        return view('livewire.hello-world',compact('name'));
    }
}
