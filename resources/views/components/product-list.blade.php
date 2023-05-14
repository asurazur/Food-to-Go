<div>
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
 
    <div class="row gx-2 py-3 justify-content-center align-items-center">
  <div class="col-md-5">
    <div class="card" style="overflow-y: scroll; background-color: rgba(255, 255, 255, 0.5); border-color: #C43F52; border-radius: 15px; border: 3px solid #C43F52; height: 280px;">
      <div class="card-body">
        <h3 class="card-title"><span style="font-family: 'Lexend'; font-style: normal; font-size: 30px; line-height: 56px; text-align: center; color: #000000; mix-blend-mode: normal;">MEAL</span></h3>
        <div class="row justify">
          @foreach($products as $product)
            @if($product['product_type'] == 'Meal')
              <div class="col-md-4 gx-2">
                <div class="card" style="background-color: white;">
                  <div class="menu card-body">
                    <p class="p my-3">{{$product['product_name']}}</p>
                  </div>
                </div>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card" style="overflow-y: scroll; background-color: rgba(255, 255, 255, 0.5); border-color: #C43F52; border-radius: 15px; border: 3px solid #C43F52; height: 280px;">
      <div class="card-body">
        <h3 class="card-title"><span style="font-family: 'Lexend'; font-style: normal; font-size: 30px; line-height: 56px; text-align: center; color: #000000; mix-blend-mode: normal;">Drinks</span></h3>
        <div class="row justify-content-center">
          @foreach($products as $product)
            @if($product['product_type'] == 'Drink')
              <div class="col-md-12">
                <div class="card" style="background-color: white;">
                  <div class="menu card-body">
                    <p class="p my-2">{{$product['product_name']}}</p>
                  </div>
                </div>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
      
</div>