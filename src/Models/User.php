<?php
namespace App\Models;

use PDO;

class User
{
    private $db;

    public function __construct()
    {
        // Assuming you have a Database class that provides a PDO connection
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAllUsers()
    {
        try {
            // Prepare and execute the SQL query to select all users
            $query = "SELECT * FROM users";
            $statement = $this->db->query($query);

            // Fetch all users as an associative array
            $users = $statement->fetchAll(PDO::FETCH_ASSOC);

            return $users;
        } catch (\PDOException $e) {
            // Handle the exception (log, throw, or handle gracefully)
            die("Error: " . $e->getMessage());
        }
    }
    public function delete($id)
    {
        // dump($id);die();
        try {
            // Prepare and execute the SQL query to select all users
          
            $stmt = $this->db->prepare( "DELETE FROM users WHERE id =:id" );
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        } catch (\PDOException $e) {
            // Handle the exception (log, throw, or handle gracefully)
            die("Error: " . $e->getMessage());
        }
    }
}
