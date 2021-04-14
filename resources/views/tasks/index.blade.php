@extends("layouts.app")


@section("content")

<div class="container">
    @livewire("task",['greeting' => 'Hola'])
</div>


    @endsection