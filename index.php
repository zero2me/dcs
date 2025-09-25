<?php
$carouselDir = "img/events";
$carouselImages = glob($carouselDir . "/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome Degree College Shikaripara</title>
    <link rel="icon" type="image/png" href="img/college_logo.jpg">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body id="home">
<!-- Start Your Body Code From here -->
<div class="wrapper">
    <!-- header starts here -->
   <?php include 'header.php'; ?>   <!-- PHP part -->
    <!-- /header -->

   <!-- carousel -->
<div class="carousel-wrapper">
    <div class="carousel" style="margin: 0 auto">
        <?php foreach($carouselImages as $img): ?>
        <div class="carousel-items">
            <img height="400px" src="<?php echo $img; ?>" alt="<?php echo htmlspecialchars(pathinfo($img, PATHINFO_FILENAME)); ?>">
            <div></div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

    <!-- Announcements, Events, News -->
    <div class="widgets-wrapper">
        <div class="widgets-container">

            <!-- Edit this section for important announcements.-->
            <div class="alert alert-warning text-center">
                Institute invites applications for <a class="alert-link" href="https://degreecollegeshikaripara.ac.in/bachelor_admission.php">Bachelors
                programs - Academic Year 2025-26</a>
            </div>

            <!-- Announcements -->
            <div class="col-sm-4" id="announcements">
                <div class='announcement-content '>
                    <div class="widgets-title"><h2>Announcements</h2></div>
                    <ul id="announcement-list">
                         <li>
                            Celebrating <b>Hindi Pakhwara</b> 1-15 september:<br>
                        </li>
                        <li>
                            For admissions to <b>Bachelors programs</b> visit:<br><a
                                href="https://degreecollegeshikaripara.ac.in/bachelor_admission.php" target="_blank"> UG-Admission-Portal.</a>
                        </li>
                        <li>
                            For queries related to <b>Bachelors programs </b>contact us at: &nbsp; &nbsp; <span
                                style="font-size: 12px; font-weight: bold;color:Black"><a
                                href="mailto:admissions@degreecollegeshikaripara.ac.in">admissions@degreecollegeshikaripara.ac.in</a></span>
                        </li>
                        <li>
                            Government of India Schemes for Students' Welfare <a
                                href="https://www.vidyalakshmi.co.in/Students/indexPopup" target="_blank">www.vidyalakshmi.co.in </a><a
                                href="https://www.scholarships.gov.in/main.do" target="_blank">
                            www.scholarships.gov.in </a>
                        </li>
                    </ul>
                    <div id="announcement-list-pagination">
                        <a id="announcement-list-previous" href="#">
                            <span><i class="fa fa-chevron-left" aria-hidden="true"></i></span>

                        </a>
                        <a id="announcement-list-next" href="#">
                            <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>

                        </a>
                    </div>
                </div>
            </div>

            <!-- Events -->
            <div class="col-sm-4" id="events">
                <div class="events-content">
                    <div class="widgets-title"><h2>Events</h2></div>
                    <ul id="events-list">
                          <li>
                            <!-- Events -->
                            <div class="event-container">
                                <!-- Date -->
                                <div class="date">
                                        <span>
                                            <!-- Day -->
                                            <div class="day">19</div>
                                            <!-- Month Short Form (first three letters) -->
                                            <div class="month">Sep</div>
                                        </span>
                                </div>
                                <!-- Event-Description -->
                                <div class="event-text">Celebration of Teachers Day & Hindi Diwas</div>
                            </div>
                        </li>
                         <li>
                            <!-- Events -->
                            <div class="event-container">
                                <!-- Date -->
                                <div class="date">
                                        <span>
                                            <!-- Day -->
                                            <div class="day">25</div>
                                            <!-- Month Short Form (first three letters) -->
                                            <div class="month">Jun</div>
                                        </span>
                                </div>
                                <!-- Event-Description -->
                                <div class="event-text">Hool diwas seminar</div>
                            </div>
                        </li>
                        <li>
                            <!-- Events -->
                            <div class="event-container">
                                <!-- Date -->
                                <div class="date">
                                        <span>
                                            <!-- Day -->
                                            <div class="day">21</div>
                                            <!-- Month Short Form (first three letters) -->
                                            <div class="month">Jun</div>
                                        </span>
                                </div>
                                <!-- Event-Description -->
                                <div class="event-text">Yoga Day 2025</div>
                            </div>
                        </li>
                        <li>
                            <div class="event-container">
                                <!-- Date -->
                                <div class="date">
                                            <span>
                                                <!-- Day -->
                                                <div class="day">12</div>
                                                <!-- Month Short Form (first three letters) -->
                                                <div class="month">Mar</div>
                                            </span>
                                </div>
                                <!-- Event-Description -->
                                <div class="event-text">Hackathon 2024</div>
                            </div>
                        </li>
                        <li>
                            <div class="event-container">
                                <!-- Date -->
                                <div class="date">
                                            <span>
                                                <!-- Day -->
                                                <div class="day">5</div>
                                                <!-- Month Short Form (first three letters) -->
                                                <div class="month">Mar</div>
                                            </span>
                                </div>
                                <!-- Event-Description -->
                                <div class="event-text">Sports Festival Ventura 2025</div>
                            </div>
                        </li>
                        <li>
                            <div class="event-container">
                                <!-- Date -->
                                <div class="date">
                                            <span>
                                                <!-- Day -->
                                                <div class="day">26</div>
                                                <!-- Month Short Form (first three letters) -->
                                                <div class="month">Jan</div>
                                            </span>
                                </div>
                                <!-- Event-Description -->
                                <div class="event-text">Republic Day</div>
                            </div>
                        </li>
                        <li>
                            <div class="event-container">
                                <!-- Date -->
                                <div class="date">
                                            <span>
                                                <!-- Day -->
                                                <div class="day">14</div>
                                                <!-- Month Short Form (first three letters) -->
                                                <div class="month">Jan</div>
                                            </span>
                                </div>
                                <!-- Event-Description -->
                                <div class="event-text">Nabhyaan: A festival of kite</div>
                            </div>
                        </li>

                    </ul>
                    <div id="events-list-pagination">
                        <a id="events-list-previous" href="#">
                            <span><i class="fa fa-chevron-left" aria-hidden="true"></i></span>

                        </a>
                        <a id="events-list-next" href="#">
                            <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-sm-4" id="news">
                <div class='news-content '>
                    <div class="widgets-title"><h2>News</h2></div>
                    <ul id="news-list">
                        <li>
                            <a href=# target="_blank">Shri Nalin Soren</a> Cordial Visit by Shri Nalin Soren, Member of Lok Shabha, Dumka.

                        </li>
                    </ul>
                    <div id="news-list-pagination">
                        <a id="news-list-previous" href="#">
                            <span><i class="fa fa-chevron-left" aria-hidden="true"></i></span>

                        </a>
                        <a id="news-list-next" href="#">
                            <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
   <?php include 'footer.php'; ?>  
</div>
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.paginate.min.js "></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/434d359724.js"></script>
<script src="js/main.js"></script>
<script>
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
        $('[data-toggle="popover"]').on('click', function (e) {
            $('[data-toggle="popover"]').not(this).popover('hide');
        });
    });
