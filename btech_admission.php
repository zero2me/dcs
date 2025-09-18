<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Degree College Shikaripara | Bachelors. Admissions</title>
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
            <div class="content">
                <h2>Bachelors. Admissions</h2>
                <br/> Admissions to the four year Bachelors. Program in both the branches (IT & CSE) of the Institute is made through the examination conducted by CBSE under the name and style of JEE (Main). Official Notification of this examination is given wide publicity through national dailies during September-December every year. The examination is scheduled usually in May the following year and held at several centers spread over the entire length and breadth of the country. Based upon the merit in the written examination, Central Counseling Board of JEE (Main) invites candidates for counseling at selected centers and seats for various participating institutions are allotted, based upon individual merit.
                <br/>
                <br/> Details about cutoffs are available at <a href="http://www.csab.nic.in/">CSAB website</a>. For any queries or details related to admissions, <a href="mailto:admissions@degreecollegeshikaripara.ac.in"> e-mail us</a>.
                <br/>
                <br/>
                <h3>Bachelors. (CSE/IT) Fees Structure </h3>
                <center>
                    <img src="img/2015-2016new.jpg" style="width:100%;" />
                    <img src="img/2014-2015new.jpg" style="width:100%;" />
                    <img src="img/2013-2014new.jpg" style="width:100%;" />
                </center>
            </div>
        </div>
        <!-- Footer -->
       <?php include 'header.php'; ?>  
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
