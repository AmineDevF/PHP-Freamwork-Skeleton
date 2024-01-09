<?php 
namespace App\Controllers ;

use App\Controller;
use App\Models\Job;

class JobController extends Controller {

    public function creat(){

        $this->render('jobs/creat');
    }
    public function insert(){

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $data = [$_POST['title'],$_POST['user_id']];
            $job = new Job();
            $job->creat($data);
             
        }
    }

}