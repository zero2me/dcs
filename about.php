<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>IIIT-V | About</title>
    <!--Style Starts-->
    <link rel="icon" type="image/png" href="img/college_logo.jpg">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        /* About Section Highlight */
.about-highlight {
    background: #f4fbf6; /* light green background */
    border-left: 5px solid #2e7d32; /* dark green accent */
    padding: 2rem;
    margin: 2rem 0;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

.about-highlight h1 {
    color: #2e7d32; /* green heading */
    font-size: 1.8rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.about-highlight p {
    color: #333;
    line-height: 1.7;
    margin-bottom: 1rem;
}

.about-highlight blockquote {
    background: #e6f4ea;
    border-left: 5px solid #43a047;
    padding: 1rem 1.5rem;
    margin: 1.5rem 0;
    font-style: italic;
    color: #2e7d32;
    border-radius: 8px;
}


.about-highlight .desk-image {
    width: 100%;        /* spans the full width of the message box */
    height: auto;       /* maintains aspect ratio */
    display: block;     /* remove inline gaps */
    margin-bottom: 15px; /* spacing below image */
    border-radius: 8px; /* optional rounded corners */
    object-fit: cover;  /* crops if needed to fill width */
}


        /* Responsive behavior */
        @media (max-width: 768px) {
            .dir-msg {
                flex-direction: column;
                align-items: center;
            }

            .dir-detail {
                max-width: 100%;
            }

            .about-highlight {
                flex: 1 1 100%;
            }
        }

        /* Fade-in animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

    </style>
</head>

<body>
    <!-- Start Your Body Code From here -->
    <div class="wrapper">
        <!-- header starts here -->
       <?php include 'header.php'; ?>
        <!-- /header -->
        <!-- Content wrapper -->
      <div class="contents-wrapper">
    <div class="content about-msg">

        <section id="about-college" class="about-highlight">
            <h1>About the College</h1>
            <img src="img/college_campus.jpg" alt="College Campus" class="desk-image">

            <p>
                <strong>Degree College, Shikaripara</strong>, a Constituent Unit of <em>Sido Kanhu Murmu University, Dumka</em>, was established in 2024 
                to bring quality higher education closer to rural communities. Situated at 
                <strong>Village Sarsajol, Post Bankijor, Block Shikaripara, Dumka district</strong>, 
                the college provides undergraduate programs in <strong>Science, Social Science, Humanities, and Commerce</strong>.
            </p>

            <p>
                Nestled beside the mountains and amidst lush greenery, the campus offers a beautiful natural environment that inspires learning and growth. 
                Equipped with modern infrastructure—including classrooms, laboratories, a library, and a playground—the college provides students with 
                facilities that balance academic rigor and holistic development.
            </p>

            <blockquote>
                Guided by a team of qualified faculty members, the college nurtures not only academic excellence but also critical thinking and social responsibility. 
                Dedicated to empowering rural youth, it bridges educational gaps and opens pathways for students to pursue opportunities while staying connected to their roots.
            </blockquote>

            
        </section>

    </div>
</div>

        <!-- Footer -->
        <footer>
            <div class="footer-wrapper">
                <span class="logo"><img src="img/college_logo.jpg" alt=""></span>
                <div class="row">
                    <div class="col-sm-4 address">
                        <strong>Address : </strong>C/O Principal, Degree College Shikaripara ( Sarsajol, Dumka) Jharkhand - 382028
                    </div>
                    <div class="col-sm-4 links">
                        <div>
                            <a href="index.php#news">News</a>
                            <i class="seperator"></i>
                            <a href="index.php#announcements">Announcement</a>
                            <i class="seperator"></i>
                            <a href="index.php#events">Events</a>
                        </div>
                        <div>
                            <a href="index.php">Home</a>
                            <i class="seperator"></i>
                            <a href="rti.php">RTI</a>
                            <i class="seperator"></i>
                            <a href="pdf/MOU.pdf">MOU</a>
                        </div>
                        <div>
                            <a href="admissions.php">Admission</a>
                            <i class="seperator"></i>
                            <a href="student_corner.php">Student</a>
                            <i class="seperator"></i>
                            <a href="faculty.php">Faculty</a>
                        </div>
                    </div>
                    <div class="col-sm-4 footer-social">
                        <a href="#!"><i class="fa fa-facebook" aria-hidden="true"
                                        title="Official Facebook Page"></i></a>
                        <a href="https://degreecollegeshikaripara.ac.in/"><i class="fa fa-github" aria-hidden="true"
                                                              title="Github Group"></i></a>
                        <a href="#!"><i class="fa fa-linkedin" aria-hidden="true" title="LinkedIn Profile"></i></a>
                        <a href="#!" title=""><i class="fa fa-twitter" aria-hidden="true"
                                                 title="Official Twitter Account"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!--Scripts Starts-->
    <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/434d359724.js"></script>
    <script>
    $(document).on('click', function (e) {
    var
        $popover,
        $target = $(e.target);

    //do nothing if there was a click on popover content
    if ($target.hasClass('popover') || $target.closest('.popover').length) {
        return;
    }

    $('[data-toggle="popover"]').each(function () {
        $popover = $(this);

        if (!$popover.is(e.target) &&
            $popover.has(e.target).length === 0 &&
            $('.popover').has(e.target).length === 0)
        {
            $popover.popover('hide');
        } else {
            //fixes issue described above
            $popover.popover('toggle');
        }
    });
})

  

    </script>
</body>


</html>
