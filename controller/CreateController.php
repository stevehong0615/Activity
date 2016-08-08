<?php

class CreateController extends Controller{
    
    // 顯示後台建立活動頁面
    function index(){
        $showAllActivity = $this->model("Activity");
        $data = $showAllActivity->findActivity();
        $this->view("create_activity", $data);
    }
    
    // 建立活動
    function createActivity(){
        
        $activity_name = $_POST['activity_name'];
        $count_limit = $_POST['count_limit'];
        $rdoPet = $_POST['rdoPet'];
        $start_time = $_POST['start_time'];
        $end_time = $_POST['end_time'];
        $employee_id = $_POST['userid'];
        $employee_name = $_POST['username'];
        $t=time();
        $t.=$a=rand(1,2000);
        $url=md5($t);
        
        if($start_time > $end_time){
            $this->view("alert", '結束時間需大於開始時間');
            header("refresh:0, url=https://lab-stevehong0615.c9users.io/Activity/Create/index");
        }
        else{
            $createActivity = $this->model("Activity");
            $createdData = $createActivity->createEvent($activity_name, $count_limit, $rdoPet, $start_time, $end_time, $employee_id, $employee_name, $url);
            $this->view("alert", '活動建立成功');
            header("refresh:0, url=https://lab-stevehong0615.c9users.io/Activity/Create/index");
        }
    }
    
}

?>