<?php

class UserController extends Controller{
    
    // 顯示所有活動
    function index(){
        $showAllActivity = $this->model("Activity");
        $data = $showAllActivity->findActivity();
        $this->view("join_activity", $data);
    }
    
    // 進入活動報名頁面
    function joinActivity($url){
        $findUrl = $this->model("Activity");
        $data = $findUrl->signUrlPage($url);
        $this->view('correct_Activity', $data);
    }
    
    // 報名活動
    function addJoinList(){
        $activity_id = $_POST['id'];
        $user_id = $_POST['user_id'];
        $user_name = $_POST['user_name'];
        $newCarryCount = $_POST['newCarryCount']+1;
        
        $findList = $this->model("Activity");
        $findUserList = $findList->findUserList($activity_id, $user_id, $user_name, $newCarryCount);
        
        if($result == NULL){
            $addList = $this->model("Activity");
            $addUserTotal = $addList->userJoinActivity($activity_id, $user_id, $user_name, $newCarryCount);
            $this->view("alert", '報名成功');
            header("location:/Activity/User/index");
        }
        return false;
    }
    
}

?>
