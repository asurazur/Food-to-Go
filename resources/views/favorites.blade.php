@extends('layouts.app')

@section('content')
<div class="container-fluid py-5">
    <div class="col-12 mx-auto">
        <h1 class="text-center"><span style="color: #C43F52;">Favorites</span></h1>
        <div class="row row-cols-3 gap-5 justify-content-center">
            <div class="card col p-5" style="border-color: #C43F52; border-style: solid; border-radius: 10px;">
                <div class="card-body row-cols-1" style="border-radius: 10px; background-color: #FFD8DE; padding: 25px;">
                    <div class="card-body mt-1" style="border-radius: 10px; background-color: white;">
                    <span style="color: #C43F52;">Spaghetti</span><span style="color: #C43F52; padding: 75px; ">Store:</span><img src="{{ asset('img/favorite.png') }}" height="40px">
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</div>
@endsection