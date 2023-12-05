<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/hackathon.css" />
    <title>ANANTAM NETRUNN - REGISTRATION</title>
  </head>
  <body>
    <div class="main--menuPage">
      <button class="menu--close-btn">
        <img src="/assets/images/icon/closeBtn.svg" alt="" />
      </button>
      <div class="menuPage--content">
        <img src="/assets/images/menuPageLine/lt-corner.svg" alt="" />
        <a href="">SPONSORS</a>
        <img src="/assets/images/menuPageLine/rt-corner.svg" alt="" />
        <a href="">DEVELOPERS</a>
        <img
          class="logo--img"
          src="/assets/images/icon/BLACK LOGO.svg"
          alt="" />
        <a href="">PRIZE POOL</a>
        <img src="/assets/images/menuPageLine/lb-corner.svg" alt="" />
        <a href="">GALLERY</a>
        <img src="/assets/images/menuPageLine/rb-corner.svg" alt="" />
      </div>
    </div>
    <nav class="mobile--nav">
      <div>
        <img src="/assets/images/icon/LOGO-TYPOGRAPGY.png" alt="" />
        <span>
          <button class="main--MenuBtn">
            <img src="/assets/images/icon/menu.svg" alt="" />
          </button>
        </span>
      </div>
      <div>
        <a href="/events.php">EVENTS</a>
        <a href="/registration.php">REGISTER</a>
        <a href="">SIGN IN</a>
      </div>
    </nav>
    <nav class="desktop--nav">
      <span>
        <img src="/assets/images/icon/LOGO-TYPOGRAPGY.png" alt="" />
      </span>
      <span class="nav--links">
        <a class="menuOpenAnker" href="/events.php">EVENTS</a>
        <a href="/register.php">REGISTRATION</a>
        <button class="main--MenuBtn">
          <img src="/assets/images/icon/menu.svg" alt="" />
        </button>
      </span>
      <img class="line1" src="/assets/images/webLINES/navLine.png" alt="" />
    </nav>
    <main>
      <h1>ANANT NETRUNN REGISTRATION :</h1>
      <form action="" method="get">
        <span>
          <label for="usrProblemSt">PROBLEM STATEMENT : </label>
          <input type="text" id="usrProblemSt" name="usrProblemSt" />
        </span>
        <span>
          <label for="usrProblemStID">PROBLEM STATEMENT ID : </label>
          <input type="text" id="usrProblemStID" name="usrProblemStID" />
        </span>
        <span>
          <label for="usrProblemStSelect">SELECT PROBLEM STATEMENT : </label>
          <select name="usrProblemStSelect" id="usrProblemStSelect">
            <option value="001">
              Development of software application for analysis and processing of
              dvbs2 receiver output stream i.e., raw BB Frames, GSE and TS in
              near real time.
            </option>
            <option value="003">Quantum Secure Email Client Application</option>
            <option value="004">
              Change detection due to human activities.
            </option>
            <option value="005">Automatic Drug Dispenser</option>
            <option value="006">
              Blended Learning to overcome inadequate infrastructure
            </option>
            <option value="007">
              Awareness and Preparedness Towards Disaster Management
            </option>
            <option value="008">
              Investigation of vulnerabilities in implementation of crypto
              library used by OpenVPN for Internet Protocol Security (IPsec),
              IPV6 deployment.
            </option>
            <option value="009">
              Develop a AI/ML tool to detect whether a system / firewall /router
              / network is compromised. The technique should not rely only on
              IoCs (Indicators of Compromises) detection.
            </option>
            <option value="010">
              Developing a GUI based hardening script for Ubuntu operating
              system with flexibility to cater for organisational security
              policies
            </option>
          </select>
        </span>
        <input class="submit--btn" type="submit" value="SUBMIT" name="submit" />
      </form>
    </main>
    <script src="/js/hackthon.js"></script>
  </body>
</html>
