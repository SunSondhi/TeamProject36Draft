@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card2">
                <div class="card-header">
                    <h1>{{ __('Dashboard') }}</h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in as an Admin' ) }} {{ Auth::user()->name }}

                    <button class="button" id="log-out-btn" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </button>

                </div>


            </div>
        </div>
    </div>
</div>



<div class="main-content">
    <h1>List of all users</h1>
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
</div>

<div class="card2" id="logged-in-butns">
    <a class="button" href="{{ route('admin.allorders') }}">all orders</a>
</div>


@endsection