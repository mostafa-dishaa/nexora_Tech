<?php
include "db.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"] ?? "";
    $address = $_POST["address"] ?? "";
    $city = $_POST["city"] ?? "";
    $state = $_POST["state"] ?? "";
    $zip = $_POST["zip"] ?? "";
    $country = $_POST["country"] ?? "";

    $sql = "INSERT INTO contact_form (name, address, city, state, zip, country)
VALUES ('$name', '$address', '$city', '$state', '$zip', '$country')";

if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo mysqli_error($conn); // 👈 مهم جدًا
}

    exit();
}
?>