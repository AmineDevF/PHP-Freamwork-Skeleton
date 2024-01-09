<?php
namespace App\Controllers;
use App\Controller;
use App\Models\Journal;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $journals = [
            new Journal('My Third Journal Entry', '2023'),
            new Journal('My Second Journal Entry', '2022'),
            new Journal('My Second Journal', '2021')
        ];

        $this->render('index', ['journals' => $journals]);
    }
    
    public function getAllUser()
    {
       
        $userModel = new User();
        $users = $userModel->getAllUsers();
        
        // dump($users);
       
        $this->render('home',['users' => $users]);
    }
    public function fetchMoreUsers()
    {
       
        $moreUsers = [
            ['username' => 'test user A', 'email' => 'user1@example.com'],
            ['username' => 'test user B', 'email' => 'user2@example.com'],
        ];

        // Return the data as JSON
        header('Content-Type: application/json');
        echo json_encode(['users' => $moreUsers]);
        exit;
    }

    public function insert()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            dump($_POST);die();
            $name = isset($_POST["username"]) ? $_POST["username"] : "";
            $email = isset($_POST["password"]) ? $_POST["password"] : "";
            $this->render('layout/home', ['name' => $name]);
        }
    }
}
