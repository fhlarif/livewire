<div>
    {{-- <input wire:model.debounce.500ms='name' type="text"> --}}
    {{-- <input wire:model.lazy='name' type="text"> --}}
    <input wire:model='name' type="text" placeholder="Type here">
    <input type="checkbox" wire:model="loud" class="">
    {{-- <select wire:model='greeting' name="" id="" class=""> --}}
    <select wire:model="greeting" multiple>

        <option >Yo</option>
        <option >Goodbye</option>
        <option >Adios</option>
    </select>

    {{-- {{ $greeting }} {{ strtoupper($name) }}  --}}
    This is {{ $hullo }}. {{ implode(', ', $greeting) }} {{ strtoupper($name) }} 
   
    @if ($loud)
        !!
    @endif
</div>
