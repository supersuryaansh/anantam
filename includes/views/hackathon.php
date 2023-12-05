<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/hackathon.css" />
    <link rel="tab icon" href="/assets/images/icon/ANANTAMLOGO.svg">
    <title>ANANTAM NETRUNN - REGISTRATION</title>
  </head>
  <body>
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
