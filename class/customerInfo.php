<?php

include "/var/www/html/process/dbConnector.php";

class customerInfo{

    static function getCustomerInfo(){
        $mysqlClient = PDOMySQLConnector::getClient();

        $requeteSQL = 'SELECT * FROM CustomersInfo';
        $requete = $mysqlClient->prepare($requeteSQL);
        $requete->execute();
        $result = $requete->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    static function addCustomerInfo($nom, $prenom, $email){
        $mysqlClient = PDOMySQLConnector::getClient();

        $requeteSQL = 'INSERT INTO CustomersInfo (Nom, Prénom, email) VALUES (:nom, :prenom, :email)';
        $requete = $mysqlClient->prepare($requeteSQL);
        $requete->bindParam(':nom', $nom);
        $requete->bindParam(':prenom', $prenom);
        $requete->bindParam(':email', $email);
        $requete->execute();
        return "Success";
    }
}