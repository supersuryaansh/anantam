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
        $userEventArray = $session->userEvents();
        foreach ($events as $event) {
            $skip = false;
            $event = get_object_vars($event);
            $eventName = $event["eventName"];
            $eventImage = "/uploads/event-pictures/".$event["eventPicture"];
            $eventText = $event["eventDescription"];
            $eventId = $event["eventId"];
            $eventAction = $event["eventAction"];
            //skip if already registered
            if(in_array($eventName,$userEventArray)){
                $skip = true;
            }
            ?>
                  <div class="cards" <?php if(isset($skip) && $skip){echo "style='filter: grayscale(1);'";} ?>>
                 <?= $i ?>
                  <span>
                    <img src="../assets/images/cardhead.svg" alt="" />
                    <h1>/// <?= $eventName ?> </h1>
                  </span>
                  <span class="card--img-area">
                    <img
                      src="<?= $eventImage ?>"
                      alt="" />
                  </span>
                  <span
                    ><img src="../assets/images/webLINES/card-line.png" alt=""
                  /></span>
                  <span>
                    <p>
                      <?= $eventText ?>
                    </p>
                  </span>
                  <span class="card--btn">
                    <a href="?action=<?= $eventAction ?>">
                        <button <?php if(isset($skip) && $skip){echo "disabled";} ?> >
                            <?php
                            if(isset($skip) && $skip)
                            {
                                echo "REGISTERED";
                            } else{
                                echo "REGISTER";
                            }
                            ?>
                        </button>
                    </a>
                  </span>
                </div>
        <?php
            $i += 1;
        }
        ?>

        </div>
    </div> 