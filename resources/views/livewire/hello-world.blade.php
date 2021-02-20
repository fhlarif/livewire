<div>
    {{-- <input wire:model.debounce.500ms='name' type="text"> --}}
    {{-- <input wire:model.lazy='name' type="text"> --}}
    <input wire:model='name' type="text">
    <input type="checkbox" wire:model="loud" class="">
    {{-- <select wire:model='greeting' name="" id="" class=""> --}}
    <select wire:model="greeting" multiple>

        <option>Yo</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>

    {{-- {{ $greeting }} {{ strtoupper($name) }} --}}
    This is {{ $hullo }}. {{ implode(', ', $greeting) }} {{ strtoupper($name) }}

    @if ($loud)
        !!
    @endif


    {{-- <button wire:mouseenter="resetName('Chico')">Reset Name</button> --}}
    {{-- <button wire:click="resetName('Chico')">Reset Name</button> --}}

    {{-- <form action="#"  wire:submit.prevent="resetName('Chico')">
        <button>Reset Name</button>
    </form> --}}

    <form action="#" wire:submit.prevent="$set('name','Chico')">
        <button>Reset Name</button>
    </form>


    <div class="">
        <input type="text" wire:model='nameYo'>
        Hello {{ $name }}
    </div>
       
    <hr>

    {{-- Child Component /nest component --}}

    <div>



        @livewire('say-hi',['name'=>$nameYo])

        <br class="">
        @foreach ($namete as $namete)
        @livewire('say-hi',['name'=>$namete],key($namete))
  
        @endforeach
       

        {{-- {{ now() }}  <button wire:click="$emit('refreshChildren')">Refresh Children</button> --}}
        {{ now() }}  <button wire:click='refreshChildren'>Refresh Children</button>
    </div>
</div>
