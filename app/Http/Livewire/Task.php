<?php

namespace App\Http\Livewire;

use App\Models\Task as ModelsTask;
use Livewire\Component;

class Task extends Component
{
   public $tasks;



    public function mount()
    {
        $this->tasks = ModelsTask::all();
    }

    public function deleteTask($task)
    {
        ModelsTask::findOrFail($task)->delete();
        $this->tasks = ModelsTask::all();
    }
    
    public function markAsCompleted($task)
    {
        ModelsTask::findOrFail($task)->update([
            "isCompleted" => 1
        ]);

        $this->tasks = ModelsTask::all();
    }


    public function render()
    {
        return view('livewire.task');
    }
}
