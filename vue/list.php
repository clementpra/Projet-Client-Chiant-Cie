<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des inscrits</title>
    <link rel="stylesheet" href="./css/font.css">
    <style>
        /* Style du corps de la page */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
            min-height: 100vh;
        }

        /* Conteneur de la table */
        .table-container {
            width: 100%;
            max-width: 800px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Table avec style moderne */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        /* En-têtes de table */
        th {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            font-size: 1em;
            text-align: left;
        }

        /* Lignes de la table */
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            color: #333;
        }

        /* Alternance des lignes */
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Style au survol */
        tr:hover {
            background-color: #f1f1f1;
        }

        /* Bouton supprimer */
        .delete-btn {
            background-color: transparent;
            border: none;
            color: #d9534f;
            cursor: pointer;
            font-size: 1.2em;
        }

        .delete-btn:hover {
            color: #c9302c;
        }

        /* Responsivité pour petits écrans */
        @media (max-width: 600px) {
            th, td {
                padding: 10px;
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>

<div class="table-container">
    <h2>Liste des inscrits</h2>
    <?php
    include "../class/customerInfo.php";
    $tabCustomer = customerInfo::getCustomerInfoForPrint();
    echo "<table>";
    echo "<tr>";
    echo "<th>Nom</th>";
    echo "<th>Prénom</th>";
    echo "<th>Email</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    foreach($tabCustomer as $customer){
        echo "<tr>";
        echo "<td>".$customer['Nom']."</td>";
        echo "<td>".$customer['Prénom']."</td>";
        echo "<td>".$customer['email']."</td>";
        echo "<td><button class='delete-btn' onclick=\"deleteCustomer(".$customer['idCustomer'].")\"><i class='fas fa-trash-alt'></i></button></td>";
        echo "</tr>";
    }
    echo "</table>";    
    ?>
</div>

<script>
async function deleteCustomer(id) {
    if (confirm("Êtes-vous sûr de vouloir supprimer cet utilisateur ?")) {
        const reponse = await fetch("../process/deleteCustomer.php", {
            method: "POST",
            body: new URLSearchParams({
            action: 0,
            id: id,
            }),
        });
        window.location.href = `list.php`;
    }
}
</script>

</body>
</html>
