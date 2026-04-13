
const cards = document.querySelectorAll(".cards-container .card");
const showMoreBtn = document.querySelector(".button");

if (cards.length > 0 && showMoreBtn) {

  let currentItems = 10;

  cards.forEach((card, index) => {
    if (index >= currentItems) {
      card.style.display = "none";
    }
  });

  showMoreBtn.addEventListener("click", () => {

    currentItems += 10;

    cards.forEach((card, index) => {
      if (index < currentItems) {
        card.style.display = "block";
      }
    });

    if (currentItems >= cards.length) {
      showMoreBtn.style.display = "none";
    }
  });
}