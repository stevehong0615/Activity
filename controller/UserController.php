<?php

class UserController extends Controller{
    function index(){
        $showAllActivity = $this->model("Activity");
        $data = $showAllActivity->findActivity();
        $this->view("join_activity", $data);
    }
    
    function joinActivity($url){
        $findUrl = $this->model("Activity");
        $data = $findUrl->signUrlPage($url);
        $this->view('correct_Activity', $data);
    }
    
}

?>