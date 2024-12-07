<?php
namespace App\Helpers;

class DBConnection {
    private static $connection;

    public static function connect() {
        if (self::$connection === null) {
            $config = include __DIR__ . '/../../config/config.php';
            self::$connection = new \mysqli(
                $config['db_host'],
                $config['db_user'],
                $config['db_pass'],
                $config['db_name'],
            );

            if (self::$connection->connect_error) {
                die("Database connection failed: " . self::$connection->connect_error);
            }
        }
        return self::$connection;
    }
}
