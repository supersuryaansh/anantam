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
        return (isset($this->user) && !empty($this->user)) ? $_SESSION["user"] : false;
    }


}


