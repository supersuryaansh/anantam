<?php
require_once($_SERVER['DOCUMENT_ROOT']."/"."requireme.php");
//require_class("registerClass");

//create database object
$db = new Database();

if(!$db->isConnected()){
    die("Database Not connected");
}

$test = new UserRegister("test", "huu", "haaa", "4542",["id"=>1],["id"=>1],"test");


echo var_dump($_FILES);
$fileUploader = new FileUploader("uploads/");
$fileUploader->uploadFile($_FILES["usrCollegeId"]);



?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
</head>
<body>
    <h2>User Registration Form</h2>
    <form action="" method="post" enctype="multipart/form-data">

        <label for="usrName">User Name:</label>
        <input type="text" id="usrName" name="usrName" required><br><br>

        <label for="usrGender">Gender:</label>
        <select id="usrGender" name="usrGender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br><br>

        <label for="usrEmail">Email:</label>
        <input type="email" id="usrEmail" name="usrEmail" required><br><br>

        <label for="usrPhone">Phone:</label>
        <input type="text" id="usrPhone" name="usrPhone" required><br><br>

        <label for="usrCollegeId">College ID:</label>
        <input type="file"  accept="image/*" id="usrCollegeId" name="usrCollegeId" required><br><br>

        <label for="usrGovId">Government ID:</label>
        <input type="file" accept="image/*" id="usrGovId" name="usrGovId" required><br><br>

        <label for="usrPass">Password:</label>
        <input type="password" id="usrPass" name="usrPass" required><br><br>

        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
