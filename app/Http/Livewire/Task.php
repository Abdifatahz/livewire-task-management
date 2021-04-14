<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Task extends Component
{
    public $name        =   "Abdi";
    public $greeting    =   "hi";


    public function mount($greeting)
    {
        $this->geetting = $greeting;
    }

    public function updatedName()
    {
        $this->greeting = strtoupper($this->greeting);
    }

    public function resetName(){

       $this->name = "Abdifatah";
    }

    public function render()
    {
        return view('livewire.task');
    }
}
