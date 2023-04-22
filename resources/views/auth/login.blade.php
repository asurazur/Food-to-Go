@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-6 m-auto">
            <div class="card m-auto w-50 row loginShadow">
            <div class="login card-body">
                <div class="card-title mt-4 p-3 d-flex">
                    <h2 class="fw-bolder">{{ __('Sign In') }}</h2>
                </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row-fluid mb-4">
                            <label hidden for="email" class="col-md-2 col-form-label text-md-end"></label>

                            <div class="col-md-11 mx-auto">
                                <input id="email" style="border: 1px solid #C43F52;" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="row-fluid mb-2">
                            <label hidden for="password" class="col-md-2 col-form-label text-md-end"></label>

                            <div class="col-md-11 mx-auto">
                                <input id="password" style="border: 1px solid #C43F52;" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex row mb-3">
                            <div class="col-6 d-flex justify-content-start" style="padding-left: 25px;">
                                <div class="form-check">
                                    <input class="form-check-input" style="border: 1px solid #C43F52;" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                                 <button type="submit" class="col-10 btn btn-primary btn-red mx-auto" style="box-shadow: 0px 10px 20px rgba(235, 45, 72, 0.5);">
                                      <span>{{ __('Sign In') }}</span>
                                 </button>
                        </div>
                        <div class="row">
                        <div class="d-flex col-12 mt-3">
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link mx-auto" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-0 mb-5">
                               <p class="text-center"><span style="color: gray;">Don’t have an account?</span> <a class="nav-link d-inline fw-bold" href="{{ route('register') }}" style="color: #C43F52">{{ __('Sign up') }}</a></p>   
                           </div>
                        </div>
                            </div>
                        </div>
                    </form>
            </div>  
            <div class="col-6 p-0">
                <img src="{{ asset('img/Adnu.jpg') }}" class="img-responsive img-fluid fit-content"style="width:768px;height:637px;">
            </div>
        </div>
    </div>
</div>
@endsection
