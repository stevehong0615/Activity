<?php

class Activity extends Connect{
    
    function findActivity(){
        $allActivity = $this->db->prepare("SELECT * FROM `create_activity`");
        $allActivity->execute();
        $result = $allActivity->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    function createEvent($activity_name, $count_limit, $rdoPet, $start_time, $end_time, $employee_id, $employee_name, $url){
        
        $insertActivity = $this->db->prepare("INSERT INTO `create_activity` (`activity_name`, `count`, `carry`, `created_time`, `end_time`, `url`)
                                            VALUES (:activity_name, :count, :carry, :created_time, :end_time, :url)");
        $insertActivity->bindParam(':activity_name', $activity_name);
        $insertActivity->bindParam(':count', $count_limit);
        $insertActivity->bindParam(':carry', $rdoPet);
        $insertActivity->bindParam(':created_time', $start_time);
        $insertActivity->bindParam(':end_time', $end_time);
        $insertActivity->bindParam(':url', $url);
        $insertActivity->execute();
    
        $findId = $this->db->prepare("SELECT `id` FROM `create_activity` WHERE `activity_name` = :activity_name");
        $findId->bindParam(':activity_name',$activity_name);
        $findId->execute();
        $result = $findId->fetchAll(PDO::FETCH_ASSOC);
        
        $i = 0;
        foreach($employee_id as $employee_col){
        $addUser = $this->db->prepare("INSERT INTO `employee` (`activity_id`, `user_id`, `user_name`)
                                    VALUES (:activity_id, :user_id, :user_name)");
        $addUser->bindParam(':activity_id', $result[0]['id']);
        $addUser->bindParam(':user_id', $employee_col);
        $addUser->bindParam(':user_name', $employee_name[$i]);
        $addUser->execute();
        
        $i++;
        }
        return true;
    }
    
    function signUrlPage($url){
        $findUrl = $this->db->prepare("SELECT * FROM `create_activity` WHERE `url`=:url");
        $findUrl->bindParam(':url', $url);
        $findUrl->execute();
        $data = $findUrl->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    
    function findUserList($activity_id, $user_id){
        $findEmployee = $this->db->prepare("SELECT `total`, `user_id`, `user_name` FROM `employee` WHERE `activity_id` = :activity_id AND `user_id` = :user_id");
        $findEmployee->bindParam(':activity_id', $activity_id);
        $findEmployee->bindParam(':user_id', $user_id);
        $findEmployee->execute();
        $result = $findEmployee->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    function userJoinActivity($activity_id, $user_id, $user_name, $newCarryCount){
        $addUserActivity = $this->db->prepare("UPDATE `employee` SET `total` = :total WHERE `activity_id` = :activity_id AND `user_id` = :user_id AND `user_name` = :user_name");
        $addUserActivity->bindParam(':total', $newCarryCount);
        $addUserActivity->bindParam(':activity_id', $activity_id);
        $addUserActivity->bindParam(':user_id', $user_id);
        $addUserActivity->bindParam(':user_name', $user_name);
        $addUserActivity->execute();
        return true;
    }
    
    function joinCount(){
      $joinCount = $this->db->prepare("SELECT SUM(`total`) FROM `employee` WHERE `activity_id` = :activity_id");
      $joinCount->bindParam(':activity_id', $_GET['id']);
      $joinCount->execute();
      $joinResult = $joinCount->fetch(PDO::FETCH_ASSOC);
      
      $totalCount = $this->db->prepare("SELECT `count` FROM `create_activity` WHERE `id` = :id");
      $totalCount->bindParam(':id', $_GET['id']);
      $totalCount->execute();
      $totalResult = $totalCount->fetch(PDO::FETCH_ASSOC);
      
      $count = $totalResult['count'] - $joinResult['SUM(`total`)'];
      return $count;
    }
    
}

?>