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
    header("Location: dashboard/");
    die();
}


//login the user
if(!empty($_POST['submit']) && !empty($_POST['usrEmail']) && !empty($_POST['usrPass']))
{


    $session_code = genHash(50);
    //register the user
    $user = new UserLogin($_POST['usrEmail'], $_POST['usrPass'] );

    //login the user
    if($user->loggedIn === true){
      $session->setUser($user->sessionCode);
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
        <!-- <div class="main--menuPage">
      <button class="menu--close-btn">
        <img src="../assets/images/icon/closeBtn.svg" alt="" />
      </button>
      <div class="menuPage--content">
        <img src="../assets/images/menuPageLine/lt-corner.svg" alt="" />
        <a href="">SPONSORS</a>
        <img src="../assets/images/menuPageLine/rt-corner.svg" alt="" />
        <a href="">DEVELOPERS</a>
        <img
          class="logo--img"
          src="../assets/images/icon/BLACK LOGO.svg"
          alt="" />
        <a href="">PRIZE POOL</a>
        <img src="../assets/images/menuPageLine/lb-corner.svg" alt="" />
        <a href="">GALLERY</a>
        <img src="../assets/images/menuPageLine/rb-corner.svg" alt="" />
      </div>
    </div> -->
    <img
      class="bottom--line"
      src="./assets/images/webLINES/navLine.png"
      alt="" />
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
      <form action="" method="post" enctype="multipart/form-data">
        <h2>LOGIN Form :</h2>
        <span>
          <label for="usrEmail">Email:</label>
          <input
            type="email"
            id="usrEmail"
            name="usrEmail"
            required /><br /><br />
        </span>
        <span>
          <label for="usrPass">Password:</label>
          <input
            type="password"
            id="usrPass"
            name="usrPass"
            required /><br /><br />
        </span>
        <span class="register--link">
        <p>do not have an account?</p><a href="register.php">REGISTER NOW!!!</a>
        </span>
        <input class="submit--btn" type="submit" value="Submit" name="submit" />
      </form>
      <?php

        if(isset($user->errorMessage)){
            echo $user->errorMessage;
        }
      ?>  
    </main>
    <script src="./js/registration.js"></script>
  </body>
</html>
