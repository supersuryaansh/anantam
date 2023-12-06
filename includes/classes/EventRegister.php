<?php

Class EventRegister{

    private $usrJoinCode;
    private $usrAccount;
    private $teamName;
    private $problemStatement;
    private $presentation;
    private $leader;
    public $errorMessage;

    public function hackathon($team,$problem,$presentation,$leader){
        global $db;
        $this->teamName = $team;
        $this->problemStatement = $problem;
        $this->presentation = $presentation;
        $this->leader = $leader;

        $this->usrJoinCode = $_SESSION['joinCode'];
        $this->usrAccount = $_SESSION["user"];


        $db->query("INSERT INTO teams(`teamCode`,`teamName`,`teamLeader`,`presentation`,`problemStatement`) VALUES(:joinCode,:teamName,:teamLeader,:presentation,:problem)");
        //bind parameters
        $db->bind(':joinCode', $this->usrJoinCode);
        $db->bind(':teamName', $this->teamName);
        $db->bind(':teamLeader', $this->leader);
        $db->bind(':presentation', $this->presentation);
        $db->bind(':problem', $this->problemStatement);
        // Execute the prepared statement
        $db->execute();


    }

}

