
// =======================
// Dark Mode
// =======================
const toggle = document.getElementById("darkModeToggle");

if (toggle) {
  const icon = toggle.querySelector("i");

  toggle.addEventListener("click", () => {
    document.body.classList.toggle("dark");

    if (document.body.classList.contains("dark")) {
      icon.classList.replace("fa-moon", "fa-sun");
    } else {
      icon.classList.replace("fa-sun", "fa-moon");
    }
  });
}


// =======================
// Back To Top
// =======================
const topBtn = document.createElement("button");
topBtn.id = "topBtn";
topBtn.innerHTML = '<i class="fa-solid fa-arrow-up"></i>';
document.body.appendChild(topBtn);

window.addEventListener("scroll", () => {
  if (document.documentElement.scrollTop > 100) {
    topBtn.style.display = "block";
  } else {
    topBtn.style.display = "none";
  }
});

topBtn.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});


// =======================
// Select2
// =======================
document.addEventListener("DOMContentLoaded", function () {
  if (typeof $ === "undefined" || !$.fn.select2) return;

  const country = document.getElementById("country");

  if (country) {
    $('#country').select2({
      placeholder: "Search country...",
      allowClear: true,
      width: '100%'
    });
  }
});