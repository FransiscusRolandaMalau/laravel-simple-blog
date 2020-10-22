@extends('auth.layouts.auth-master')
@section('title', 'Reset Password')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Reset Password</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Send Password Reset Link
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-5 text-muted text-center">
        Recalled your login info? <a href="{{ route('login') }}">Sign In</a>
    </div>
@endsection
