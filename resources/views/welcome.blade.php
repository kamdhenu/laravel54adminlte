@extends('layouts.auth')

@section('box-content')
    <p class="login-box-msg">AdminLTE boilerplate for Laravel 5.4</p>
    <ul>
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <li><a href="{{ url('/home') }}">Home</a></li>
                @else
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @endif
            </div>
        @endif
    </ul>
@endsection