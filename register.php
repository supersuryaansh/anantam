<!-- <?php
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
?> -->

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
      <form action="" method="post" enctype="multipart/form-data" id="Form">
        <h2>User Registration Form :</h2>
        <div>
          <span>
            <label for="usrName">Name:</label>
            <input
              type="text"
              id="usrName"
              name="usrName"
              required /><br /><br />
          </span>
          <span>
            <label for="usrGender">Gender:</label>
            <select id="usrGender" name="usrGender" required>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
          </span>
        </div>
        <span>
          <label for="usrEmail">Email:</label>
          <input
            type="email"
            id="usrEmail"
            name="usrEmail"
            required /><br /><br />
        </span>

        <span>
          <label for="usrPhone">Phone:</label>
          <input
            type="text"
            id="usrPhone"
            name="usrPhone"
            pattern="[0-9]{10}"
            required /><br /><br />
        </span>
        <span>
          <label for="usrCollegeId">College ID:</label>
          <input
            type="file"
            accept="image/*"
            id="usrCollegeId"
            name="usrCollegeId"
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
        <span>
          <label for="usrConfPass">Confirm Password:</label>
          <input
            type="password"
            id="usrConfPass"
            name="usrConfPass"
            required /><br /><br />
        </span>
        <span class="register--link">
          <p>already have an account?</p>
          <a href="./login.php">LOGIN NOW!!!</a>
        </span>
        <input class="submit--btn" type="submit" value="Submit" name="submit" />
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
