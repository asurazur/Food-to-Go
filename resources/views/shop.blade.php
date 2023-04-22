@extends('layouts.app')

@section('content')
<div class="container-fluid py-5">
    <div class="col-12 mx-auto">
        <h1 class="text-center"><span style="color: #C43F52;">Cart</span></h1>
        <div class="row row-cols-3 gap-5 justify-content-center">
            <div class="card col p-5" style="border-color: #C43F52; border-style: solid; border-radius: 10px;">
                <div class="card-body row-cols-1" style="border-radius: 10px; background-color: #FFD8DE; padding: 15px;">
                    <div class="card-body mt-1" style="border-radius: 10px; background-color: white;">
                        <span style="color: #C43F52;">Spaghetti </span>
                        <button class="btn btn-secondary" type="button" id="minus-btn" style="background-color: white; height: 30px; border: 1px; margin-left: 10px; margin-right: 10px;"><span style="color: #C43F52; font-weight: bold;">-</span></button>
                        <input type="text" id="spaghetti-quantity" class="text-center" value="1" style="width: 50px; color: #C43F52; font-weight: bold; border: 1px; margin-left: 10px; margin-right: 10px;">
                        <button class="btn btn-secondary" type="button" id="plus-btn" style="background-color: white; height: 30px; border: 1px; margin-left: 10px; margin-right: 10px;"><span style="color: #C43F52; font-weight: bold;">+</span></button>
                        ₱ <span id="total-price" style="margin-left: 10px; margin-right: 10px;">70.00</span>
                    </div>
                    <div class="card-body mt-1" style="border-radius: 10px; background-color: white;">
                        <span style="color: #C43F52;">Turon </span>
                        <button class="btn btn-secondary" type="button" id="minus-btn" style="background-color: white; height: 30px; border: 1px; margin-left: 10px; margin-right: 10px;"><span style="color: #C43F52; font-weight: bold;">-</span></button>
                        <input type="text" id="spaghetti-quantity" class="text-center" value="1" style="width: 50px; color: #C43F52; font-weight: bold; border: 1px; margin-left: 10px; margin-right: 10px;">
                        <button class="btn btn-secondary" type="button" id="plus-btn" style="background-color: white; height: 30px; border: 1px; margin-left: 10px; margin-right: 10px;"><span style="color: #C43F52; font-weight: bold;">+</span></button>
                        ₱ <span id="total-price" style="margin-left: 10px; margin-right: 10px;">30.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // get DOM elements
    const minusBtn = document.getElementById("minus-btn");
    const plusBtn = document.getElementById("plus-btn");
    const quantityInput = document.getElementById("spaghetti-quantity");
    const totalPrice = document.getElementById("total-price");

    // initialize quantity and price
    let quantity = parseInt(quantityInput.value);
    let price = 70.00;

    // subtract quantity and update price
    minusBtn.addEventListener("click", () => {
        if (quantity > 1) {
            quantity--;
            quantityInput.value = quantity;
            price -= 70.00;
            totalPrice.innerText = price.toFixed(2);
        }
    });

    // add quantity and update price
    plusBtn.addEventListener("click", () => {
        quantity++;
        quantityInput.value = quantity;
        price += 70.00;
        totalPrice.innerText = price.toFixed(2);
    });
</script>
@endsection