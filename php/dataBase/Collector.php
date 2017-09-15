<?php
include_once('dataBase.php'); //Incluye la base

// Define configuration
define("DB_HOST", "ec2-54-163-230-219.compute-1.amazonaws.com");
define("DB_USER", "zqdujhlcjjjtsw");
define("DB_PASS", "5262ed34c79cc2ff7f01757e98c293da8c93db307eef6966567d03b2bbf52ee2");
define("DB_NAME", "dc3o02ch49fjju");


class Collector extends dataBase
{
  public static $db; //Es una sola instancia
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }
