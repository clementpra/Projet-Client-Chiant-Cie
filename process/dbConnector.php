<?php

class PDOMySQLConnector
{
    private static $mysqlClient;

    public static function getClient()
    {
        if (self::$mysqlClient == null) {
            self::$mysqlClient = new PDO('mysql:host=10.20.9.131;dbname=ProjetClientChiantDB;charset=utf8', 'webserv', '{)9YbiIuM.e!7z(');
        }
        return self::$mysqlClient;
    }
}