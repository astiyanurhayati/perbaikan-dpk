<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$mailheader ="From:" .$name. "<" .$email.">\I\n";

$recipient = "astiyanurhayati18@gmail.com";
mail($recipient, $subject, $message. $mailheader)
ordie("Error!");

echo'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Martel:wght@200;300;400&family=Merriweather&family=Outfit&family=Quicksand:wght@500&family=Roboto+Slab:wght@400;500&display=swap" rel="stylesheet">
    <title>contact form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting me</h1>
        <p class="back"> Go back to the <a href="mail.html">homepage</a></p>
    </div>
</body>
</html>

';
?>