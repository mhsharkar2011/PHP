<?php 

class Database{
    public static $host = DB_HOST;
    public static $user = DB_USER;
    public static $pass = DB_PASSWORD;
    public static $dbname = DB_NAME;

    private static $instance;
    private $mysqli;

    private final function __construct()
    {
        $this->mysqli = new mysqli(self::$host,self::$user,self::$pass,self::$dbname);

        if($this->mysqli->connect_error){
            die("Database connection fail: " . $this->mysqli->connect_error);
        }
    }

    public static function getConnect()
    {
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }


}