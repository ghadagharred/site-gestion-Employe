@extends('layouts.app')

@section('content')
<style>
    body {
        
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-color: #8F9CC7;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-family: Arial, sans-serif;
    }
    
    .login-card {
        background-color: #24375D;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        width: 360px;
        max-width: 90%;
        color: #fff;
    }
    
    .login-card .card-header {
        background-color: #C0C0C0;
        font-family: Arial, sans-serif;
        font-weight: bold;
        border-bottom: none;
        padding: 10px;
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
    }
    
    .login-card .form-group label {
        font-weight: bold;
        color: #fff;
    }
    
    .login-card .form-control {
        background-color: #fff;
        color: #333;
    }
    
    .login-card .btn-secondary {
        background-color: #2980b9;
        border: none;
        width: 100%;
        font-size: 16px;
        padding: 10px;
        margin-top: 20px;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
    }
    
    .login-card .btn-secondary:hover {
        background-color: #3498db;
    }
</style>
<div class="login-card">
    <div class="card-header">
        {{ __('Login') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-secondary">
                    {{ __('Login') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
