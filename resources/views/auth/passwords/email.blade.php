@extends('layouts.auth')

@section('box-content')
    <p class="login-box-msg">Reset Password</p>

    @if (session('status'))
        <div class="alert alert-success">
            <p>{{ session('status') }}</p>
        </div>
    @endif

    <form  method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}

        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
                <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
            @endif
        </div>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Send Password Reset Link</button>
            </div>
        </div>

    </form>

    <div class="text-center">
        - OR -<br>
        <a href="{{ route('login') }}">Back to login</a>
    </div>
@endsection
