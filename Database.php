<?php
include "Config.php";
class Database
{
  public  $host  = DB_HOST;
  public $user   = DB_USER;
  public $pass   = DB_PASS;
  public $dbname = DB_NAME;

  public static $obj;
  public $db_connect;

  public final function __construct()
  {
    $this->db_connect = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
  }

  public static function getConnect()
  {
    if (!isset(self::$obj)) {
      self::$obj = new Database;
    }
    return self::$obj;
  }

  public function select($query)
  {
    $result = $this->db_connect->query($query) or die($this->db_connect->error . __LINE__);

    if ($result->num_rows > 0) {
      return $result;
    } else {
      return false;
    }
  }

  public function insert($query)
  {
    $result = $this->db_connect->query($query) or die($this->db_connect->error . __LINE__);

    if ($result->num_rows > 0) {
      return $result;
    } else {
      return false;
    }
  }
}
