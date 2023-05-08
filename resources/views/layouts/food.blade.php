@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$product['product_name']}}</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ {{$product['product_image']}} }}" alt="{{$product['product_name']}}" style="max-width: 100%;">
                            </div>
                            <div class="col-md-8">
                                <p>{{$product['product_description']}}</p>
                                <div class="star-rating">
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="2"></span>
                                    <span class="fa fa-star-o" data-rating="3"></span>
                                    <span class="fa fa-star-o" data-rating="4"></span>
                                    <span class="fa fa-star-o" data-rating="5"></span>
                                    <input type="hidden" name="rating" class="rating-value" value="{{$product['product_rating']}}">
                                </div>
                                <button class="btn btn-primary">Add to Favorites</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection