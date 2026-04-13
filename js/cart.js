let cart = JSON.parse(localStorage.getItem("cart")) || [];

const cartCount = document.querySelector(".cart-count");
const buyMessage = document.getElementById("buyMessage");

function saveCart() {
  localStorage.setItem("cart", JSON.stringify(cart));
}

function updateCartUI() {
  if (cartCount) {
    cartCount.innerText = cart.reduce((sum, item) => sum + (item.quantity || 1), 0);
  }
}

updateCartUI();

const buyBtns = document.querySelectorAll(".buy-btn");

buyBtns.forEach(btn => {
  btn.addEventListener("click", (e) => {

    const card = e.target.closest(".card");
    if (!card) return;

    const product = {
      title: card.querySelector(".title")?.innerText || "",
      price: card.querySelector(".price")?.innerText || "",
      image: card.querySelector("img")?.src || "",
      quantity: 1
    };

    // 🔥 لو المنتج موجود نزود الكمية
    const existing = cart.find(item => item.title === product.title);

    if (existing) {
      existing.quantity += 1;
    } else {
      cart.push(product);
    }

    saveCart();
    updateCartUI();

    if (buyMessage) {
      buyMessage.style.display = "block";
      setTimeout(() => {
        buyMessage.style.display = "none";
      }, 2000);
    }
  });
});