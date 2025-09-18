<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Degree College Shikaripara | Careers</title>
    <!--Style Starts-->
    <link rel="icon" type="image/png" href="img/college_logo.jpg">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
     <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; background: #f9f9f9; }
        h1, h2 { text-align: center; margin-bottom: 20px; }
        h2 { margin-top: 40px; }
        .content-wrapper { max-width: 900px; margin: auto; }
        .card { background: #fff; padding: 20px; margin-bottom: 20px; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); }
        .card a { color: #007bff; text-decoration: none; }
        .card a:hover { text-decoration: underline; }
        ul { margin-left: 20px; }
        table { width: 100%; margin-top: 10px; }
    </style>
</head>

<body>
    <!-- Start Your Body Code From here -->
    <div class="wrapper">
        <!-- header starts here -->
     <?php include 'header.php'; ?>  
        <!-- /header -->
        <!-- Content wrapper -->
     <div class="content-wrapper">

    <h1>Career Opportunities & Government Schemes</h1>

    <p>At Degree College Shikaripara, we guide BA and BSc students toward successful career paths, leveraging government schemes, online portals, and internship opportunities aligned with the <strong>New Education Policy (NEP 2020)</strong>. Explore the following resources to enhance your career prospects.</p>

    <!-- SWAYAM -->
    <h2>1. SWAYAM Portal</h2>
    <div class="card">
        <p><strong>SWAYAM</strong> (Study Webs of Active Learning for Young Aspiring Minds) is an initiative by the Government of India to provide free online courses from top universities for all students.</p>
        <ul>
            <li>Courses are available for <strong>BA, BSc, and other undergraduate programs</strong>.</li>
            <li>Subjects include Mathematics, Physics, English, Economics, History, and more.</li>
            <li>Certificates upon successful completion enhance employability.</li>
            <li>Website: <a href="https://swayam.gov.in/" target="_blank">https://swayam.gov.in/</a></li>
        </ul>
    </div>

    <!-- Internships under NEP -->
    <h2>2. Internship Opportunities under NEP 2020</h2>
    <div class="card">
        <p>The New Education Policy encourages students to gain hands-on experience through internships during undergraduate studies.</p>
        <ul>
            <li><strong>BA Students:</strong> Cultural organizations, libraries, teaching assistantships, journalism, research projects.</li>
            <li><strong>BSc Students:</strong> Labs, research projects, environmental agencies, data analysis, IT internships, scientific fieldwork.</li>
            <li>Internships can earn credits as per NEP guidelines.</li>
        </ul>
    </div>

    <!-- Government Career Schemes -->
    <h2>3. Government Career Schemes</h2>
    <div class="card">
        <ul>
            <li><strong>National Career Service (NCS):</strong> Job listings, skill development, career counseling. <a href="https://www.ncs.gov.in/" target="_blank">Visit NCS Portal</a></li>
            <li><strong>Rural Development Internships:</strong> Offered by the Ministry of Rural Development for social work, economics, and rural studies.</li>
            <li><strong>Student Entrepreneurship & Innovation:</strong> Programs under <em>Startup India</em> and <em>Atal Innovation Mission</em>. <a href="https://aim.gov.in/" target="_blank">Atal Innovation Mission</a></li>
            <li><strong>Skill India:</strong> Vocational courses and certifications for employability. <a href="https://www.skillindia.gov.in/" target="_blank">Skill India Portal</a></li>
        </ul>
    </div>

    <!-- Career Guidance -->
    <h2>4. Career Guidance & Counseling</h2>
    <div class="card">
        <ul>
            <li>Workshops and webinars with government agencies and industry experts.</li>
            <li>Personalized career counseling for BA/BSc specialization paths.</li>
            <li>Guidance on scholarships, fellowships, and competitive exams.</li>
        </ul>
    </div>

    <!-- Dynamic Internship Table -->
    <h2>5. Latest Internship Opportunities</h2>
    <div class="card">
        <?php
        $internshipFile = 'internships.json';
        if(file_exists($internshipFile)) {
            $internships = json_decode(file_get_contents($internshipFile), true);
            if(!empty($internships)) {
                echo '<table class="table table-striped">';
                echo '<thead><tr><th>Title</th><th>Organization</th><th>Course</th><th>Duration</th><th>Apply</th></tr></thead><tbody>';
                foreach($internships as $intern) {
                    echo '<tr>';
                    echo '<td>'.htmlspecialchars($intern['title']).'</td>';
                    echo '<td>'.htmlspecialchars($intern['organization']).'</td>';
                    echo '<td>'.htmlspecialchars($intern['course']).'</td>';
                    echo '<td>'.htmlspecialchars($intern['duration']).'</td>';
                    echo '<td><a href="'.htmlspecialchars($intern['link']).'" target="_blank">Apply Now</a></td>';
                    echo '</tr>';
                }
                echo '</tbody></table>';
            } else {
                echo '<p>No internships available currently.</p>';
            }
        } else {
            echo '<p>Internship data file not found.</p>';
        }
        ?>
    </div>

</div>
        <!-- Footer -->
     <?php include 'footer.php'; ?>  
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
