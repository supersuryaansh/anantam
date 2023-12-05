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
    <img
      class="bottom--line"
      src="./assets/images/webLINES/navLine.png"
      alt="" />
    <nav>
      <img class="line1" src="./assets/images/webLINES/navLine.png" alt="" />
      <a href="./index.html"
        ><img src="./assets/images/icon/ANANTAMLOGO.svg" alt=""
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
