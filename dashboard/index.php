<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/" . "requireme.php";
$session = new UserSession();
$session->createSession();
global $_SERVER;

$db = new Database();
if (!$db->isConnected()) {
    die("Database Not connected");
}

//check if user is logged in else redirect
if ($session->loggedIn() === false) {
    //redirect to dashboard
    header("Location: login.php");
    die();
}

$db->query("SELECT * FROM events");
$db->execute();
$events = $db->resultset();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="tab icon" href="../assets/images/icon/ANANTAMLOGO.svg" />
    <link rel="stylesheet" href="../css/dashIndex.css">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/responsive.css" />
    <title>ANANTAM</title>
  </head>
  <body>
    <div class="main--menuPage">
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
    </div>
    <main>
      <nav class="mobile--nav">
        <div>
          <a href="./index.html"><img src="../assets/images/icon/LOGO-TYPOGRAPGY.png" alt="" /></a>
          <span>
            <button class="main--MenuBtn">
              <img src="../assets/images/icon/menu.svg" alt="" />
            </button>
          </span>
        </div>
        <div>
          <a href="../events.html">MY EVENTS</a>
          <a href="">SIGN IN</a>
          <a class="user--code">000000000</a>
        </div>
      </nav>
      <nav class="desktop--nav">
        <span>
          <a href="./index.html"><img src="../assets/images/icon/LOGO-TYPOGRAPGY.png" alt="" /></a>
        </span>
        <span class="nav--links">
          <a class="menuOpenAnker" href="../events.html">MY EVENTS</a>
          <a href="">LOG OUT</a>
          <a class="user--code">000000000</a>
          <button class="main--MenuBtn">
            <img src="../assets/images/icon/menu.svg" alt="" />
          </button>
        </span>
        <img class="line1" src="../assets/images/webLINES/navLine.png" alt="" />
      </nav>
    <?php
      if(isset($_GET['action'])){
        include_view('TableView');
      }else{
        include(include_view('dashboardView'));
      }
    ?>
    <footer>
      <!-- <img
        class="footer--top-line"
        src="./assets/images/webLINES/event-low-line.svg"
        alt="" /> -->
      <div class="maker--logo">
        <span>
          <img src="../assets/images/icon/IEEE.png" alt="" />
          <img class="gdsc--logo" src="../assets/images/icon/GDSC.svg" alt="" />
          <img src="../assets/images/icon/BKBIET.png" alt="" />
        </span>
      </div>
      <div class="footer--content">
        <span class="links">
          <h1>LINKS</h1>
          <a href="">events</a>
          <a href="">registration</a>
          <a href="">sign in</a>
          <a href="">developers</a>
          <a href="">prize pool</a>
          <a href="">sponsors</a>
        </span>
        <span class="contacts">
          <h1>CONTACTS</h1>
          <a href="mailto:anantam@bkbiet.ac.in" class="mail" target="_blank"
            ><img
              src="../assets/images/icon/gmail.png"
              alt="" />anantam@bkbiet.ac.in</a
          >
          <div>
            <span>
              <h2>Dr. Santosh Jangir</h2>
              <p>HOD of ECE Dep. & Branch Counsellor of IEEE BKBIET SB</p>
              <a href="" target="_blank"
                ><img
                  src="../assets/images/icon/Phone.png"
                  alt="" />+91-9414367879</a
              >
            </span>
            <span>
              <h2>Dr. Nimish</h2>
              <p>HOD of CSE/AI/IT/DS Dep. & Faculty Incharge of GDSC BKBIET</p>
              <a href="" target="_blank"
                ><img
                  src="../assets/images/icon/Phone.png"
                  alt="" />+91-9414648683</a
              >
            </span>
            <span>
              <h2>Mr. Sachin</h2>
              <p>Chairperson, IEEE BKBIET SB</p>
              <a href="" target="_blank"
                ><img
                  src="../assets/images/icon/Phone.png"
                  alt="" />+91-9772541952</a
              >
            </span>
            <span>
              <h2>Mr. Aditya Sharma</h2>
              <p>Lead, GDSC BKBIET</p>
              <a href="" target="_blank"
                ><img
                  src="../assets/images/icon/Phone.png"
                  alt="" />+91-8250639553</a
              >
            </span>
          </div>
        </span>
        <span class="address">
          <h1>ADDRESS</h1>
          <a target="_blank" href=""
            >B K Birla Institute of Engineering and Technology, Ceeri Road,
            Jhunjhunu, Pilani, Rajasthan 333031</a
          >
          <a href="" target="_blank" class="mail">https://bkbiet.ac.in/</a>
        </span>
      </div>
      <div class="social--links">
        <a href=""><img src="../assets/images/icon/gmail.png" alt="" /></a>
        <a href=""><img src="../assets/images/icon/instagram.png" alt="" /></a>
        <a href=""><img src="../assets/images/icon/linkedin.png" alt="" /></a>
        <a href=""><img src="../assets/images/icon/gmail.png" alt="" /></a>
      </div>
    </footer>
    <script src="../js/dashScript.js"></script>
  </body>
</html>

<?php $db->disconnect();
?>