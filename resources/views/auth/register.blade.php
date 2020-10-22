@extends('auth.layouts.auth-master')
@section('title', 'Register')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Register</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full name" value="{{ old('name') }}" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Set Username" value="{{ old('username') }}" autofocus>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" name="email" value="{{ old('email') }}" autofocus>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="control-label">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Set account password" name="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="control-label">Confirm Password</label>
                    <input id="password_confirmation" type="password" placeholder="Confirm account password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-5 text-muted text-center">
        Already have an account? <a href="{{ route('login') }}">Sign In</a>
    </div>
@endsection
