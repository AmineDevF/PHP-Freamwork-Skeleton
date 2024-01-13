<?php
namespace App\Controllers;
use App\Controller;
use App\Models\Journal;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $userModel = new User();
        $users = $userModel->getAllUsers();
        
        // dump($users);
       
        $this->render('home',['users' => $users]);
    }
    public function delete($id)
    {
       
    
        $userModel = new User();
        $users = $userModel->delete($id['id']);
       if($users == 1) {
        header('Location: /user' );
       }else {
        $res = "sory user ID:" . $id['id'] ."is inccorect" ;
        echo $res;
       }
        exit;
        
        // $this->render('home',['users' => $users]);
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
