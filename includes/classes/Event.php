<?php
Class Event{
    public function userEvents()
    {
        global $_SESSION;
        global $db;
        $db->query("SELECT `ANANT HACKATHON` FROM `users` WHERE `usrAccountCode`=:userAccountCode");
        $db->bind(':userAccountCode', $_SESSION["user"]);

        $events = get_object_vars($db->single());
        $temp_arr = array();
        foreach ($events as $eventName => $bool){
            if($bool === 'Yes'){
                $temp_arr[] = $eventName;
            }
        }
        return $temp_arr;

    }

    public function setEvent($user, $event, $bool)
    {
        global $_SESSION;
        global $db;

        $query = "UPDATE users SET `".$event."` = :bool WHERE usrAccountCode = :user";
        $db->query($query);
        $db->bind(':user', $user);
        $db->bind(':bool', $bool);

        $db->execute();
    }


    public function allEvents(){
        global $db;
        $db->query("SELECT * FROM events");
        $db->execute();
        return $db->resultset();
    }

}