@extends('layouts.app')

@section('content')

<div class="container-fluid py-5">
    <div class="col-10 mx-auto">
        <h1 class="text-center"><span style="color: #C43F52;">Canteens</span></h1>
        <div class="row row-cols-6 gap-3 justify-content-center align-items-center">
            <div class="col-auto px-0">
                <a class="carousel-control-prev-sm" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: #C43F52;"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
            </div>
            
            <div id="carouselExampleControls" class="carousel slide col-6" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active d-flex align-items-center">
                        <div class="card" style="border-radius: 10px; background-color: #DED5C6;">
                            <img src="{{ asset('img/JBI.png') }}" height="200vt" width="200vt" >
                        </div>
                        <div class="card" style="border-radius: 10px; background-color: #FED700;">
                            <img src="{{ asset('img/Cocina.png') }}"height="200vt" width="200vt" > 
                        </div>
                        <div class="card" style="border-radius: 10px; background-color: #222222;">
                            <img src="{{ asset('img/RC.png') }}" height="200vt" width="200vt">    
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-auto px-0">
                <a class="carousel-control-next-sm" href="#carouselExampleControls" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #C43F52;"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection