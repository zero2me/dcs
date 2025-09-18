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


<!-- Paste this near the end of <body> -->
<style>
/* ---------- Ribbon base ---------- */
.dynamic-ribbon {
  position: fixed;
  left: 0; right: 0;
  z-index: 9999;
  display:flex;
  align-items:center;
  justify-content: space-between;
  gap: 12px;
  font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
  padding: 10px 16px;
  box-sizing: border-box;
  color: #fff;
  background: linear-gradient(90deg,#0b63d9,#0b8fd9);
  box-shadow: 0 6px 18px rgba(8,20,40,0.12);
  transform: translateY(-120%);
  transition: transform .45s cubic-bezier(.2,.9,.2,1);
}

.dynamic-ribbon.show { transform: translateY(0); }

/* left text area */
.dynamic-ribbon .r-left { display:flex; gap:12px; align-items:center; flex:1; min-width:0; }
.dynamic-ribbon .r-left .title { font-weight:600; white-space:nowrap; }
.dynamic-ribbon .r-left .subtitle { opacity:.95; font-size:0.95rem; overflow:hidden; text-overflow:ellipsis; white-space:nowrap; }

/* button/link */
.dynamic-ribbon .r-actions { display:flex; gap:8px; align-items:center; flex-shrink:0; }
.dynamic-ribbon .r-actions a.btn {
  background: rgba(255,255,255,0.12);
  color: #fff; padding: 8px 12px; border-radius:8px; text-decoration:none; font-weight:600;
  backdrop-filter: blur(4px);
}
.dynamic-ribbon .r-actions button.close {
  background: transparent; border: none; color: #fff; cursor:pointer; font-size:18px;
  padding:6px; line-height:1;
}

/* corner ribbon style (diagonal) */
.ribbon-corner {
  position: fixed;
  top: 16px;
  right: 16px;
  z-index: 9999;
  transform: rotate(45deg);
  transform-origin: center;
  background: linear-gradient(90deg,#e65100,#ff8a00);
  color: #fff;
  padding: 8px 54px;
  font-weight:700;
  box-shadow: 0 6px 18px rgba(0,0,0,0.12);
  cursor: pointer;
}

/* Responsive adjustments */
@media (max-width:720px){
  .dynamic-ribbon { padding: 10px; font-size: 14px; gap:8px; }
  .dynamic-ribbon .r-actions a.btn { padding: 7px 10px; border-radius:6px; font-size: 14px; }
}

/* countdown number */
.r-countdown { font-weight:700; margin-left:6px; font-variant-numeric: tabular-nums; }
</style>

<script>
(function(){
  /* ----------------- CONFIG -----------------
     edit these values to customize behaviour
  */
  const config = {
    type: "top",            // "top" or "corner"
    id: "inaug-ribbon-1",   // unique id for localStorage dismiss
    showForDaysAfterDismiss: 7, // days to hide after user closes
    title: "College Website Launched!",
    subtitle: "Inauguration on Sep 20, 2025 — Click to know more.",
    link: { url: "#", text: "Event Details", target: "_self" }, // set to null to hide
    countdownTo: "2025-09-20T10:00:00+05:30", // ISO string or null
    autoShow: true,         // show automatically
    animate: true,
    background: null,       // CSS background override, e.g. 'linear-gradient(90deg,#6a1b9a,#8e24aa)'
  };

  /* ----------------- Helper ----------------- */
  function daysSince(ts){ return (Date.now()-ts)/(1000*60*60*24); }
  const dismissedUntilKey = (id) => `ribbon_dismiss_${id}`;

  /* skip rendering if dismissed recently */
  const stored = localStorage.getItem(dismissedUntilKey(config.id));
  if(stored){
    try{
      const until = +stored;
      if(Date.now() < until) return;
    }catch(e){}
  }

  /* create top ribbon */
  function createTopRibbon(){
    const el = document.createElement("div");
    el.className = "dynamic-ribbon";
    el.setAttribute("role","region");
    el.setAttribute("aria-live","polite");
    el.setAttribute("aria-label","Announcement ribbon");

    if(config.background) el.style.background = config.background;

    const left = document.createElement("div"); left.className = "r-left";
    const t = document.createElement("div"); t.className = "title"; t.textContent = config.title;
    const s = document.createElement("div"); s.className = "subtitle"; s.textContent = config.subtitle;
    left.appendChild(t); left.appendChild(s);

    const actions = document.createElement("div"); actions.className = "r-actions";

    if(config.countdownTo){
      const countdownSpan = document.createElement("span");
      countdownSpan.className = "r-countdown";
      updateCountdown(countdownSpan, config.countdownTo);
      actions.appendChild(countdownSpan);
      // continuous update:
      setInterval(()=> updateCountdown(countdownSpan, config.countdownTo), 1000);
    }

    if(config.link){
      const a = document.createElement("a");
      a.className = "btn";
      a.href = config.link.url;
      a.textContent = config.link.text || "Learn more";
      if(config.link.target) a.target = config.link.target;
      actions.appendChild(a);
    }

    const closeBtn = document.createElement("button");
    closeBtn.className = "close";
    closeBtn.setAttribute("aria-label","Close announcement");
    closeBtn.innerHTML = "&times;";
    closeBtn.onclick = () => dismiss(el);
    actions.appendChild(closeBtn);

    el.appendChild(left); el.appendChild(actions);
    return el;
  }

  /* create corner ribbon */
  function createCornerRibbon(){
    const el = document.createElement("div");
    el.className = "ribbon-corner";
    el.setAttribute("role","button");
    el.setAttribute("aria-pressed","false");
    el.textContent = config.title;
    el.onclick = () => {
      if(config.link && config.link.url) window.open(config.link.url, config.link.target || "_self");
    };
    return el;
  }

  /* countdown helper: shows "D days HH:MM:SS" or "Now" if passed */
  function updateCountdown(node, iso){
    try{
      const t = new Date(iso).getTime();
      const diff = Math.max(0, t - Date.now());
      if(diff === 0){
        node.textContent = "Now";
        return;
      }
      const s = Math.floor(diff/1000);
      const days = Math.floor(s / 86400);
      const hours = Math.floor((s % 86400)/3600);
      const mins = Math.floor((s%3600)/60);
      const secs = s % 60;
      node.textContent = days > 0
        ? `${days}d ${String(hours).padStart(2,'0')}:${String(mins).padStart(2,'0')}:${String(secs).padStart(2,'0')}`
        : `${String(hours).padStart(2,'0')}:${String(mins).padStart(2,'0')}:${String(secs).padStart(2,'0')}`;
    }catch(e){
      node.textContent = "";
    }
  }

  function dismiss(el){
    const days = Math.max(1, config.showForDaysAfterDismiss||1);
    const until = Date.now() + days*24*60*60*1000;
    localStorage.setItem(dismissedUntilKey(config.id), String(until));
    el.classList.remove("show");
    setTimeout(()=> el.remove(), 500);
  }

  /* mount */
  function mount(){
    let wrapper;
    if(config.type === "corner"){
      wrapper = createCornerRibbon();
      document.body.appendChild(wrapper);
      // small entrance animation
      wrapper.style.opacity = 0;
      wrapper.style.transition = "opacity .45s ease, transform .45s ease";
      requestAnimationFrame(()=> { wrapper.style.opacity = 1; wrapper.style.transform = "rotate(45deg) scale(1)"; });
    } else {
      wrapper = createTopRibbon();
      document.body.appendChild(wrapper);
      // slight delay before showing for nicer effect
      requestAnimationFrame(()=> {
        if(config.animate) setTimeout(()=> wrapper.classList.add("show"), 80);
        else wrapper.classList.add("show");
      });
    }
  }

  /* init on DOM ready */
  if(config.autoShow){
    if(document.readyState === "loading") document.addEventListener("DOMContentLoaded", mount);
    else mount();
  }

  /* Expose a global function to control ribbon from console or other scripts */
  window.DynamicRibbon = {
    show: mount,
    dismissForDays: (d) => localStorage.setItem(dismissedUntilKey(config.id), String(Date.now() + (d||config.showForDaysAfterDismiss)*24*3600*1000))
  };

})();
</script>

</body>

</html>
