
const searchInput = document.getElementById("searchInput");

if (searchInput) {

  const products = document.querySelectorAll(".product");
  const noResults = document.getElementById("noResults");

  searchInput.addEventListener("keyup", function () {

    const value = this.value.toLowerCase();
    let found = false;

    products.forEach(product => {

      const title = product.querySelector("h3");
      const text = title.textContent.toLowerCase();

      title.innerHTML = title.textContent;

      if (text.includes(value) && value !== "") {

        product.style.display = "flex";
        found = true;

        const regex = new RegExp(`(${value})`, "gi");
        title.innerHTML = title.textContent.replace(
          regex,
          `<span style="background:yellow;">$1</span>`
        );

      } else if (value === "") {

        product.style.display = "flex";

      } else {

        product.style.display = "none";
      }
    });

    if (noResults) {
      noResults.style.display = (!found && value !== "") ? "block" : "none";
    }
  });
}