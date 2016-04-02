<?php 
$name = $_POST['name'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$datetime = $_POST['datetime'];
$location = $_POST['location'];
$to = "amitamitamit123@gmail.com";
$body = "From: $name\n E-Mail: $email\n Message:\n $city $phone $location";
mail($to,"wanna buy",$body);



?>