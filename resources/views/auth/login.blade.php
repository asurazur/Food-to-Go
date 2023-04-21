@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <div class="card row-mb-4">
                <div class="login card-body">
                    <div class="card-title mb-4">
                        <h2 class="fw-bold">{{ __('Sign In') }}</h2>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-4">
                            <label for="email" class="col-md-2 col-form-label text-md-end"></label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="row mb-3">
                            <label for="password" class="col-md-2 col-form-label text-md-end"></label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-4 offset-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-5 offset-md-0">
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary btn-red" style="width: 370px; color: ">
                                      {{ __('Sign In') }}
                                </button>
                            </div>
                            <div class="col-12 mt-3">
                                <p class="text-center"><span style="color: gray;">Don’t have an account?</span> <a class="nav-link d-inline" href="{{ route('register') }}" style="color: #C43F52">{{ __('Sign up') }}</a></p>   
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
        <div class="col-md-6" style="background-image: url({{ asset('img/adnu.jpg') }}); background-size: cover; height: 83vh; width: 120vh;">
        </div>
    </div>
</div>
@endsection