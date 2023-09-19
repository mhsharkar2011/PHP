<?php 

class DatabaseConnector{
    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASSWORD;
    public $dbname = DB_NAME;

    private static $db_con;
    public $error;

    private final function __construct()
    {
        
        $this->getConnect();
    }

    public static function getConnect()
    {
        self::$db_con = new mysqli($host,$user,$pass,$dbname)
    }
}