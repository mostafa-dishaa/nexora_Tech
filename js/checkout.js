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
document.getElementById("paymentForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const name = document.getElementById("name").value;
    const phone = document.getElementById("phone").value;
    const address = document.getElementById("address").value;

    if (!name || !phone || !address) {
        alert("من فضلك املأ البيانات");
        return;
    }

    document.getElementById("paymentForm").style.display = "none";
    document.getElementById("successMsg").style.display = "block";

    localStorage.removeItem("cart");
});