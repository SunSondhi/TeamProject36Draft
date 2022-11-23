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

                    {{ __('You are logged in! as Admin') }}
                </div>
            </div>
        </div>
    </div>
</div>


<li class="w-25 p-3 card  dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
    </a>

    <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">


        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf

        </form>

        <button class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </button>
    </div>
</li>


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