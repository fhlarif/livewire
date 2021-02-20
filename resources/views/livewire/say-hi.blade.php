<div>
    <input type="text" wire:model.lazy='name'> : {{ now() }}
   This is say-hi. Hello {{ $name }}

   {{-- <button wire:click="$refresh">Refresh</button> --}}
   <button wire:click="emitFoo">Refresh</button>
</div>
