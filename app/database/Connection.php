<?php
namespace app\database;

use PDO;

class Connection
{
    private static $pdoInstance = null;

    public static function getConnection()
    {
        if (empty(self::$pdoInstance)) {
            self::$pdoInstance = new PDO("mysql:host=localhost;dbname=lumen", "root", "");
        }

        return self::$pdoInstance;
    }
}
