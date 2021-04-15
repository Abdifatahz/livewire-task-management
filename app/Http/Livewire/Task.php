<?php

namespace App\Http\Livewire;

use App\Models\Task as ModelsTask;
use Illuminate\Http\Request;
use Livewire\Component;

class Task extends Component
{
   public $user;
   public $tasks;
   public $name;


    protected $rules = [
        'name' => 'required|min:6',
    ];



    public function mount()
    {
        $this->tasks = ModelsTask::owner()->get();
    }

    public function deleteTask($task)
    {
        ModelsTask::findOrFail($task)->delete();
        $this->tasks  = ModelsTask::owner()->get();
    }
    
    public function markAsCompleted($task)
    {
        ModelsTask::findOrFail($task)->update([
            "isCompleted" => 1
        ]);

        $this->tasks =  ModelsTask::owner()->get();
    }

    public function incrementLove($task)
    {
        $task = ModelsTask::findOrFail($task);
        $task->love     = $task->love + 1;
        $task->save();   

        $this->tasks =  ModelsTask::owner()->get();
    }

    public function addTask()
    {
        $this->validate();
        
        $task = New ModelsTask;
        $task->name             = $this->name;
        $task->isCompleted      = 0;
        $task->love             = 0;
        $task->user_id          = auth()->id();
        $task->save();

        $this->tasks            = ModelsTask::owner()->get();
    }


    public function render()
    {
        return view('livewire.task');
    }
}
