<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Degree College Shikaripara | Bachelors. CSE</title>
    <!--Style Starts-->
    <link rel="icon" type="image/png" href="img/college_logo.jpg">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

     <style>
        /* About Section Highlight */
.academics-highlight {
    background: #f4fbf6; /* light green background */
    border-left: 5px solid #2e7d32; /* dark green accent */
    padding: 2rem;
    margin: 2rem 0;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

.academics-highlight h1 {
    color: #2e7d32; /* green heading */
    font-size: 1.8rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.academics-highlight p {
    color: #333;
    line-height: 1.7;
    margin-bottom: 1rem;
}

.academics-highlight blockquote {
    background: #e6f4ea;
    border-left: 5px solid #43a047;
    padding: 1rem 1.5rem;
    margin: 1.5rem 0;
    font-style: italic;
    color: #2e7d32;
    border-radius: 8px;
}


.academics-highlight .desk-image {
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

            .academics-highlight {
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
    <div class="content academics-section">

        <section id="academics" class="academics-highlight">
            <h1 align='center'>Academics</h1>
            <!-- <img src="img/academics.jpg" alt="Academics" class="desk-image"> -->

            <p>
                <strong>Degree College, Shikaripara</strong> offers undergraduate programs under 
                <em>Sido Kanhu Murmu University (SKMU), Dumka</em>, with a diverse range of disciplines designed 
                to provide students with strong academic foundations and broad career opportunities.
            </p>

            <p>
                The college presently offers Bachelor’s programs in the following subjects:
            </p>

            <h3>Bachelor of Arts (B.A.)</h3>
            <ul>
                <li>Anthropology</li>
                <li>Economics</li>
                <li>English</li>
                <li>Geography</li>
                <li>Hindi</li>
                <li>History</li>
                <li>Political Science</li>
                <li>Psychology</li>
                <li>Santhali</li>
                <li>Sociology</li>
            </ul>

            <h3>Bachelor of Science (B.Sc.)</h3>
            <ul>
                <li>Physics</li>
                <li>Chemistry</li>
                <li>Mathematics</li>
            </ul>

            <h3>Bachelor of Commerce (B.Com.)</h3>
            <ul>
                <li>Commerce</li>
            </ul>

            <blockquote>
                Through these programs, the college strives to combine rigorous academic training with a 
                focus on critical thinking, creativity, and social responsibility. Students are encouraged 
                to pursue knowledge in their chosen fields while also developing a holistic understanding 
                of society and culture.
            </blockquote>
        </section>
    </div>
</div>


        <!-- Footer -->
      <?php include 'footer.php'; ?>  
    </div>
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
