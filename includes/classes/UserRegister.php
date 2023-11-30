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

	public function __construct(string $userName, string $userGender, string $userEmail, int $userPhone,array $userCollegeId,array $userGovId,string $userPassword){
		//initialise user value
		$this->userName = $userName;
		$this->userGender = $userGender;
		$this->userEmail = $userEmail;
		$this->userPhone = $userPhone;
		$this->userCollegeId = $userCollegeId;
		$this->userGovId = $userGovId;
		$this->userPassword = $userPassword;

		$this->filter = false;
		
		if($this->verifyInput()){
			$this->verifyInput();
		}
	}

	//verify Input
	private function verifyInput(){
		// Check if required fields are not empty
		if(empty($this->userName) || empty($this->userGender) || empty($this->userEmail) || empty($this->userPhone) || empty($this->userCollegeId) || empty($this->userGovId) || empty($this->userPassword)){
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
	

}