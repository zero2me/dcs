<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>IDegree College Shikaripara | Society Members</title>
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
                <h2>First Society Members</h2> The Society Members are responsible for the general, superintendence and control of the affairs of the institute. It also owes the sole responsibility for academic, financial and administrative matters. The Society Members includes eminent personalities from MHRD, State Government, Academia, Industrial partners and other people involved with the institute.
                <div style="text-align: center;">
                    <h4><u>List of Members</u></h4>
                </div>
                <table class="table table-bordered table-responsive table-hover">
                    <thead>
                        <tr>
                            <th data-field="id">S. No.</th>
                            <th data-field="name">Name</th>
                            <th data-field="address">Address</th>
                            <th data-field="occupation">Occupation</th>
                            <th data-field="designation">Designation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Shri Ashok Thakur</td>
                            <td>Secretary, Department of Higher Education, MHRD, Shastri Bhavan, New Delhi</td>
                            <td>Government Service</td>
                            <td>Chairman</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Dr. Varesh Sinha</td>
                            <td>Chief Secretary, Government of Gujarat, Gandhinagar, Gujarat</td>
                            <td>Government Service</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Amita Sharma</td>
                            <td>Additional Secretary, Technical Education, Department of Higher Education., MHRD, Shastri Bhavan, New Delhi
                            </td>
                            <td>Government Service</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Shri Yogendra Tripathi</td>
                            <td>Financial Advisor, Department of Higher Education, MHRD, Shastri Bhavan, New Delhi</td>
                            <td>Government Service</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Shri A. M. Tiwari</td>
                            <td>Principal Secretary, Education Department, Government of Gujarat, Gandhinagar, Gujarat</td>
                            <td>Government Service</td>
                            <td>Member Secretary</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Shri Alok Mishra</td>
                            <td>Director (IIT) or Joint Secretary (TE), Department of Higher Education, MHRD, Shastri Bhavan, New Delhi
                            </td>
                            <td>Government Service</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Shri P. D. Porey</td>
                            <td>Director, Sardar Vallabhbhai National Institute of Technology, Surat</td>
                            <td>Government Service</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td></td>
                            <td>VC Gujarat Technical University or Director Pandit Deendayal Petroleum University</td>
                            <td></td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td></td>
                            <td>Gujarat State Fertilizers and Chemicals Limited, P.O. Fertilizer Nagar,Vadodara, Gujarat - 391750
                            </td>
                            <td></td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td></td>
                            <td>Gujarat Energy Research and Management Institute, 1<sup>st</sup> Floor, Energy Building, PDPU, Gandhinagar, Gujarat - 382007
                            </td>
                            <td></td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td></td>
                            <td>Tata Consultancy Services, Nirmal Building, 9<sup>th</sup> Floor, Nariman Point, Mumbai - 400021</td>
                            <td></td>
                            <td>Member</td>
                        </tr>
                    </tbody>
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
