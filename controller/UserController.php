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
        $newCarryCount = $_POST['newCarryCount'] + 1;

        $sql = $this->model("Activity");
        $findUser = $sql->findUserList($activity_id, $user_id, $user_name, $newCarryCount);
        $findJoinCount = $sql->joinTotalCount($activity_id);

        if($findUser[0]['total'] == NULL && $user_id == $findUser[0]['user_id'] && $user_name == $findUser[0]['user_name']){
            if($findJoinCount < $newCarryCount){
                $this->view("alert", '超過報名人數限制');
                header("refresh:0, url=https://lab-stevehong0615.c9users.io/Activity/User/index");
            }
            if($findJoinCount >= $newCarryCount){
                $addUserTotal = $sql->userJoinActivity($activity_id, $user_id, $user_name, $newCarryCount);
                $this->view("alert", '報名成功');
                header("refresh:0, url=https://lab-stevehong0615.c9users.io/Activity/User/index");
            } else {
                $this->view("alert", '無權限報名或重複報名');
                header("refresh:0, url=https://lab-stevehong0615.c9users.io/Activity/User/index");
            }
        }
    }
}

?>
