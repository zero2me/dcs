<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Degree College Shikaripara | Board of Governors</title>
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
            <h2>Board of Governors</h2>
            <br/>
            <table class="table table-responsive table-bordered">
                <thead>
                <tr>
                    <th>S. No.</th>
                    <th>Provision as per Section 4(a) of MoA</th>
                    <th>Name and designation of Nominee</th>
                </tr>
                </thead>
                <tr>
                    <td>1</td>
                    <td>Chairperson, <b>ex-officio;</b></td>
                    <td>Ms. Chanda Kochhar, MD & CEO, ICICI Bank Ltd</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        One nominees of the Central Government being:<br/><br/>
                        (a) Secretary/ Additional /Joint Secretary,MHRD, Government of India-ex-officio and in their
                        absence;<br/>
                        (b) Financial Advisor (FA), MHRD, Governmentof India, ex-officio member;

                    </td>
                    <td>Joint Secretary (IIITs)</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        One nominee of State Government being:<br/><br/>
                        (a) Chief Secretary, Government of Gujarat or his nominee not below the rank of Secretary to
                        Govt-ex-officio and in his absence;<br/>
                        (b) Principal Secretary, Department of Technical Education, Government of
                        Gujarat-<b>ex-officio</b><br/>
                    </td>
                    <td>To be nominated by the State Government</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        Two senior-most Deans of the Institute, <b>ex-officio;</b>
                    </td>
                    <td>The two senior most Dean of the Mentoring Institute till the appointment of permanent faculty.
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        <p>
                            Director of Indian Institute of Technology located in the zone in which the Institute is
                            located, <b>ex-officio;</b>
                        </p>
                        <p style="font-style: italic">
                            (Explanation - for the purpose of this clause, "Zone" shall have the meaning assigned to it
                            in the Explanation to section 11 of the Institutes of Technology Act, 1961.)
                        </p>
                    </td>
                    <td>Director, IIT-Gandhinagar</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Director of National Institute of Technology of the State in which the Institute is located, <b>ex-officio;</b>
                    </td>
                    <td>Director, SVNIT, Surat</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Director of the Institute, who shall be the Member-Secretary of the Board, <b>ex-officio;</b>
                    </td>
                    <td>Mentor Director, Degree College Shikariparaadodara till the appointment of regular Director</td>
                </tr>
            </table>
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
