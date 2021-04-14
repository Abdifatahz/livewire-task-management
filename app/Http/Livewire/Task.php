<?php

namespace App\Http\Livewire;

use App\Models\Task as ModelsTask;
use Illuminate\Http\Request;
use Livewire\Component;

class Task extends Component
{
   public $tasks;
   public $name;


    protected $rules = [
        'name' => 'required|min:6',
    ];



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

    public function incrementLove($task)
    {
        $task = ModelsTask::findOrFail($task);
        $task->love = $task->love + 1;
        $task->save();   

        $this->tasks = ModelsTask::all();
    }

    public function addTask()
    {
        $this->validate();
        
        $task = New ModelsTask;
        $task->name             = $this->name;
        $task->isCompleted      = 0;
        $task->love             = 0; 
        $task->save();

        $this->tasks = ModelsTask::all();
    }


    public function render()
    {
        return view('livewire.task');
    }
}
