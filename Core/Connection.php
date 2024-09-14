<?php

class Connection
{
    private static $_INSTANCE = null;

    private function __construct($config)
    {
        try {
            $dns = "mysql:host={$config['DB_HOST']};dbname={$config['DB_DATABASE']}";
            $options = [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ];
            $conn = new PDO($dns, $config['DB_USERNAME'], $config['DB_PASSWORD'] ?? '', $options);

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function getInstance($config)
    {
        if (self::$_INSTANCE == null) {
            self::$_INSTANCE = new Connection($config);
        }

        return self::$_INSTANCE;
    }
}
