<div>

    <ul class="list-group">

        @foreach ($tasks as $task)
        <li class="list-group-item">

            <span wire:click="deleteTask('{{$task->id}}')" class="float-right ml-4  text-danger fa fa-trash"></span>


            @if(!$task->isCompleted)
            {{$task->name}}
            <span wire:click="markAsCompleted('{{$task->id}}')" class="float-right  text-success fa fa-check"></span>
            @else
            <del>{{$task->name}}</del>
            @endif
        </li>
        @endforeach

    </ul>

</div>