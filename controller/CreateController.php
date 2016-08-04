<?php

class CreateController extends Controller{
    
    function index(){
        $this->view("create_activity", $data);
    }
    
    function createActivity(){
        $activity_name = $_POST['activity_name'];
        $count_limit = $_POST['count_limit'];
        $rdoPet = $_POST['rdoPet'];
        $start_time = $_POST['start_time'];
        $end_time = $_POST['end_time'];
        $employee_id = $_POST['userid'];
        $employee_name = $_POST['username'];
        
        $createActivity = $this->model("Activity");
        $createdData = $createActivity->createEvent($activity_name, $count_limit, $rdoPet, $start_time, $end_time, $employee_id, $employee_name);
        
        // header("location:/Activity/Create/index");
    }
    
}

?>