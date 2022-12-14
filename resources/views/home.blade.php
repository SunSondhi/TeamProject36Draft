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


<div class="card2" id="logged-in-butns"><a class="button" href="{{ route('lastorders') }}">go to your orders</a>
</div>

@endsection