<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>IDegree College Shikaripara | Academic Council</title>
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
                <h2>Academic Council</h2> It is the principal academic body of the institue. It is responsible for maintenance of standards of instruction, education, research and examination within the institue.
                <div style="text-align: center;">
                    <h4>
                    <br/>
                    <u>Members of Academic Council</u>
                </h4>
                </div>
                <table class="table table-bordered table-responsive table-hover">
                    <thead>
                        <tr>
                            <th data-field="id">S. No.</th>
                            <th data-field="name">Name</th>
                            <th data-field="role">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                Prof R. Nagaraj,
                                <br/>Director DA-IICT
                            </td>
                            <td>Chairman</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                Prof G Sivakumar,
                                <br/>CSE, IIT-Bombay
                            </td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                Prof C Pandu Rangan,
                                <br/>CSE, IIT-Madras
                            </td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                Prof Surendra Prasad,
                                <br/>IIT-Delhi
                            </td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                Prof Suman Mitra
                                <br/>DA-IICT
                            </td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                Prof Anish Mathuria,
                                <br/>DA-IICT
                            </td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>
                                Dr. K. Kesavasmy,
                                <br/>Representative, Tata Consultancy Services
                            </td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>
                                Shri Pratul Shroff,
                                <br/>CEO, E-Infochips
                            </td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>
                                Shri C. P. Joglekar
                                <br/>Registrar, IIIT-Vadodara
                            </td>
                            <td>Secretary</td>
                        </tr>
                    </tbody>
                </table>
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
