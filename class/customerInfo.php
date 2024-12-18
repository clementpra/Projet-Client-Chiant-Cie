<?php

include "/var/www/html/process/dbConnector.php";

class customerInfo{

    static function getCustomerInfoForPrint(){
        $mysqlClient = PDOMySQLConnector::getClient();

        $requeteSQL = 'SELECT * FROM CustomersInfo where 1';
        $requete = $mysqlClient->prepare($requeteSQL);
        $requete->execute();
        $result = $requete->fetchAll(PDO::FETCH_ASSOC);
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


    static function getCustomerId($nom, $prenom){
        $mysqlClient = PDOMySQLConnector::getClient();

        $requeteSQL = 'SELECT idCustomer FROM CustomersInfo WHERE Nom LIKE :nom AND Prénom LIKE :prenom';
        $requete = $mysqlClient->prepare($requeteSQL);
        $requete->bindParam(':nom', $nom);
        $requete->bindParam(':prenom', $prenom);
        $requete->execute();
        $result = $requete->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    static function deleteCustomer($id){
        $mysqlClient = PDOMySQLConnector::getClient();

        $requeteSQL = 'DELETE FROM CustomersInfo WHERE idCustomer = :id';
        $requete = $mysqlClient->prepare($requeteSQL);
        $requete->bindParam(':id', $id);
        $requete->execute();
        return "Success";
    }

}