<?php

namespace App\services;


class App
{
    public static function start()
    {
        self::dbconn();
        self::enterPoint();
    }

    public static function enterPoint()
    {
        header("Location:/../views/pages/LoadDataP.html");
    }

    public static function dbconn()
    {
        $config = require_once "config/db_config.php";
        $conn = mysqli_connect($config["host"], $config["username"], $config["password"],$config["db_name"]);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
    }
}