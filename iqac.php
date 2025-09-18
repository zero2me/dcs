<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IQAC | Degree College Shikaripara</title>
    <link rel="icon" type="image/png" href="img/college_logo.jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; background: #f9f9f9; }
        .content-wrapper { max-width: 900px; margin: auto; }
        h1 { text-align: center; margin-bottom: 30px; }
        p { font-size: 16px; }
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

    <h1>Internal Quality Assurance Cell (IQAC)</h1>

    <p>The Internal Quality Assurance Cell (IQAC) is an integral part of Degree College Shikaripara. It aims to develop a system for conscious, consistent, and catalytic improvement in the academic and administrative performance of the institution.</p>

    <p>This page will provide detailed information about the following:</p>
    <ul>
        <li>IQAC Structure and Members</li>
        <li>Policies and Procedures for Quality Enhancement</li>
        <li>Reports and Documentation</li>
        <li>Achievements and Initiatives</li>
    </ul>

    <p>Content will be updated soon. Stay tuned for detailed information about the IQAC activities and reports.</p>
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
