<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ["name", "isCompleted","love"];


    public function complete()
    {
        $this->task->isCompleted = 1;
    }
    public function unComplete()
    {
        $this->task->isCompleted = 0;
    }
}
