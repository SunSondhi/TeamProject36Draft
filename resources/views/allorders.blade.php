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
    <h1>List of all orders</h1>
    <table class="table" id="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>description</th>
                <th>quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $us)
            <tr>
                <td> {{$us->id}} </td>
                <td> {{$us->name}} </td>
                <td> {{$us->price}} </td>
                <td> {{$us->description}} </td>
                <td> {{$us->quantity}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>




@endsection