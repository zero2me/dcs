<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Degree College Shikaripara | Library</title>
    <!--Style Starts-->
    <link rel="icon" type="image/png" href="img/college_logo.jpg">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
       <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; background: #f9f9f9; }
        .content-wrapper { max-width: 900px; margin: auto; }
        h1, h2 { text-align: center; margin-bottom: 20px; }
        h2 { margin-top: 40px; }
        .card { background: #fff; padding: 20px; margin-bottom: 20px; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); }
        .card a { color: #007bff; text-decoration: none; }
        .card a:hover { text-decoration: underline; }
        ul { margin-left: 20px; }
    </style>
</head>

<body>
<!-- Start Your Body Code From here -->
<div class="wrapper">
    <!-- header starts here -->
   <?php include 'header.php'; ?>   <!-- PHP part -->
    <!-- /header -->
    <!-- Content wrapper -->
    <div class="contents-wrapper">
        <!-- Contents starts here -->
        <div class="content">
           <h1>Library & Digital Resources</h1>

    <p>Degree College Shikaripara provides access to a variety of **digital resources and public libraries** for BA and BSc students to support academic learning and research. Explore the resources below to access e-books, journals, and reference materials.</p>

    <h2>1. National Digital Library of India (NDLI)</h2>
    <div class="card">
        <p>The <strong>National Digital Library of India</strong> offers free access to millions of academic resources, textbooks, articles, and research papers across all disciplines.</p>
        <ul>
            <li>Subjects: Arts, Science, Commerce, Humanities, Social Sciences, and more.</li>
            <li>Accessible from: <a href="https://ndl.iitkgp.ac.in/" target="_blank">https://ndl.iitkgp.ac.in/</a></li>
        </ul>
    </div>

    <h2>2. Internet Archive & Open Library</h2>
    <div class="card">
        <p>Provides millions of free books, research articles, and historical texts for BA and BSc students.</p>
        <ul>
            <li>Internet Archive: <a href="https://archive.org/" target="_blank">https://archive.org/</a></li>
            <li>Open Library: <a href="https://openlibrary.org/" target="_blank">https://openlibrary.org/</a></li>
        </ul>
    </div>

    <h2>3. Project Gutenberg</h2>
    <div class="card">
        <p>Offers over 60,000 free e-books, mainly in literature, history, and philosophy — ideal for BA students.</p>
        <ul>
            <li>Access here: <a href="https://www.gutenberg.org/" target="_blank">https://www.gutenberg.org/</a></li>
        </ul>
    </div>

    <h2>4. Directory of Open Access Journals (DOAJ)</h2>
    <div class="card">
        <p>Provides access to high-quality, peer-reviewed open-access journals across all science and humanities disciplines.</p>
        <ul>
            <li>Access here: <a href="https://www.doaj.org/" target="_blank">https://www.doaj.org/</a></li>
        </ul>
    </div>

    <h2>5. Shodhganga (Indian Theses)</h2>
    <div class="card">
        <p>Repository of Indian theses and dissertations from universities across India. Useful for research and project references.</p>
        <ul>
            <li>Access here: <a href="https://shodhganga.inflibnet.ac.in/" target="_blank">https://shodhganga.inflibnet.ac.in/</a></li>
        </ul>
    </div>

    <h2>6. Google Scholar</h2>
    <div class="card">
        <p>A powerful search engine for academic literature, research articles, theses, books, and conference papers.</p>
        <ul>
            <li>Access here: <a href="https://scholar.google.com/" target="_blank">https://scholar.google.com/</a></li>
        </ul>
    </div>

    <p>These digital libraries are free to access and can greatly assist students in completing assignments, preparing for exams, and conducting research for their BA and BSc courses.</p>

        </div>
    </div>
    <!-- Footer -->
  <?php include 'footer.php'; ?>   <!-- PHP part -->
</div>
<!--Scripts Starts-->
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/434d359724.js"></script>
<script>
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
        $('[data-toggle="popover"]').on('click', function (e) {
            $('[data-toggle="popover"]').not(this).popover('hide');
        });
    });
</script>
</body>

</html>
