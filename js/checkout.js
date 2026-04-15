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
document.addEventListener("submit", function (e) {
    e.preventDefault();
    e.stopPropagation(); // مهم جدًا يقفل أي submit قديم

    const form = e.target;
    const formData = new FormData(form);

    fetch("process.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(data => {

        console.log("RESPONSE:", data);

        if (data.trim() === "success") {

            form.style.display = "none";

            // مهم: يظهر الرسالة في نفس الصفحة
            document.getElementById("successMsg").style.display = "block";

        } else {
            alert("ERROR: " + data);
        }

    })
    .catch(err => {
        console.error(err);
        alert("Request failed");
    });
});