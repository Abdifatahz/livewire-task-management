@extends("layouts.app")


@section("content")

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 offset-md-3">
            <div class="bg-warning p-3 text-white">
                <b>{{ Auth::user()->name }} </b>

                <a class="pull-right" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <b class="text-danger">{{ __('Logout') }}</b>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 offset-md-3">
            @livewire("task")
        </div>
    </div>
</div>


@endsection