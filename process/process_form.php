<?php

include "/var/www/html/class/customerInfo.php";


$nom = $_POST['nom'];

$prenom = $_POST['prenom'];

$email = $_POST['email'];


$result = customerInfo::addCustomerInfo($nom, $prenom, $email);

if ($result == "Success") {
    header("Location: ../vue/success.html");
} else {
    echo "An error occured, please try again";
}