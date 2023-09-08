<?php

namespace App\services;


class App
{
    public static function start()
    {
       //self::dbconn();
        self::enterPoint();
    }

    public static function enterPoint()
    {
        header("Location:/../views/pages/LoadDataP.html");
    }

//    public static function dbconn()
//    {
//        $config = require_once "config/db_config.php";
//        if($config['enable']){
//            ( 'mysql:host=' . $config["host"] . ';port=' . $config["port"] . ';dbname=' . $config["db_name"] . '',
//                $config["username"], $config["password"] ); //for both mysql or mariaDB
//            if (!testConnection()){
//                die('Error DB connection');
//            }
//        }
//
//    }
}