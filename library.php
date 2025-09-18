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
            <h1>Library</h1>
            <br/><br/>
            <p>
                The primary aim of IDegree College Shikaripara Library is to support research, teaching and learning of the institute
                community. The Library is one of the central support services of IDegree College Shikaripara. The mission of the
                Library is to provide information services and access to full text digital and printed resources to
                support the scholarly and informational needs of faculty, students and staff. The Library is in fast
                growing stage. It was started in December 2015 with approximately 350 books. In March 2016 Library
                subscribed online <a href="http://dl.acm.org/">ACM Digital library</a> database. During this short span
                of time, the library has acquired a good number of books and electronic resources. The library has a good
                collection of books on Computer Science, Information Technology, Physics, Mathematics, Humanities &
                Social Sciences and also technical and general print magazines. The collection includes reference books,
                text books, CDs etc. We are constantly in a process of increasing our collection of books further.
            </p>
            <p>
                Students must follow the rules and regulations mentioned in the
                <a href="pdf/library-circulation.pdf">Library
                    Circulation Policy</a>.
            </p>
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
