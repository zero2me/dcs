<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>IDegree College Shikaripara | Finance Committee</title>
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
        <!-- Contents -->
        <div class="contents-wrapper">
            <!-- Contents starts here -->
            <div class="content">
                <h2 style="text-align:center">Finance Committee
                <br/><br/>
                </h2>
                <table class="table table-bordered table-responsive table-hover">
                    <thead>
                        <tr>
                            <th data-field="id">S. No.</th>
                            <th data-field="name">Name</th>
                            <th data-field="designation">Designation</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>1</td>
                        <td>Prof T. Harinarayan</td>
                        <td>Chairman, GERMI</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Prof R. Nagaraj</td>
                        <td>Director, DA-IICT</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Shri S. K. Bajpai</td>
                        <td>DGM Finance, GSFC</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Shri C. P. Joglekar</td>
                        <td>Registrar, IIIT-Vadodara</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Shri Anomitra Das</td>
                        <td>Representative, TCS</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Shri P. R. Dave</td>
                        <td>Jt. Director, DTE</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td></td>
                        <td>Representative of Government of India</td>
                    </tr>
                </table>
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
