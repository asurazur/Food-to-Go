@extends('layouts.app')

@section('content')
<h1 class ="my-auto" style="font-family: 'Lexend'; font-style: normal; font-weight: 400; font-size: 60px; line-height: 125px; text-align: center; color: #C43F52;">RC FOOD STALL</h1>
<p class ="loc pb-3 " style="font-family: 'Lexend'; font-style: normal; font-weight: 400; font-size: 15px; line-height: 31px; text-align: center; color: #6B6B6B;">Location:<a href="{{ url('/map') }}" style="color: #6B6B6B;"> Bonoan Building </a></p>
<h2 class ="my-auto" style="font-family: 'Lexend'; font-style: normal; font-weight: 400; font-size: 40px; line-height: 75px; text-align: center; color: #000000;">MENU</h2>
<div class="container-fluid py-6">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <div class="card" style="overflow-y: scroll; background-color: rgba(255, 255, 255, 0.5); border-color: #C43F52; border-radius: 15px; border: 3px solid #C43F52; height: 150px; max-height:">
        <div class="card-body" >
          <h3 class="card-title"><span style="font-family: 'Lexend'; font-style: normal; font-weight: 900; font-size: 35px; line-height: 56px; text-align: center; color: #000000; mix-blend-mode: normal;">Popular<img src="{{ asset('img/fire.png') }}" height ="40vt" ></h3>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-2">
              <div class="col-auto">
                <div class="card" style="background-color: #C43F52;">
                  <div class="popular card-body">
                    <p class="pp my-2">Food 1</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="background-color: #C43F52;">
                  <div class="popular card-body">
                    <p class="pp my-2">Food 2</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="background-color:#C43F52;">
                <div class="popular card-body">
                <p class="pp my-2" >Food 3</p>
            </div>
        </div>
        </div>
        <div class="col">
                <div class="card" style="background-color:#C43F52;">
                <div class="popular card-body">
                <p class="pp my-2" >Food 4</p>
            </div>
        </div>
        </div>
              <div class="col">
                <div class="card" style="background-color:#C43F52;">
                <div class="popular card-body">
                <p class="pp my-2">Food 5</p>
            </div>
           </div>
         </div>
       </div>
      </div>
     </div>
    </div>
        <div class="row py-3">
        <div class="meal col-md-5">
        <div class="card" style="overflow-y: scroll; background-color: rgba(255, 255, 255, 0.5); border-color: #C43F52; border-radius: 15px; border: 3px solid #C43F52; height: 280px;">
        <div class="card-body" >
          <h3 class="card-title"><span style="font-family: 'Lexend'; font-style: normal; font-size: 30px; line-height: 56px; text-align: center; color: #000000; mix-blend-mode: normal;">MEAL</h3>
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-1">
          <div class="col">
                <div class="card" style="background-color: white;">
                  <div class="menu card-body">
                  <p class="p my-2">Food 1</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="background-color: white;">
                  <div class="menu card-body">
                    <p class="p my-2">Food 2</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="background-color: white;">
                  <div class="menu card-body">
                    <p class="p my-2">Food 3</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="background-color: white;">
                  <div class="menu card-body">
                    <p class="p my-2">Food 4</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="background-color: white;">
                  <div class="menu card-body">
                    <p class="p my-2">Food 5</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="background-color: white;">
                  <div class="menu card-body">
                    <p class="p my-2">Food 6</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="background-color: white;">
                  <div class="menu card-body">
                    <p class="p my-2">Food 7</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="background-color: white;">
                  <div class="menu card-body">
                    <p class="p my-2">Food 8</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="background-color: white;">
                  <div class="menu card-body">
                    <p class="p my-2">Food 9</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
  <div class="drink col-md-3">
        <div class="card" style="overflow-y: scroll; background-color: rgba(255, 255, 255, 0.5); border-color: #C43F52; border-radius: 15px; border: 3px solid #C43F52; height: 280px; width: 104%">
        <div class="card-body" >
          <h3 class="card-title"><span style="font-family: 'Lexend'; font-style: normal; font-size: 30px; line-height: 56px; text-align: center; color: #000000; mix-blend-mode: normal;">Drinks</h3>
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-1 g-1">
          <div class="col">
                <div class="card" style="background-color: white;">
                  <div class="menu card-body">
                  <p class="p my-2">Drink 1</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="background-color: white;">
                  <div class="menu card-body">
                  <p class="p my-2">Drink 2</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="background-color: white;">
                  <div class="menu card-body">
                  <p class="p my-2">Drink 3</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="background-color: white;">
                  <div class="menu card-body">
                  <p class="p my-2">Drink 4</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
</div>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-md-2 mx-auto">
      <div class="card" style="background-color: #C43F52; border-color: #C43F52; border-radius: 10px; border: 3px solid #C43F52; height: 70px;">
        <div class="card-body row-cols-0" style="border-radius: 10px; padding: 15px;">
          <div class="card-body align-items-center" style="border-radius: 10px;">
            <span style="color: white;">1</span>
            <a href="{{ url('/shop') }}"><input type="button"  id="cart-num" class="text-center" value="Cart" style="width: 50px; background-color: #C43F52;color: white; font-weight: bold; border: 1px; margin-left: 10px; margin-right: 10px;" ></a>
            <span style="color:white;"> ₱</span> <span id="cart-price" style="color:white; margin-left: 10px; margin-right: 10px;">70.00</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection 
