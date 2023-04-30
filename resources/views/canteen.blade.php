@extends('layouts.app')

@section('content')

<div class="container-fluid py-5">
    <div class="col-10 mx-auto">
        <h1 class="text-center"><span style="color: #C43F52;">Canteens</span></h1>
        <div class="row row-cols-6 gap-3 justify-content-center align-items-center">
            
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="row">
        <div class="col-lg-4">
        <a href="{{ url('/menu') }}"> <img src="{{ asset('img/JBI.png') }}" class="d-block w-100" style="background-color: #DED5C6;" alt="" height="225vt"></a>
    </div>
        <div class="col-lg-4">
        <a href="{{ url('/menu2') }}"> <img src="{{ asset('img/Cocina.png') }}" class="d-block w-100" style="background-color: #FED700;" alt="" height="225vt"></a>
    </div>
    <div class="col-lg-4">
        <a href="{{ url('/menu3') }}"> <img src="{{ asset('img/RC.png') }}" class="d-block w-100" style="background-color: #222222;" alt=""height="225vt"></a>
    </div>
    </div>
    </div>
    <div class="carousel-item">
    <div class="row">
        <div class="col-lg-4">
        <a href="{{ url('/menu4') }}"> <img src="{{ asset('img/kopi.jpg') }}" class="d-block w-100"  alt=""></a>
    </div>
        <div class="col-lg-4">
        <a href="{{ url('/menu5') }}"> <img src="{{ asset('img/coko.jpg') }}" class="d-block w-100"  alt=""></a>
    </div>
   
    </div>
    </div>
    
    </div>
    <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" style="background-color: #C43F52;" aria-hidden="true" ></span>
    <span class="visually-hidden">Previous</span>
  </a>
<a class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" role="button" data-bs-slide="next" >
    <span class="carousel-control-next-icon" style="background-color: #C43F52; " aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

        </div>
        
</div>

@endsection