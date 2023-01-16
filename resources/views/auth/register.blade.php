@extends('layouts.app')

@section('content')
<!--section   -->
<style>
input:focus{outline: none !important;border:1px solid red;box-shadow: 0 0 5px red;}
</style>
<div id="wrapper">
    <section style="background:#fff;">
        <div class="Auth-form-login" style="max-width: 550px;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0,0,0,.125);border-radius: 0.25rem;">
            <div class="row">
                <div class="card-header">{{ __('Register') }}</div>
                    <form method="POST" action="{{ route('Auth.Register') }}" class="Auth-form" id="LoginProcess" autocomplete="off">
                        @csrf
                        <div id="errorMessage" class="error error-ico" style="display:none"></div>
                        <div class="element">
                            <label for="name">{{ __('Full Name:*') }}</label>
                            <input id="name" type="text" class="fullname form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="element">
                            <label for="email">{{ __('Email Address:*') }}</label>
                            <input id="email" type="email" class="email form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="element">
                            <label for="Password">{{ __('Password:*') }}</label>
                            <input id="password" type="password" class="password form-control @error('password') is-invalid @enderror" name="password" >
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="element">
                            <label for="Confirm Password">{{ __('Confirm Password:*') }}</label>
                            <input id="password-confirm" type="password" class="form-control uCpassword" name="password_confirmation" >
                        </div>
                        <div class="element">
                            <input type="submit" value="{{ __('Register') }}" class="btn btn-xs color-bg login-btn"/>
                        </div>
                        @if (Route::has('login'))
                            <a class="link" href="{{ route('login') }}">
                                {{ __('Already Have Account?') }}
                            </a>
                        @endif
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
