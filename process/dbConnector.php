<?php

class PDOMySQLConnector
{
    private static $mysqlClient;

    public static function getClient()
    {
        if (self::$mysqlClient == null) {
            self::$mysqlClient = new PDO('mysql:host=10.20.9.130;dbname=ProjetClientChiantDB;charset=utf8', 'root', '8331chrC');
        }
        return self::$mysqlClient;
    }
}