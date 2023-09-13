<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "nnascimento.kr@gmail.com";
    $subject = "New contact form submission";
    $headers = "From: $email";
    $message = "Name: $name\nEmail: $email\nMessage:\n$message";

    mail($to, $subject, $message, $headers);
}
?>