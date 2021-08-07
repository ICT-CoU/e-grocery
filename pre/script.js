const addProduct = document.querySelectorAll("#add-item");
const cart = document.getElementById("cart");
const cartItems = document.getElementById("cart-items");
const cartPrice = document.getElementById("cart-price");

let data = {
  items: 0,
  price: 0,
};

addProduct.forEach((el) => {
  el.addEventListener("click", function (e) {
    data.price += parseInt(
      e.target.parentNode
        .querySelector("#product-price")
        .textContent.split("$")[1]
    );
    data.items++;

    const itemHtml = `<i class="fa fa-shopping-cart" aria-hidden="true"></i> <br> <span>${data["items"]} items</span>`;
    const priceHtml = `<span>$ ${data["price"]}</span>`;

    cartItems.innerHTML = itemHtml;
    cartPrice.innerHTML = priceHtml;
  });
});
