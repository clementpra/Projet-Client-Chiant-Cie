<?php

include "/var/www/html/class/customerInfo.php";

$nom = $_POST['nom'];

$prenom = $_POST['prenom'];

$email = $_POST['email'];

$ids = customerInfo::getCustomerId($nom, $prenom);

if ($ids != null) {
    header('content-type: application/json');
    echo json_encode(['success' => false,
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email]);
    return;
}

$result = customerInfo::addCustomerInfo($nom, $prenom, $email);

if ($result == "Success") {
    header('content-type: application/json');
    echo json_encode(['success' => true,
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email]);
} else {
    header('content-type: application/json');
    echo json_encode(['success' => false,
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email]);
}