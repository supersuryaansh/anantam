<?php


?>

<style>
  @font-face {
    font-family: noken;
    src: url(../assets/fonts/nokenmedium.otf);
  }
  @font-face {
    font-family: medium;
    src: url(../assets/fonts/nokenItalic.otf);
  }
  @font-face {
    font-family: semiBold;
    src: url(../assets/fonts/nockenSemiBold.otf);
  }
  @font-face {
    font-family: clock;
    src: url(../assets/fonts/CLOCK.ttf);
  }
  main {
    font-family: noken;
  }
  .event--section {
    background-color: #f6f6f6 !important;
    width: 100%;
    height: 80vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding-left: 20px !important;
    margin: 0px !important;
  }
  .d--card--area {
    display: flex !important;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    background-color: transparent;
  }
  .event--top-line img, .event--top-line h1{
    display: none;
  }
  form {
    display: flex;
    flex-direction: column;
    align-items: baseline;
    justify-content: center;
    /* width: 70%; */
    padding-inline: 20px;
    gap: 20px;
  }
  input {
    padding: 14px 0px;
    border: 0px;
    border-bottom: 2px solid var(--color);
    background-color: transparent;
  }
  .submit--btn {
    border: 2px solid var(--color);
    padding: 14px 30px;
    transition: 0.4s;
  }
  .submit--btn:hover {
    background-color: #ffca2b;
  }
  select {
    width: 40%;
    padding: 14px 0px;
    border: 2px solid var(--color);
  }
  select:focus {
    outline: none;
  }
  .hackathon--poster-img{
    max-width: 500px;
  }
</style>
<div class="event--section">
  <span class="event--top-line">
    <img class="line3"
      id="line3"
      src="../assets/images/webLINES/EventLine.svg"
      alt="" />
    <h1>/// EVENTS</h1>
  </span>
  <div class="card--area d--card--area">
    <img class="hackthon--poster-img" src="/assets/images/POSTERS/ANANT NETRUNN POSTER.svg" alt="">
    <form action="" method="get">
      <h1>ANANT NETRUNN REGISTRATION :</h1>
           <span>
        <label for="usrTeamName">TEAM NAME : </label>
        <input type="text" id="usrTeamName" name="usrTeamName" required />
      </span>
      <span>
        <label for="usrProblemSt">PROBLEM STATEMENT : </label>
        <input type="text" id="usrProblemSt" name="usrProblemSt" required />
      </span>
      <span>
        <label for="usrProblemStSelect">SELECT PROBLEM STATEMENT : </label>
        <select name="usrProblemStSelect" id="usrProblemStSelect" required>
          <option selected disabled>Select your problem statement</option>
          <option value="001">
            Development of software application for analysis and processing of
            dvbs2 receiver output stream.
          </option>
          <option value="003">Quantum Secure Email Client Application</option>
          <option value="004">Change detection due to human activities.</option>
          <option value="005">Automatic Drug Dispenser</option>
          <option value="006">
            Blended Learning to overcome inadequate infrastructure
          </option>
          <option value="007">
            Awareness and Preparedness Towards Disaster Management
          </option>
          <option value="008">
            Investigation of vulnerabilities in implementation of crypto library
            used by OpenVPN for Internet Protocol Security (IPsec), IPV6
            deployment.
          </option>
          <option value="009">
            Develop a AI/ML tool to detect whether a system / firewall /router /
            network is compromised. The technique should not rely only on IoCs
            (Indicators of Compromises) detection.
          </option>
          <option value="010">
            Developing a GUI based hardening script for Ubuntu operating system
            with flexibility to cater for organisational security policies
          </option>
        </select>
      </span>
      <input class="submit--btn" type="submit" value="SUBMIT" name="submit" />
    </form>
    <?php
      if(isset($user->errorMessage)){
          echo $user->errorMessage;
      }

      if(isset($fileUploader->errorMessage)){
          echo $fileUploader->errorMessage;
      }
  ?> 
  </div>
</div>
