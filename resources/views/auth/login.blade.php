@extends('layouts.app')

@section('content')
<!--section   -->
<style>
input:focus{outline: none !important;border:1px solid red;box-shadow: 0 0 5px red;}
</style>
<div id="wrapper">
    <section>
        <div class="Auth-form-login" style="">
            <div class="row">
                <div class="card-header">{{ __('Login') }}</div>
                    <form method="POST" action="{{ route('Auth.login') }}" class="Auth-form" id="handleAjax" autocomplete="off">
                        @csrf
                        <div id="errorMessage" class="error error-ico" style="display:none"></div>
                        <div class="element">
                            <label for="email">{{ __('Email Address') }}</label>
                            <input id="email" type="email" placeholder="Email Address" class="Ucemail form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus>
                            @if($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="element">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" placeholder="Password" class="Ucpassword form-control @error('password') is-invalid @enderror" name="password" >
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="element" style="display:flex">
                            <div class="float-left">
                                <input type="checkbox" name="remember" id="s" {{ old('remember') ? 'checked' : '' }}>
                                <span  for="remember">
                                    {{ __('Remember Me') }}
                                </span>
                            </div>
                        </div>
                        <div class="element">
                            <input type="submit" value="{{ __('Login') }}" class="btn btn-xs color-bg login-btn"/>

                        </div>
                            @if (Route::has('password.request'))
                                <a class="link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif

                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
