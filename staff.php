<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>IIIT-V | Staff</title>
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
    <?php include 'header.php'; ?>  
        <!-- /header -->
        <!-- Content wrapper -->
        <div class="contents-wrapper">
            <!-- Contents starts here -->
            <div class="content staff-members">
                <h1>Staff Members</h1>
                <br>
                <ul class="list-group">
                    <li class="list-group-item">
                        <h3>Mr. C.P. Joglekar </h3>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <img src="img/CPJ.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                <b>Registrar</b>
                                <br/> Contact : <b>registrar@degreecollegeshikaripara.ac.in</b>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Mrs. Namrata Bhouraskar</h3>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <img src="img/NAMRATA.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Secretary to Registrar cum Accountant
                                <br/> Contact : <b>namrata@degreecollegeshikaripara.ac.in</b>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Mr. N.D. Raval  </h3>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <img src="img/nigam.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Jr. Technical Superintendent
                                <br/> Contact : <b>ndraval@degreecollegeshikaripara.ac.in</b>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Mr. Jitu Sharma </h3>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <img src="img/jitu.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Jr. Technical Superintendent
                                <br/> Contact : <b>jitusharma@degreecollegeshikaripara.ac.in</b>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Mr. Jaykumar Joshi  </h3>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <img src="img/JaykumarJoshi.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Library Trainee
                                <br/> Contact : <b>jay.joshi@degreecollegeshikaripara.ac.in</b>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Ms. Darshana Rana  </h3>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <img src="img/darshana.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Administrative Assistant
                                <br/> Contact : <b>darshana@degreecollegeshikaripara.ac.in</b>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Mr. Yogesh Gameti </h3>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <img src="img/yogesh.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Messenger cum Peon
                                <br/> Contact : <b>yogesh@degreecollegeshikaripara.ac.in</b>
                            </div>
                        </div>
                    </li>
                </ul>
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
