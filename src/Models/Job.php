<?php
namespace App\Models ;

class Job {

    private $db;

    public function __construct()
    {
        // Assuming you have a Database class that provides a PDO connection
        $this->db = Database::getInstance()->getConnection();
    }
    public function creat($data) {
        $stmt =  $this->db->prepare("INSERT INTO jobs (title,user_id)
        VALUE (?,?)");
        $stmt->execute($data);
        return $stmt;
    
    }
    
}