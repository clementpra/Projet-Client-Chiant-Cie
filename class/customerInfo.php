<?php

include "/var/www/html/process/dbConnector.php";

class customerInfo{

    static function getCustomerInfo(){
        $mysqlClient = PDOMySQLConnector::getClient();

        $requeteSQL = 'SELECT * FROM CustomersInfo';
        $requete = $mysqlClient->prepare($requeteSQL);
        $requete->execute();
        $result = $requete->fetchAll();

        return $result;
    }
}