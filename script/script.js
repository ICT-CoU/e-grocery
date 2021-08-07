const addProduct = document.querySelectorAll("#add-item");
const cart = document.getElementById("cart");
const cartItems = document.getElementById("cart-items");
const cartPrice = document.getElementById("cart-price");
const modalTableBody = document.getElementById("modal-tbody");
const form = document.getElementById("form");
const registerBtn = document.getElementById("register-btn");

// registerBtn.addEventListener('click', (e) => {
//   window.location.reload();
// })
form.addEventListener('submit', (e) => {
  window.location.reload()
})


let data = {
  items: 0,
  price: 0,
  deletedItem: 0,
  deletedPrice: 0,
};

addProduct.forEach((el) => {
  el.addEventListener("click", (e) => {
    const productName =
      e.target.parentNode.querySelector("#product-name").textContent;
    const productPrice =
      e.target.parentNode.querySelector("#product-price").textContent;

    const a = e.target.parentNode
      .querySelector("#product-price")
      .textContent.split("৳");
    console.log(a);
    data.price += parseInt(
      e.target.parentNode
        .querySelector("#product-price")
        .textContent.split("৳")[1]
    );
    data.items++;

    let price = 0,
      item = 0;

    modalTableBody.addEventListener("click", (e) => {
      const element = e.target.parentNode.parentNode;
      data.deletedPrice = parseInt(
        element.querySelector("#product-price").textContent.split("৳")[1]
      );
      data.deletedItem = 1;

      for (let i = 1; i <= 1; i++) {
        price += data.deletedPrice;
        item += data.deletedItem;

        const itemHtml = `<i class="fa fa-shopping-cart" aria-hidden="true"></i> <br> <span>${
          data.items - item
        } items</span>`;
        const priceHtml = `<span>$ ${data.price - price}</span>`;

        cartItems.innerHTML = itemHtml;
        cartPrice.innerHTML = priceHtml;

        data.deletedItem = 0;
        data.deletedPrice = 0;
      }

      element.remove();
    });

    data.price -= price;

    const itemHtml = `<i class="fa fa-shopping-cart" aria-hidden="true"></i> <br> <span>${data.items} items</span>`;
    const priceHtml = `<span>$ ${data.price}</span>`;
    const modalHtml = `<tr> <td id="product-name">${productName}</td> <td id="product-price">${productPrice}</td> <td><a href="#products" class="btn btn-product" id="delete-item">Delete</a></td> </tr>`;

    cartItems.innerHTML = itemHtml;
    cartPrice.innerHTML = priceHtml;

    modalTableBody.insertAdjacentHTML("beforeend", modalHtml);

    // price = 0;
  });
});
