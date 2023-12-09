<?php
//handle sessions

Class UserSession{
    
    private $user;
    public $joinCode;

    public function __construct(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }


    public function destroySession(){
        session_destroy();
    }

    public function setUser($user){
        global $_SESSION;
        $this->user = $user;
        $_SESSION["user"] = $this->user;

		global $db;
		$db->query("SELECT * FROM users where usrAccountCode=:usrAccountCode");
		$db->bind(':usrAccountCode',$this->user);
		$db->execute();
		echo $db->getError();
		
        $userCode = $db->resultset();
        $userCode = get_object_vars($userCode[0]);
        $userCode = $userCode['usrCode'];
        $this->joinCode = $userCode;
        $_SESSION["joinCode"] = $this->joinCode;

    }

    public function getUser(){
        //return false if the user does not exist
        //**WARNING CHECK IS LOGGED IN BEFORE USING */
        global $_SESSION;
        return $_SESSION["user"];
    }

    // check if the user is logged in
    public function loggedIn(){
        global $_SESSION;
        global $db;
        if(!empty($_SESSION["user"]) ) {
            $db->query("SELECT * from users where usrAccountCode=:userAccountCode");
            $db->bind(':userAccountCode', $_SESSION["user"]);

            $user = $db->single(); // Fetch a single record
        }
        return (!empty($_SESSION["user"]) && isset($user)) ? true : false; // Check if user exists
    }

    public function getName(){
        global $_SESSION;
        global $db;
        $db->query("SELECT usrName from users where usrAccountCode=:userAccountCode");
        $db->bind(':userAccountCode', $_SESSION["user"]);

        $userName = get_object_vars($db->single());
        return  $userName['usrName'];
    }
    
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

}


