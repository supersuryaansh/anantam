<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/" . "requireme.php";
$session = new UserSession();
global $_SERVER;

$db = new Database();
if (!$db->isConnected()) {
    die("Database Not connected");
}

//check if user is logged in else redirect
if ($session->loggedIn() === false) {
    //redirect to dashboard
    header("Location: /login.php");
    die();
}

//get all available allEvents
$events = new Event();
$allEvents = $events->allEvents();
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
        <a href="../sponsors.php">SPONSORS</a>
        <img src="../assets/images/menuPageLine/rt-corner.svg" alt="" />
        <a href="../developer.php">DEVELOPERS</a>
        <img
          class="logo--img"
          src="../assets/images/icon/BLACK LOGO.svg"
          alt="" />
        <a href="../prizepool.php">PRIZE POOL</a>
        <img src="../assets/images/menuPageLine/lb-corner.svg" alt="" />
        <a href="../gallery.php">GALLERY</a>
        <img src="../assets/images/menuPageLine/rb-corner.svg" alt="" />
      </div>
    </div>
    <main>
      <nav class="mobile--nav">
        <div>
          <a href="./index.php"><img src="../assets/images/icon/LOGO-TYPOGRAPGY.png" alt="" /></a>
          <span>
            <button class="main--MenuBtn">
              <img src="../assets/images/icon/menu.svg" alt="" />
            </button>
          </span>
        </div>
        <div>
            <a class="menuOpenAnker" href="../events.php">MY EVENTS</a>
            <a href="" onclick="clearCookies()">LOG OUT</a>
            <a class="user--code">TEAM ID <?=$_SESSION["joinCode"]?></a>
        </div>
      </nav>
      <nav class="desktop--nav">
        <span>
          <a href="./index.php"><img src="../assets/images/icon/LOGO-TYPOGRAPGY.png" alt="" /></a>
        </span>
        <span class="nav--links">
          <a class="menuOpenAnker" href="../events.php">MY EVENTS</a>
          <a href="" onclick="clearCookies()">LOG OUT</a>
          <a class="user--code">TEAM ID <?=$_SESSION["joinCode"]?></a>
          <button class="main--MenuBtn">
            <img src="../assets/images/icon/menu.svg" alt="" />
          </button>
        </span>
        <img class="line1" src="../assets/images/webLINES/navLine.png" alt="" />
      </nav>
      <!-- Auto load the cards from php -->
      <?php
        if(isset($_GET['action'])){
          //use switch case to load views on demand
          $get = $_GET['action'];
            global $includes;
            $filepath = $includes."views/".$get.".php";
            if(file_exists($filepath)){
              include(include_view($get));
            }else{
              include(include_view('dashboardView'));
            }
        }else{
          //load the default view if demanded view was not found
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
          <a href="../events.php">events</a>
          <a href="../register.php">registration</a>
          <a href="../login.php">sign in</a>
          <a href="">developers</a>
          <a href="">prize pool</a>
          <a href="">sponsors</a>
        </span>
        <span class="contacts">
          <h1>CONTACTS</h1>
          <div>
              <span>
              <h2>Dr. Nimish Kumar</h2>
              <p>HOD of CSE/AI/IT/DS Dep. & Faculty Incharge of GDSC BKBIET</p>
              <a href="tel:+91-9414648683" 
                ><img
                  src="../assets/images/icon/PHONE.png"
                  alt="" />+91-9414648683</a
              >
            </span>
            <span>
              <h2>Dr. Santosh Jangid</h2>
              <p>HOD of ECE Dep. & Branch Counsellor of IEEE BKBIET SB</p>
              <a href="tel:+91-9414367879" 
                ><img
                  src="../assets/images/icon/PHONE.png"
                  alt="" />+91-9414367879</a
              >
            </span>
            <span>
              <h2>Mr. Sachin</h2>
              <p>Chairperson, IEEE BKBIET SB</p>
              <a href="tel:+91-9772541952"
                ><img
                  src="../assets/images/icon/PHONE.png"
                  alt="" />+91-9772541952</a
              >
            </span>
            <span>
              <h2>Mr. Aditya Sharma</h2>
              <p>Lead, GDSC BKBIET</p>
              <a href="tel:+91-8250639553" 
                ><img
                  src="../assets/images/icon/PHONE.png"
                  alt="" />+91-8250639553</a
              >
            </span>
               <a href="mailto:anantam@bkbiet.ac.in" class="mail" 
            ><img
              src="../assets/images/icon/gmail.png"
              alt="" />anantam@bkbiet.ac.in</a
          >
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
<!--         <a href=""><img src="../assets/images/icon/gmail.png" alt="" /></a> -->
        <a href="https://www.instagram.com/bkbiet.anantam/"><img src="../assets/images/icon/instagram.png" alt="" /></a>
<!--         <a href=""><img src="../assets/images/icon/linkedin.png" alt="" /></a> -->
<!--         <a href=""><img src="../assets/images/icon/gmail.png" alt="" /></a> -->
      </div>
    </footer>
    <script src="../js/dashScript.js"></script>
    <script>
        // Check if the "registered" parameter is set to "true" when the DOM content is loaded
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.get('registered') === 'true') {
                const popup = document.createElement('div');
                popup.textContent = 'Registered for the event';
                popup.style.backgroundColor = '#3E8667';
                popup.style.position = 'fixed';
                popup.style.top = '10px';
                popup.style.left = '50%';
                popup.style.zIndex = '9999';
                popup.style.transform = 'translateX(-50%)';
                popup.style.padding = '10px';
                popup.style.borderRadius = '5px';
                popup.style.padding = '30px 20px';
                popup.style.color = '#ffca2b';
                document.body.appendChild(popup);

                setTimeout(function() {
                    popup.style.display = 'none';
                }, 4000);
            }
        });


    </script>
  </body>
</html>


<?php $db->disconnect();
?>