</script>


<!--
/********************************
**Contributors for this Website**
*********************************

The website has been designed and developed from scratch by Suman Kumar.
suman3961@gmail.com

-->


<!-- Ribbon Reveal Overlay -->
<!-- <style>
.ribbon-overlay {
  position: fixed;
  top: 0; left: 0; right: 0; bottom: 0;
  background: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 10000;
  flex-direction: column;
  transition: opacity 1s ease;
}

.ribbon {
  position: relative;
  width: 100%;
  max-width: 600px;
  height: 60px;
  background: linear-gradient(90deg, #d32f2f, #f44336);
  border: 3px solid #fff;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-size: 1.5rem;
  font-weight: bold;
  letter-spacing: 1px;
}

.cut-btn {
  margin-top: 30px;
  padding: 12px 20px;
  background: #000;
  color: #fff;
  border: none;
  border-radius: 8px;
  font-size: 1rem;
  cursor: pointer;
  transition: background 0.3s;
}
.cut-btn:hover {
  background: #333;
}

.ribbon.cut {
  animation: cutRibbon 1.2s forwards;
}

@keyframes cutRibbon {
  0% { transform: scaleX(1) rotate(0deg); }
  50% { transform: scaleX(0.2) rotate(5deg); }
  100% { transform: scaleX(0) rotate(-10deg); opacity: 0; }
}
</style>

<div class="ribbon-overlay" id="ribbonOverlay" style="display:none;">
  <div class="ribbon" id="ribbon">🎉 Website Inauguration 🎉</div>
  <button class="cut-btn" onclick="cutRibbon()">✂️ Cut the Ribbon</button>
</div>

<script>
(function(){
  const ribbonOverlay = document.getElementById("ribbonOverlay");

  // Only show if not already cut before
  if(!localStorage.getItem("ribbonCutDone")){
    ribbonOverlay.style.display = "flex";
  }

  window.cutRibbon = function() {
    const ribbon = document.getElementById("ribbon");
    ribbon.classList.add("cut");

    setTimeout(() => {
      ribbonOverlay.style.opacity = 0;
      setTimeout(()=> ribbonOverlay.remove(), 1000);
      // Mark as cut so it won’t show again
      localStorage.setItem("ribbonCutDone","yes");
    }, 1200);
  };
})();
</script> -->

</body>

</html>
