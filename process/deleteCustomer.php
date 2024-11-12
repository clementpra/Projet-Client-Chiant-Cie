<?php

include "/var/www/html/class/customerInfo.php";


$id = $_POST['id'];


$result = customerInfo::deleteCustomer($id);

if ($result == "Success") {
    echo json_encode('success');
} else {
    echo json_encode("error");
}