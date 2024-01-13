<?php

namespace App\Models;
use PDO;

class Database
{
    private static $instance;
    private $pdo;

    private function __construct()
    {
        // Your database connection details
        
        $dbHost = $_ENV['DB_HOST'];
        $dbUser = $_ENV['DB_USERNAME'];
        $dbPass = $_ENV['DB_PASSWORD'];
        $dbName = $_ENV['DB_NAME'];

           // Create a PDO database connection
           $this->pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

           // Set PDO to throw exceptions on error
           $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       }
   
       public static function getInstance()
       {
           if (!self::$instance) {
               self::$instance = new self();
           }
   
           return self::$instance;
       }
   
       public function getConnection()
       {
           return $this->pdo;
       }
   }