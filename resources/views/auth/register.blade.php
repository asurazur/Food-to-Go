@extends('layouts.app')

@section('content')
<div class="container-fluid my-5">
    <div class="row justify-content-center ">
        <div class="col-6 m-auto ">
            <div class="card m-auto w-50 row loginShadow my-3" style="background-color: rgba(255, 255, 255, 0.0);">
                <div class="card-header mt-4 p-3 d-flex" style="background-color: rgba(255, 255, 255, 0.0); border-bottom: 1px;"><h2 class="fw-bolder" style="color: Black;">{{ __('Register') }}</span></h2></div>

                <div class="card-body my-1" >
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="border: 1px solid #C43F52;" placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="border: 1px solid #C43F52;" placeholder="Email Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                           

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="border: 1px solid #C43F52;" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                        

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" style="border: 1px solid #C43F52;" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6">
                            <a href="{{ url('/login') }}"> <button type="submit" class="btn btn-primary" style="background-color: #C43F52; border-color: #C43F52; width: 327px;" >
                                    {{ __('Register') }}
                                </button></a>
                            </div>
                        </div>
                        <p class="text-center py-4">Already have an account? <a href="{{ url('/login') }}" style="color: #C43F52;">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
