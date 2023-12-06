<?php

Class EventRegister{

    private $usrJoinCode;
    private $usrAccount;
    private $teamName;
    private $problemStatement;
    private $presentation;
    public $errorMessage;

    public function hackathon($team,$problem,$presentation){
        $this->usrJoinCode = $_SESSION['joinCode'];
        $this->usrAccount = $_SESSION["user"];
        $this->teamName = $team;
        $this->problemStatement = $problem;
        $this->presentation = $presentation;
    }

}

