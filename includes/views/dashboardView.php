<?php
if(!defined('LIFE')){
  die();
}
?>

<div class="event--section">
        <span class="event--top-line">
          <img
            class="line3"
            id="line3"
            src="../assets/images/webLINES/EventLine.svg"
            alt="" />
          <h1>/// EVENTS</h1>
        </span>
        <div class="card--area">
          

        <?php
        $i = 1;
        foreach ($events as $event) {
            $event = get_object_vars($event);
            $eventName = $event["eventName"];
            $eventImage = "/uploads/event-pictures/".$event["eventPicture"];
            $eventText = $event["eventDescription"];
            $eventId = $event["eventId"];
            $card = <<<TEXT

                  <div class="cards">
                  $i
                  <span>
                    <img src="../assets/images/cardhead.svg" alt="" />
                    <h1>/// $eventName </h1>
                  </span>
                  <span class="card--img-area">
                    <img
                      src="$eventImage"
                      alt="" />
                  </span>
                  <span
                    ><img src="../assets/images/webLINES/card-line.png" alt=""
                  /></span>
                  <span>
                    <p>
                      $eventText
                    </p>
                  </span>
                  <span class="card--btn">
                    <a href="#$eventId"><button>REGISTER</button></a>
                  </span>
                </div>

            TEXT;
            echo $card;
            $i += 1;
        }
        ?>

        </div>
    </div> 