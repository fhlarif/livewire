<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name= 'Fathul';
    public $nameYo= 'Fatwooshhul';
    public $namete= ['Jelly','Poop','Pak'];
    public $loud= false;
    public $greeting= ['Yo'];

    protected $listeners = ['foo'=>'$refresh'];

    /*  public function resetName($name = 'Bingo'){
         $this->name =$name;
     } */

    /* Do something when livewire for initialised */
    public function mount($name)
    {
        $this->name= $name;
    }

    public function updatedNameYo()
    {
        $this->name='updated!!!';
    }

   /*  Event */

    public function refreshChildren(){
        $this->emit('refreshChildren','foo');
    }

    public function render()
    {
        $hullo ="Pak Yu";
        return view('livewire.hello-world', compact('hullo'));

        /* Not Using public */
        //  $name='Jelly';
        //  return view('livewire.hello-world',compact('name'));
    }
}
