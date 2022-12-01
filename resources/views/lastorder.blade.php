@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card2">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }} {{ Auth::user()->name }}
                </div>


                <button class="button" id="log-out-btn" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </button>
            </div>
        </div>
    </div>
</div>

<div class="main-content">
    <h1>List of your order</h1>
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
            <tr>
                <td> {{$lastOrder->name}} </td>
                <td> {{$lastOrder->price}} </td>
                <td> {{$lastOrder->description}} </td>
                <td> {{$lastOrder->quantity}} </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection