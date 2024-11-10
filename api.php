<?php

$mysqlClient = new PDO('mysql:host=10.20.9.131;dbname=ProjetClientChiantDB;charset=utf8', 'webserv', '{)9YbiIuM.e!7z(');

$requeteSQL = 'SELECT * FROM CustomersInfo';
$requete = $mysqlClient->prepare($requeteSQL);
$requete->execute();
$result = $requete->fetchAll();

echo $result;