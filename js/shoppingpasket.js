let cart = JSON.parse(localStorage.getItem("cart")) || [];

const container = document.getElementById("cartContainer");
const template = document.getElementById("cartTemplate");

function saveCart() {
    localStorage.setItem("cart", JSON.stringify(cart));
}

function renderCart() {
    container.innerHTML = "";

    if (cart.length === 0) {
        container.innerHTML = `<div style="text-align:center;">سله المنتجات فارغه 🛒</div>`;
        return;
    }

    let total = 0;

    cart.forEach((item, index) => {

        const clone = template.content.cloneNode(true);

        let qty = item.quantity || 1;
        let price = parseFloat(item.price.replace(/[^0-9.]/g, ""));
        total += price * qty;

        clone.querySelector(".cart-item").dataset.index = index;
        clone.querySelector(".cart-image").src = item.image;
        clone.querySelector(".cart-title").textContent = item.title;
        clone.querySelector(".cart-price").textContent = item.price;
        clone.querySelector(".quantity").textContent = qty;

        container.appendChild(clone);
    });

    container.innerHTML += `<div class="total">Total: $${total.toFixed(2)}</div>`;
}

container.addEventListener("click", (e) => {

    const itemEl = e.target.closest(".cart-item");
    if (!itemEl) return;

    let index = itemEl.dataset.index;

    if (e.target.classList.contains("increase")) {
        cart[index].quantity = (cart[index].quantity || 1) + 1;
    }

    if (e.target.classList.contains("decrease")) {
        cart[index].quantity = (cart[index].quantity || 1) - 1;

        if (cart[index].quantity <= 0) {
            cart.splice(index, 1);
        }
    }

    if (e.target.classList.contains("delete")) {
            cart.splice(index, 1);
        }

if (e.target.classList.contains("confirm-btn")) {
    window.location.href = "checkout.html";
}

    saveCart();
    renderCart();
});

function goCheckout() {
    window.location.href = "checkout.html";
}

renderCart();