<?php

include "/var/www/html/class/customerInfo.php";


$nom = $_POST['nom'];

$prenom = $_POST['prenom'];

$email = $_POST['email'];


$ids = customerInfo::getCustomerId($nom, $prenom);

if ($ids != null) {
    echo 'error';
    return;
}

$result = customerInfo::addCustomerInfo($nom, $prenom, $email);

if ($result == "Success") {
    echo json_encode('success');
} else {
    echo json_encode("error");
}