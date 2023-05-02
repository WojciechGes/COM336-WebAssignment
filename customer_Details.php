<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    echo "Thank you for submitting your details, $name!<br>";
    echo "Your email address is: $email<br>";
    echo "Your phone number is: $phone<br>";
    echo "Your address is: $address<br>";
}
?>