<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Degree College Shikaripara | Admissions</title>
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
    <div class="container data top-margin-50px bottom-margin-50px">
        <h3>Admissions</h3>
        <br/><br/>
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4">
                <a href="btech_admission.php">
                    Bachelors. Admissions
                </a>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <a href="mtech_admission.php">
                    Masters. Admissions
                </a>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <a href="phd_admission.php">
                    PhD Admissions
                </a>
            </div>
        </div>
    </div>
    <!-- Content wrapper -->
    <div class="contents-wrapper">
        <!-- Contents starts here -->
        <div class="content">

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
                    $('.popover').has(e.target).length === 0) {
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
