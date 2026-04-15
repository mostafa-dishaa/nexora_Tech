
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
$(document).ready(function () {

  $.ajax({
    url: "https://countriesnow.space/api/v0.1/countries/flag/images",
    type: "GET",
    success: function (res) {

      const data = res.data;

      data.sort((a, b) => a.name.localeCompare(b.name));

      data.forEach(country => {

        $('#country').append(`
          <option value="${country.iso2}" data-flag="${country.flag}">
            ${country.name}
          </option>
        `);

      });

      // مهم جدًا بعد إضافة البيانات
      $('#country').select2({
        placeholder: "Search country...",
        allowClear: true,
        width: '100%',

        templateResult: function (data) {
          if (!data.id) return data.text;

          const flag = $(data.element).data('flag');

          if (!flag) return data.text;

          return $(`
            <span>
              <img src="${flag}" style="width:20px;height:14px;margin-right:8px;vertical-align:middle;">
              ${data.text}
            </span>
          `);
        },

        templateSelection: function (data) {
          const flag = $(data.element).data('flag');

          if (!flag) return data.text;

          return $(`
            <span>
              <img src="${flag}" style="width:20px;height:14px;margin-right:8px;vertical-align:middle;">
              ${data.text}
            </span>
          `);
        }

      });

    },
    error: function () {
      console.log("Failed to load countries");
    }

  });

});
// submit
document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    console.log("Form submitted");

    const form = document.getElementById("contactForm"); // 👈 أقوى تحديد

    let formData = new FormData(form);

    fetch("contact_process.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        console.log("Response:", data);

        if (data.trim() === "success") {

            alert("تم الإرسال بنجاح ✅");

            form.reset(); // 👈 هنا الحل النهائي

        }
    })
    .catch(err => {
        console.log("Error:", err);
    });
});