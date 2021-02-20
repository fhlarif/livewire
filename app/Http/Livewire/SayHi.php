<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SayHi extends Component
{
    // protected  $listeners = ['refreshChildren'=>'refreshMe'];
    // protected  $listeners = ['refreshChildren'=>'$refresh'];
    protected  $listeners = ['foo'=>'$refresh'];
    public $name;
    
    public function render()
    {
        return view('livewire.say-hi');
    }

    public function mount($name){
        $this->name= $name;
    }

    // public function refreshMe(){

    // }

    public function emitFoo(){
        $this->emitUp('foo');
    }
    
 

}
