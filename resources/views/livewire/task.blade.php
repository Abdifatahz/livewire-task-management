<div>

    <input wire:model.debounce="name" type="text">

    <select wire:model="greeting">
        <option>Hello</option>
        <option>Again</option>
        <option>And Again</option>

    </select>

    <span>{{$greeting}}  {{$name}}</span>

    <button wire:click="resetName">Reset</button>
    <button wire:click="$set('name','Hulk')">Reset Again</button>

</div>