<?php

class Db
{
    private $hostName = 'localhost';
    private $userName = 'root';
    private $password = '';
    private $dbName = 'first_schema';

    // protected function __construct()
    // {
    //     $this->hostName = $hostName;
    //     $this->userName = $userName;
    //     $this->password = $password;
    //     $this->dbNam = $dbNam;
    // }

    public function connect() 
    {
    try {
        $conn = new PDO("mysql:host=$this->hostName;dbname=dbName", $this->userName, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
    }  
}