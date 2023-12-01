<?php
//handle sessions

Class UserSession{
    
    private $user;

    public function __construct(){
        
    }

    public function createSession(){
        session_start();
    }

    public function destroySession(){
        session_destroy();
    }

    public function setUser($user){
        global $_SESSION;
        $this->user = $user;
        $_SESSION["user"] = $this->user;
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
        $db->query("SELECT * from users where usrAccountCode=:userAccountCode");
        $db->bind(':userAccountCode', $_SESSION["user"]);
        
        $user = $db->single(); // Fetch a single record
    
        return (!empty($_SESSION["user"]) && $user) ? true : false; // Check if user exists
    }
    


}


