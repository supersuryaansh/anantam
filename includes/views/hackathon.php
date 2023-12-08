<?php
if(!defined('LIFE')){
    die();
}

if (!isset($_GET['problemId'])){
?>
<style>
  body {
    font-family: sans-serif !important;
    background-color: #f4f4f4;
    margin: 0;

    padding: 0;
  }

  .problem-statements {
    max-width: 1400px;
    padding: 200px 0;
    margin: auto;
    min-height: 500px;
  }

  td > details > p {
    margin-top: 1rem;
    /* font-family: sans-serif !important; */
  }

  td > a {
    color: #111;
    background: #f2be22;
    padding: 0.6rem 2rem;
  }

  table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  th,
  td {
    padding: 15px;
    color: #f4f4f4;
    font-family: sans-serif !important;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  td button {
    padding: 10px 20px;
    background-color: transparent;
    border: 2px solid var(--main);
    color: var(--main);
    transition: 0.4s;
    cursor: pointer;
  }
  td button:hover {
    background-color: var(--main);
    color: green;
    cursor: pointer;
  }
  th {
    background-color: #f2be22;
    color: #111;
  }

  tr:hover {
    background-color: rgba(0, 0, 0, 0.1);
  }
</style>

<div class="problem-statements">
  <table>
    <thead>
      <tr>
        <th>S.No</th>
        <th>AN_ID</th>
        <th>CATEGORY</th>
        <th>PROBLEM STATEMENT</th>
        <th></th>
      </tr>
    </thead>
    <tbody>

    <?php
    //parse the csv file
    $csvParser = new CSVParser($server_root.'/uploads/extras/problem_statements.csv', ['ID', 'Title', 'Bucket' ,'Category', 'Description' ]);
    $parsedData = $csvParser->parseCSV();

        //loop over all the rows
        $i = 1;
        foreach ($parsedData as $problemArray){?>
            <tr>
                <td><?= $i ?></td>
                <td data-index="130" class="event--id"><?= $problemArray['ID'] ?></td>
                <td><?= $problemArray['Bucket'] ?></td>
                <td>
                    <details>
                        <summary>
                            <?= $problemArray['Title'] ?>
                        </summary>
                        <p>
                            <?= $problemArray['Description'] ?>
                        </p>
                    </details>
                </td>
                <td><form method="get" action=""><input type="hidden" name="action" value="hackathon"><input type="hidden" name="problemId" value="<?= $problemArray['ID'] ?>"> <button type="submit">APPLY</button></form></td>
            </tr>
        <?php $i +=1;} //end for each    ?>
    </tbody>
  </table>
</div>
<?php } //end if statement with get of ID
    else{
##########
### SECOND FILE LOADS HERE
#########
echo var_dump($session->getName());
//verify input and register
if(isset($_POST['hackathon-submit'])){
    if(!empty($_POST['usrTeamName'])  && !empty($_POST['usrProblemSt'])  && !empty($_FILES['usrPresentation']['name']) ){
        $fileUploader = new FileUploader($server_root."/uploads/presentations/");
        //random chars for prefix
        $fileName = "presentation_". substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20) ."_".basename($_FILES["usrPresentation"]["name"]);
        $fileUploader->uploadFile($_FILES["usrPresentation"],$fileName,array('pptx', 'ppt', 'docx','doc','pdf'));

        if($fileUploader->uploadOk) {
            //handle registration
            $register = new EventRegister();
            $register->hackathon($_POST['usrTeamName'],$_POST['usrProblemSt'],$_FILES['usrPresentation']['name'],$session->getName());

        }else{
            echo "Something went wrong";
        }

    }//end form value check
}//end submit form check

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
        <img class="hackathon--poster-img" src="/assets/images/POSTERS/ANANT NETRUNN POSTER.svg" alt="">
        <form action="/dashboard/?action=hackathon" method="post" enctype="multipart/form-data">

            <input type="hidden" name="action" value="hackathon" />
            <h1>ANANT NETRUNN REGISTRATION :</h1>
            <!-- Team Name -->
            <span>
        <label for="usrTeamName">TEAM NAME : </label>
        <input type="text" id="usrTeamName" name="usrTeamName" required />
      </span>
            <!-- Problem Statements -->
            <span>
        <label for="usrProblemStSelect">SELECT PROBLEM STATEMENT : </label>
        <select name="usrProblemSt" id="usrProblemStSelect" required>
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
            <!-- Presentation -->
            <span>
          <label for="usrPresentation">Presentation:</label>
          <input
                  type="file"
                  accept=".ppt, .pptx, .pdf"
                  id="usrPresentation"
                  name="usrPresentation"
                  required /><br /><br />
        </span>
            <input class="submit--btn" type="submit" value="SUBMIT" name="hackathon-submit" />
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

<?php }//end else here ?>