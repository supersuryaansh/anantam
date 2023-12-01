<?php
//Registeration Class

Class UserRegister{
    

	private $userCode;
	
	//user submitted values
	private $userName;
	private $userGender;
	private $userEmail;
	private $userPhone;
	private $userCollegeId;
	private $userGovId;
	private $userPassword;

	//message for frontend
	public $errorMessage;

	//set this variable true if user submitted correct values
	private $filter;

	public function __construct(string $userName, string $usrCode, string $usrAccountCode, string $userGender, string $userEmail, int $userPhone,string $userCollegeId, string $userPassword){
		//initialise user value
		$this->userName = $userName;
		$this->userCode = $usrCode;
		$this->userAccountCode = $usrAccountCode;
		$this->userGender = $userGender;
		$this->userEmail = $userEmail;
		$this->userPhone = $userPhone;
		$this->userCollegeId = $userCollegeId;
		$this->userPassword = $userPassword;

		//verify is data is legal
		//register only if not registered before
		if($this->verifyInput()){

			$this->filter = true;
			if(!($this->userExists())){
				$this->registerUser();
			}

		}
		
	}

	//verify Input
	private function verifyInput(){
		// Check if required fields are not empty
		if(empty($this->userName) || empty($this->userGender) || empty($this->userEmail) || empty($this->userPhone) || empty($this->userCollegeId)  || empty($this->userPassword)){
			$this->errorMessage = "All fields are required";
			return false;
		}
	
		// Validate email format
		if(!filter_var($this->userEmail, FILTER_VALIDATE_EMAIL)){
			$this->errorMessage = "Invalid email format";
			return false;
		}
	
		// Validate phone number format (assuming 10 digits for simplicity)
		if(!preg_match('/^\d{10}$/', $this->userPhone)){
			$this->errorMessage = "Invalid phone number format";
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
		$db->query("SELECT * FROM users where usrEmail=:email");
		$db->bind(':email',$this->userEmail);
		$db->execute();

		if($db->rowCount() >=1 ){
			$this->errorMessage = "User already signed up using this Email address.";
			echo $this->errorMessage;
			return true;
		}

		return false;
	}

	//register the user
	private function registerUser(){
		global $db;
		$db->query("INSERT INTO `users` (`usrCode`, `usrAccountCode`, `usrName`, `usrGender`, `usrEmail`, `usrPhone`, `usrCollegeId`, `usrPass`) VALUES (:usrCode,:usrAccountCode,:usrName,:usrGender,:usrEmail,:usrPhone,:usrCollegeId,:usrPass)");

		$db->bind(':usrCode',$this->userCode);
		$db->bind(':usrAccountCode',$this->userAccountCode);
		$db->bind(':usrName',$this->userName);
		$db->bind(':usrGender',$this->userGender);
		$db->bind(':usrEmail',$this->userEmail);
		$db->bind(':usrPhone',$this->userPhone);
		$db->bind(':usrCollegeId',$this->userCollegeId);
		$db->bind(':usrPass',$this->userPassword);

		$db->execute();
		echo $db->getError();
		echo "done";

	}


//end class
}