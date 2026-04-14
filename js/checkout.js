console.log("JS WORKS");
function showMethod(method) {

    document.getElementById("vodafoneBox").style.display = "none";
    document.getElementById("visaBox").style.display = "none";
    document.getElementById("codBox").style.display = "none";

    if (method === "vodafone") {
        document.getElementById("vodafoneBox").style.display = "block";
    }

    if (method === "visa") {
        document.getElementById("visaBox").style.display = "block";
    }

    if (method === "cod") {
        document.getElementById("codBox").style.display = "block";
    }
}

// submit form
document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("paymentForm");

    if (!form) {
        console.log("FORM NOT FOUND ❌");
        return;
    }

    form.addEventListener("submit", function(e) {
        e.preventDefault();

        const formData = new FormData(form);

        fetch("process.php", {
            method: "POST",
            body: formData
        })
        .then(res => res.text())
        .then(data => {

    console.log("RESPONSE:", data);

    if (data.trim() === "success") {

        // إخفاء الفورم
        form.style.display = "none";

        // إظهار رسالة النجاح
        const msg = document.getElementById("successMsg");
        msg.style.display = "block";

    } else {
        alert("ERROR: " + data);
    }

})
        .catch(err => {
            console.error(err);
            alert("Request failed");
        });

    });

});