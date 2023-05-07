<div>
<div class="container-fluid py-6">
  <div class="row">
    <div class="col-md-8 mx-auto">
    {{$slot}}
      <div class="card" style="overflow-y: scroll; background-color: rgba(255, 255, 255, 0.5); border-color: #C43F52; border-radius: 15px; border: 3px solid #C43F52; height: 150px; max-height:">
        <div class="card-body" >
          <h3 class="card-title"><span style="font-family: 'Lexend'; font-style: normal; font-weight: 900; font-size: 35px; line-height: 56px; text-align: center; color: #000000; mix-blend-mode: normal;">Popular<img src="{{ asset('img/fire.png') }}" height ="40vt" ></h3>
          @foreach($products as $product)
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-2">
              <div class="col-auto">
                <div class="card" style="background-color: #C43F52;">
                  <div class="popular card-body">
                    
                    <p class="pp my-2">{{$product['product_name']}}</p>
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
    @endforeach
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
</div>