<ul class="list-group">
    @foreach ($tasks as $task)
    <li class="list-group-item">
        {{$task->name}}
    </li>
    @endforeach
</ul>