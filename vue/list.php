<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "../class/customerInfo.php";
    ?>
    <title>Liste des inscrits</title>
</head>
<body>
    <?php
    $tabCustomer = customerInfo::getCustomerInfoForPrint();
    echo print_r($tabCustomer);
    echo "<table>";
    echo "<tr>";
    echo "<th>Nom</th>";
    echo "<th>Prénom</th>";
    echo "<th>Email</th>";
    echo "</tr>";
    foreach($tabCustomer as $customer){
        echo "<tr>";
        echo "<td>".$customer['Nom']."</td>";
        echo "<td>".$customer['Prénom']."</td>";
        echo "<td>".$customer['email']."</td>";
        echo "</tr>";
    }
    echo "</table>";    
    ?>
    
</body>
</html>