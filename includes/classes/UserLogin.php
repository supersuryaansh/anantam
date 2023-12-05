<?php
//Login Class

Class UserLogin{
    

	public $sessionCode;
	public $loggedIn;
	//user submitted values
	private $userEmail;
	private $userPassword;

	//message for frontend
	public $errorMessage;

	//set this variable true if user submitted correct values
	private $filter;

	public function __construct(string $userEmail, string $userPassword){
		//initialise user value
		$this->userEmail = $userEmail;
		$this->userPassword = $userPassword;

		//verify is data is legal
		//register only if not registered before
		if($this->verifyInput()){

			$this->filter = true;
			if($this->userExists()){
				$this->loginUser();
			}

		}
		
	}

	//verify Input
	private function verifyInput(){
		// Check if required fields are not empty
		if(empty($this->userEmail) || empty($this->userPassword)){
			$this->errorMessage = "All fields are required";
			return false;
		}
	
		// Validate email format
		if(!filter_var($this->userEmail, FILTER_VALIDATE_EMAIL)){
			$this->errorMessage = "Invalid email format";
			return false;
		}

		// Additional validation for other fields can be added here
	
		// If all validations pass, set $filter to true
		$this->filter = true;
		return true;
	}
	
	//check if the user exists
	private function userExists(){
		global $db;
		$db->query("SELECT * FROM users where usrEmail=:email AND usrPass=:usrPass");
		$db->bind(':email',$this->userEmail);
		$db->bind('usrPass',$this->userPassword);	
		$db->execute();

		if($db->rowCount() < 1 ){
			$this->errorMessage = "Email or Password is incorrect";
			return false;
		}

		return true;
	}

	//register the user
	private function loginUser(){
		global $db;
		$db->query("SELECT * FROM users where usrEmail=:usrEmail AND usrPass=:usrPass");
		$db->bind(':usrEmail',$this->userEmail);
		$db->bind(':usrPass',$this->userPassword);
		$db->execute();
		echo $db->getError();
		
        $userCode = $db->resultset();
        $userCode = get_object_vars($userCode[0]);
        $userCode = $userCode['usrAccountCode'];
        $this->sessionCode = $userCode;
		$this->loggedIn = true;
	}


//end class
}