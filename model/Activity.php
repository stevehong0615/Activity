<?php

class Activity extends Connect{
    
    function createEvent($activity_name, $count_limit, $rdoPet, $start_time, $end_time, $employee_id, $employee_name){
        $insertActivity = $this->db->prepare("INSERT INTO `create_activity` (`activity_name`, `count`, `carry`, `created_time`, `end_time`)
                                            VALUES (:activity_name, :count, :carry, :created_time, :end_time)");
        $insertActivity->bindParam(':activity_name', $activity_name);
        $insertActivity->bindParam(':count', $count_limit);
        $insertActivity->bindParam(':carry', $rdoPet);
        $insertActivity->bindParam(':created_time', $start_time);
        $insertActivity->bindParam(':end_time', $end_time);
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
    }
}

?>