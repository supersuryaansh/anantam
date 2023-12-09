<?php
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
//redirect to dashboard
    //redirect to dashboard
    header("Location: ?registered=true");
    die();

}else{
echo "Something went wrong";
    echo "<script>alert('Hi');</script>";
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
        <form action="/dashboard/?action=hackathon&problemId=<?= $_GET['problemId'] ?>" method="post" enctype="multipart/form-data">

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
            <?php
            //parse the csv file
            $csvParser = new CSVParser($server_root.'/uploads/extras/problem_statements.csv', ['ID', 'Title', 'Bucket' ,'Category', 'Description' ]);
            $parsedData = $csvParser->parseCSV();
            //now dynamically set the option
            ?>
          <option  selected value="<?= $_GET['problemId'] ?>"><?= $parsedData[$_GET['problemIndex']]['Title'] ?></option>
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