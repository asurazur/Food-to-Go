function food(foodName, pricePerUnit, quantityInputId, minusBtnId, plusBtnId, totalPriceId) {
    // get DOM elements
    const minusBtn = document.getElementById(minusBtnId);
    const plusBtn = document.getElementById(plusBtnId);
    const quantityInput = document.getElementById(quantityInputId);
    const totalPrice = document.getElementById(totalPriceId);

    // initialize quantity and price
    let quantity = parseInt(quantityInput.value);
    let price = pricePerUnit * quantity;

    // subtract quantity and update price
    minusBtn.addEventListener("click", () => {
        if (quantity > 1) {
            quantity--;
            quantityInput.value = quantity;
            price -= pricePerUnit;
            totalPrice.innerText = price.toFixed(2);
        }
    });

    // add quantity and update price
    plusBtn.addEventListener("click", () => {
        quantity++;
        quantityInput.value = quantity;
        price += pricePerUnit;
        totalPrice.innerText = price.toFixed(2);
    });
}


$(document).ready(function() {
    $('.scrollable').on('mousewheel', function(event) {
      if (event.deltaY > 0) {
        event.preventDefault();
        event.stopPropagation();
        this.scrollLeft -= (event.deltaY * 30);
      } else {
        event.preventDefault();
        event.stopPropagation();
        this.scrollLeft += (event.deltaY * -30);
      }
    });
  });
