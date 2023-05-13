@extends('layouts.app')

@section('content')

<h1 class ="my-auto" style="font-family: 'Lexend'; font-style: normal; font-weight: 400; font-size: 60px; line-height: 125px; text-align: center; color: #C43F52;">JBI FOOD STOP</h1>
<p class ="loc pb-3 " style="font-family: 'Lexend'; font-style: normal; font-weight: 400; font-size: 15px; line-height: 31px; text-align: center; color: #6B6B6B;">Location: Bonoan Building </p>
<h2 class ="my-auto" style="font-family: 'Lexend'; font-style: normal; font-weight: 400; font-size: 40px; line-height: 75px; text-align: center; color: #000000;">MENU</h2>
<x-product-list :products="$products" :admin="$admin"></x-product-list>

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-md-2 mx-auto">
      <div class="card" style="background-color: #C43F52; border-color: #C43F52; border-radius: 10px; border: 3px solid #C43F52; height: 70px;">
        <div class="card-body row-cols-0" style="border-radius: 10px; padding: 15px;">
          <div class="card-body align-items-center d-flex" style="border-radius: 10px;">
            <span style="color: white;">1</span>
            <a href="{{ url('/shop') }}"><input type="button" id="cart-num" class="text-center" value="Cart" style="width: 50px; background-color: #C43F52;color: white; font-weight: bold; border: 1px; margin-left: 10px; margin-right: 10px;" ></a>
            <span style="color:white;"> ₱</span> <span id="cart-price" style="color:white; margin-left: 10px; margin-right: 10px;">0.00</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
