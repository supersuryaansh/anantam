<?php
require_once($_SERVER['DOCUMENT_ROOT']."/"."requireme.php");
$session = new UserSession();
$session->createSession();
global $_SERVER;

$db = new Database();
if(!$db->isConnected()){
    die("Database Not connected");
}

//check if user is logged in and redirect
if($session->loggedIn() === true){
    //redirect to dashboard
    header("Location: dashboard.php");
    die();
}


//check if files exist and perform the registeration
if(!empty($_FILES['usrCollegeId']) && !empty($_POST['usrName']) && !empty($_POST['usrGender']) && !empty($_POST['usrEmail']) && !empty($_POST['usrPhone']) && !empty($_POST['usrPass']))
{
    $fileUploader = new FileUploader("uploads/");
    //random chars for prefix
    $fileName = "college_id_". substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20) ."_".basename($_FILES["usrCollegeId"]["name"]);
    $fileUploader->uploadFile($_FILES["usrCollegeId"],$fileName);

    $session_code = genHash(50);
    //register the user
    $user = new UserRegister($_POST['usrName'],genHash(9),$session_code,$_POST['usrGender'],$_POST['usrEmail'],$_POST['usrPhone'],$fileName,$_POST['usrPass']);

    //login the user    
    $session->setUser($session_code);
    $db->disconnect();
    //redirect to dashboard
    header("Location: dashboard.php");
    die();
    
}

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

        <label for="usrPass">Password:</label>
        <input type="password" id="usrPass" name="usrPass" required><br><br>

        <input type="submit" value="Submit" name="submit">
    </form>


    <?php

        if(isset($user->errorMessage)){
            echo $user->errorMessage;
        }

        if(isset($fileUploader->errorMessage)){
            echo $fileUploader->errorMessage;
        }

    ?>


</body>
</html>