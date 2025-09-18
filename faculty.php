<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Degree College Shikaripara | Faculty</title>
    <!--Style Starts-->
    <link rel="icon" type="image/png" href="img/college_logo.jpg">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
 /* Faculty Section */
.faculty-section {
  max-width: 1100px;
  margin: 40px auto;
  padding: 20px;
}

/* Principal Highlight */
.faculty-head {
  text-align: center;
  background: #fff;
  padding: 30px 20px;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  margin-bottom: 40px;
}

.faculty-head img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  object-fit: cover;
  border: 4px solid #0073e6; /* Highlight Principal */
  margin-bottom: 15px;
}

.faculty-head strong {
  font-size: 20px;
  color: #222;
}

/* Faculty Grid */
.faculty-gallery {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 25px;
}

.faculty-card {
  background: #fff;
  text-align: center;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.faculty-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}

.faculty-card img {
  width: 120px;
  height: 120px;
  object-fit: cover;
  border-radius: 50%;
  margin-bottom: 15px;
  border: 3px solid #eee;
}

.faculty-card p {
  margin: 0;
  font-size: 15px;
  color: #333;
  line-height: 1.4;
}

.faculty-card strong {
  display: block;
  font-size: 17px;
  color: #111;
  margin-bottom: 5px;
}

/* Responsive */
@media (max-width: 600px) {
  .faculty-head img {
    width: 120px;
    height: 120px;
  }

  .faculty-card img {
    width: 100px;
    height: 100px;
  }
}


        </style>

</head>

<body>
    <!-- Start Your Body Code From here -->
    <div class="wrapper">
        <!-- header starts here -->
       <?php include 'header.php'; ?>  
        <!-- header -->
        <!-- Content wrapper -->
<div class="contents-wrapper">
  <div class="content faculty-section">

    <section id="faculty-gallery" class="faculty-highlight">
      <h1>Faculty Gallery</h1>
      <p>
        The faculty members of <strong>Degree College, Shikaripara</strong> are dedicated to guiding students 
        with academic excellence, mentorship, and values. Our team represents diverse disciplines, combining 
        knowledge and experience to nurture holistic development in students.
      </p>

      <!-- Principal at Top -->
      <div class="faculty-head">
        <img src="images/principal.jpg" alt="Prof. Subodh Rajak" class="responsive-img circle" />
        <p>
          <strong>Prof. Subodh Rajak</strong><br>
          Principal & Head of Arts Department
        </p>
      </div>

      <!-- Other Faculty in Grid -->
      <div class="faculty-gallery">

        <div class="faculty-card">
          <img src="images/varun.jpeg" alt="Prof. Varun" />
          <p><strong>Prof. Varun</strong><br>Assistant Professor</p>
        </div>

        <div class="faculty-card">
          <img src="images/sidhor.jpeg" alt="Prof. Sidhor" />
          <p><strong>Prof. Sidhor</strong><br>Science Faculty</p>
        </div>

        <div class="faculty-card">
          <img src="images/babita.jpeg" alt="Prof. Babita" />
          <p><strong>Prof. Babita</strong><br>Commerce Faculty</p>
        </div>

        <div class="faculty-card">
          <img src="images/gopal.jpeg" alt="Prof. Gopal" />
          <p><strong>Prof. Gopal</strong><br>Assistant Professor</p>
        </div>

        <div class="faculty-card">
          <img src="images/ashok.jpeg" alt="Prof. Ashok" />
          <p><strong>Prof. Ashok</strong><br>Assistant Professor</p>
        </div>

      </div>
    </section>
  </div>
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
