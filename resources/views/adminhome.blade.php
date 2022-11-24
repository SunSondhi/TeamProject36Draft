@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in! as Admin' ) }} {{ Auth::user()->name }}
                </div>

                <button id="log-out-btn" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </button>
            </div>
        </div>
    </div>
</div>


<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>


<!-- <div class="main-content">
    <table class="table" id="table">
        <thead>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $us)
            <tr>
                <td> {{$us->name}} </td>
                <td> {{$us->email }} </td>
                <td> {{$us->role }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="sections">
        <a href="{{ redirect()->back()->getTargetUrl() }}"><button>Go back</button></a>
    </div>
</div> -->



@endsection