<?php
$host = "sql103.infinityfree.com";
$user = "if0_41670035";
$pass = "Mostafa132006";
$db   = "if0_41670035_nexora";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//أهم سطر لحل مشكلة العربي
mysqli_set_charset($conn, "utf8mb4");
?>