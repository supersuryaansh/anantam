<?php
require_once($_SERVER['DOCUMENT_ROOT']."/"."requireme.php");
$session = new UserSession();
global $_SERVER;

$db = new Database();
if(!$db->isConnected()){
    die("Database Not connected");
}

//check if user is logged in and redirect
if($session->loggedIn() === true){
    //redirect to dashboard
    header("Location: dashboard/");
    die();
}


//check if files exist and perform the registeration
if(!empty($_FILES['usrCollegeId']) && !empty($_POST['usrName']) && !empty($_POST['usrGender']) && !empty($_POST['usrEmail']) && !empty($_POST['usrPhone']) && !empty($_POST['usrPass']))
{
    $fileUploader = new FileUploader("uploads/");
    //random chars for prefix
    $fileName = "college_id_". substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20) ."_".basename($_FILES["usrCollegeId"]["name"]);
    $fileUploader->uploadFile($_FILES["usrCollegeId"],$fileName,array('png', 'jpg', 'jpeg'));

    if($fileUploader->uploadOk) {
        $session_code = genHash(50);
        //register the user
        $user = new UserRegister($_POST['usrName'], genHash(9), $session_code, $_POST['usrGender'], $_POST['usrEmail'], $_POST['usrPhone'], $fileName, $_POST['usrPass']);

        //login the user
        $session->setUser($session_code);
        $db->disconnect();
        //redirect to dashboard
        header("Location: dashboard/");
        die();
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/registration.css" />
    <link rel="tab icon" href="./assets/images/icon/ANANTAMLOGO.svg" />
    <title>ANANTAM - REGISTRATION</title>
</head>
<body>
<div class="main--menuPage">
    <button class="menu--close-btn">
        <img src="../assets/images/icon/closeBtn.svg" alt="" />
    </button>
    <div class="menuPage--content">
        <img src="../assets/images/menuPageLine/lt-corner.svg" alt="" />
        <a href="./sponsors.php">SPONSORS</a>
        <img src="../assets/images/menuPageLine/rt-corner.svg" alt="" />
        <a href="./developer.php">DEVELOPERS</a>
        <img
            class="logo--img"
            src="../assets/images/icon/BLACK LOGO.svg"
            alt="" />
        <a href="./prizepool.php">PRIZE POOL</a>
        <img src="../assets/images/menuPageLine/lb-corner.svg" alt="" />
        <a href="./gallery.php">GALLERY</a>
        <img src="../assets/images/menuPageLine/rb-corner.svg" alt="" />
    </div>
</div>
<nav>
    <img class="line1" src="./assets/images/webLINES/navLine.png" alt="" />
    <a href="./index.php"
    ><img src="./assets/images/icon/LOGO-TYPOGRAPGY.png" alt=""
        /></a>
    <button class="nav--btn">
        <img src="./assets/images/icon/menu.svg" alt="" />
    </button>
</nav>
<main>
    <form>
        <h1>EVENT REGISTRATION FORM : </h1>
        <span>
            <input type="text" id="usrName" name="usrName" placeholder="FIRST NAME"/>
            <input type="text" id="usrName" name="usrName" placeholder="SURNAME"/>
        </span>
        <input type="number" id="usrNumber" name="usrNumber" placeholder="PHONE NUMBER(+91-)"/>
        <input type="email" id="usrMail" name="usrMail" placeholder="YOUR EMAIL ID"/>
        <div class="event--checkbox">
        <span>
            <input type="checkbox" id="hackathon" name="hackathon"/>
            <label for="hackathon">ANANT NETRUNN</label>
        </span>
        <span>
            <input type="checkbox" id="robowars" name="robowars"/>
            <label for="robowars">ROBO WARS</label>
        </span>
        <span>
            <input type="checkbox" id="codeCrunch" name="codeCrunch"/>
            <label for="codeCrunch">CODE CRUNCH</label>
        </span>
        <span>
            <input type="checkbox" id="esports" name="esports"/>
            <label for="esports">ESPORTS STREET</label>
        </span>
        <span>
            <input type="checkbox" id="bidBoundaries" name="bidBoundaries"/>
            <label for="bidBoundaries">BID BOUNDARIES</label>
        </span>
        <span>
            <input type="checkbox" id="dalalStreet" name="dalalStreet"/>
            <label for="dalalStreet">DALAL STREET</label>
        </span>
        <span>
            <input type="checkbox" id="binaryBrains" name="binaryBrains"/>
            <label for="binaryBrains">BINARY BRAINS</label>
        </span>
        <span>
            <input type="checkbox" id="mangaMania" name="mangaMania"/>
            <label for="mangaMania">MANGA MANIA</label>
        </span>
        <span>
            <input type="checkbox" id="frameflix" name="frameflix"/>
            <label for="frameflix">FRAMEFLIX</label>
        </span>
        <span>
            <input type="checkbox" id="pixelPerfect" name="pixelPerfect"/>
            <label for="pixelPerfect">PIXEL PERFECT</label>
        </span>
        <span>
            <input type="checkbox" id="blindDate" name="blindDate"/>
            <label for="blindDate">BLIND DATE</label>
        </span>
        </div>
        <button type="submit" name="submit" id="submit">SUBMIT</button>
    </form>
    <?php

    if(isset($user->errorMessage)){ echo $user->errorMessage; }
    if(isset($fileUploader->errorMessage)){ echo $fileUploader->errorMessage;
    } ?>
    <img
        class="bottom--line"
        src="./assets/images/webLINES/navLine.png"
        alt="" />
</main>
<script src="./js/registration.js"></script>
</body>
</html>
