<?php

include_once "./../process/dbConnector.php";

class customerInfo{

    function getCustomerInfo(){
        $mysqlClient = PDOMySQLConnector::getClient();

        $requeteSQL = 'SELECT * FROM customersInfo';
        $requete = $mysqlClient->prepare($requeteSQL);
        $requete->execute();
        $result = $requete->fetchAll();
        return $result;
    }
}