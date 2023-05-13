@extends('layouts.app')

@section('content')
<div class="container my-5 py-5" >
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card" style="background-color: rgba(255, 255, 255, 0.0);">
                <div class="card-header"style="background-color: #C43F52;"><span style="color: white;">{{ __('About Us') }}</span></div>

                <div class="card-body" style="background-color: rgba(255, 255, 255, 0.0);">
                    <p>Food to Go is a platform that allows you to order food from various canteens around your area. Our goal is to provide you with a convenient and easy way to order food, without having to worry about waiting in long lines or dealing with cash.</p>

                    <p>We believe that everyone should have access to delicious and affordable food, and our platform is designed to make that possible. Whether you're in a rush or simply want to avoid the hassle of cooking, Food to Go is the perfect solution for you.</p>

                    <p>If you have any questions or feedback, please feel free to contact us at <span class="fw-bold text-decoration-underline">support@foodtogo.com.</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
