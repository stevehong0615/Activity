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
        $findUser = $findList->findUserList($activity_id, $user_id, $user_name, $newCarryCount);
        // echo $findUser[0]['total'];
        if($findUser[0]['total'] == NULL){
            $addList = $this->model("Activity");
            $addUserTotal = $addList->userJoinActivity($activity_id, $user_id, $user_name, $newCarryCount);
            $this->view("alert", '報名成功');
            header("refresh:0, url=https://lab-stevehong0615.c9users.io/Activity/User/index");
        }
        else{
            $this->view("alert", '已報名過，不能重複報名');
            header("refresh:0, url=https://lab-stevehong0615.c9users.io/Activity/User/index");
        }
        
    }
    
}

?>
