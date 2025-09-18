<!-- header.php -->
<header id="header">
    <div class="header-wrapper">
        <div class="header-container">
            <div class="logo-name">
                <div class="logo">
                    <a href="index.php"><img src="img/college_logo.jpg" alt="logo"></a>
                </div>
                <div class="name">
                    <a href="index.php">
                        <h5>Degree College Shikaripara</h5>
                        <h5 class="primary-color">
                            <a href="http://skmu.ac.in/" target="_blank" class="btn-get-started">
                                A Constituent Unit of S.K.M.University, Dumka, Jharkhand
                            </a>
                        </h5>
                    </a>
                </div>
            </div>
            <div class="header-links">
                <a href="#" data-toggle="popover" title="Address"
                   data-content="Shikaripara (Sarsajol, Dumka) Jharkhand - 382028"
                   data-placement="bottom"><i class="fa fa-map-marker fa-lg"></i></a>
                <a href="#" data-toggle="popover" title="Phone No." data-content="+91-79-29750281"
                   data-placement="bottom"><i class="fa fa-phone fa-lg"></i></a>
                <a href="#" data-toggle="popover" title="Email"
                   data-content="helpdesk@degreecollegeshikaripara.ac.in"
                   data-placement="bottom"><i class="fa fa-envelope fa-lg"></i></a>
                <a href="index.php">Home</a>
            </div>

            <!-- ✅ Google Translate Dropdown -->
            <div id="google_translate_element" style="margin-left:20px;"></div>
        </div>
    </div>

    <nav>
        <div class="navbar navbar-inverse navbar-custom" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="about.php">About</a></li>
                        <li><a href="principals_message.php">Principal</a></li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academics <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-level">
                                <li><a href="bachelors.php">Bachelors</a></li>
                                <li><a href="pdf/academic_calendar.pdf">Academic Calendar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admission <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-level">
                                <li><a href="bachelor_admission.php">Bachelors</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">People <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-level">
                                <li><a href="faculty.php">Faculty</a></li>
                                <li><a href="#" class="disabled" onclick="return false;">Staff</a></li>
                            </ul>
                        </li>
                        <li><a href="student_corner.php">Student's Corner</a></li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-level">
                                <li><a href="#" class="disabled" onclick="return false;">FAQs</a></li>
                                <li><a href="library.php">Library</a></li>
                                <li><a href="#" class="disabled" onclick="return false;">Invited Talks</a></li>
                                <li><a href="college-committees.php">College Committees</a></li>
                                <li><a href="iqac.php">IQAC</a></li>
                                <li><a href="https://samarth.edu.in/" target="_blank">SAMARTH Portal</a></li>
                                <li><a href="https://www.naac.gov.in/" target="_blank">NAAC</a></li>
                                <li><a href="#" class="disabled" onclick="return false;">NSS</a></li>
                            </ul>
                        </li>
                        <li><a href="career.php">Career</a></li>
                        <li><a href="gallery.php">Photo Gallery</a></li>
                        <li><!-- 🌐 Custom Language Dropdown -->
<div class="dropdown translate-dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        🌐 Language <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
        <li><a href="#" onclick="translateLanguage('hi'); return false;">हिन्दी (Hindi)</a></li>
        <li><a href="#" onclick="translateLanguage('sat'); return false;">ᱥᱟᱱᱛᱟᱲᱤ (Santali)</a></li>
        <li><a href="#" onclick="translateLanguage('bho'); return false;">भोजपुरी (Bhojpuri)</a></li>
        <li><a href="#" onclick="translateLanguage('mai'); return false;">मैथिली (Maithili)</a></li>
        <li><a href="#" onclick="translateLanguage('ur'); return false;">اردو (Urdu)</a></li>
        <li class="divider"></li>
        <li><a href="#" onclick="translateLanguage('en'); return false;">English</a></li>
    </ul>
</div>
</li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Hidden Google Translate element -->
<div id="google_translate_element" style="display:none;"></div>

<script type="text/javascript">
  const langNames = {
    "en": "English",
    "hi": "हिन्दी",
    "sat": "ᱥᱟᱱᱛᱟᱲᱤ",
    "bho": "भोजपुरी",
    "mai": "मैथिली",
    "ur": "اردو"
  };

  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'en',
      includedLanguages: 'en,hi,sat,bho,mai,ur',
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, 'google_translate_element');
  }

  // Function to trigger translation and remember choice
  function translateLanguage(lang) {
    var frame = document.querySelector('iframe.goog-te-menu-frame');
    if (!frame) {
      console.warn("Translation frame not ready yet.");
      return;
    }
    var innerDoc = frame.contentDocument || frame.contentWindow.document;
    var select = innerDoc.querySelector('select.goog-te-combo');
    if (select) {
      select.value = lang;
      select.dispatchEvent(new Event('change'));
      localStorage.setItem("selectedLang", lang); // save choice
      updateDropdownLabel(lang);
    }
  }

  // Update dropdown label
  function updateDropdownLabel(lang) {
    const label = document.getElementById("langDropdown");
    if (label) {
      label.innerHTML = "🌐 " + (langNames[lang] || "Language") + ' <b class="caret"></b>';
    }
  }

  // Auto-apply saved language on page load
  document.addEventListener("DOMContentLoaded", function () {
    var savedLang = localStorage.getItem("selectedLang") || "en";
    updateDropdownLabel(savedLang);

    if (savedLang && savedLang !== "en") {
      setTimeout(function () {
        translateLanguage(savedLang);
      }, 1500);
    }
  });
</script>

<script type="text/javascript"
  src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>

</header>

<!-- ✅ Google Translate Script -->
 
    <!-- Google Fonts (Optional) -->
    <link href="https://fonts.googleapis.com/css?family=Oxygen:400,700" rel="stylesheet">
  <!-- ✅ Google Translate CSS Fix -->
    <style>
        /* Hide Google Translate top banner */
        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }
        body {
            top: 0px !important;
        }

        /* Hide tooltip highlight */
        .goog-tooltip, .goog-tooltip:hover {
            display: none !important;
        }
        .goog-text-highlight {
            background: none !important;
            box-shadow: none !important;
        }

        /* Style dropdown */
        #google_translate_element {
            float: right;
            margin: 10px 20px 0 0;
            font-size: 14px;
        }
        .goog-te-gadget {
            font-family: inherit !important;
            font-size: 14px !important;
            color: #444 !important;
        }
        .goog-te-gadget select {
            padding: 4px 6px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 14px;
        }
        /* Hide Google Translate top bar */
.goog-te-banner-frame.skiptranslate {
    display: none !important;
} 
body {
    top: 0px !important;
}

/* Hide Google Translate tooltip */
.goog-tooltip, .goog-tooltip:hover {
    display: none !important;
}

/* Hide Google Translate frame and branding */
.goog-text-highlight {
    background: none !important;
    box-shadow: none !important;
}
    </style>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'hi,bn',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
