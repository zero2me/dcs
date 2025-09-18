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

.faculty-gallery {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 25px;
  margin-top: 30px;
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
  font-size: 16px;
  color: #333;
  line-height: 1.4;
}

.faculty-card strong {
  display: block;
  font-size: 18px;
  color: #222;
  margin-bottom: 5px;
}

/* Responsive tweaks */
@media (max-width: 600px) {
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
      <h1 align='center'>Faculty Gallery</h1>
      <p>
        The faculty members of <strong>Degree College, Shikaripara</strong> are dedicated to guiding students 
        with academic excellence, mentorship, and values. Our team represents diverse disciplines, combining 
        knowledge and experience to nurture holistic development in students.
      </p>

      <div class="faculty-gallery">

        <div class="faculty-card">
          <img src="img/gallery/faculty/principal.jpg" alt="Prof. Subodh Rajak" class="responsive-img circle" />
          <p><strong>Prof. Subodh Rajak</strong><br>Principal & Head of Arts Department</p>
        </div>

        <div class="faculty-card">
          <img src="img/gallery/faculty/varun.jpeg" alt="Prof. Varun" class="responsive-img circle" />
          <p><strong>Prof. Varun</strong><br>Assistant Professor</p>
        </div>

        <div class="faculty-card">
          <img src="img/gallery/faculty/sidhor.jpeg" alt="Prof. Sidhor" class="responsive-img circle" />
          <p><strong>Prof. Sidhor</strong><br>Science Faculty</p>
        </div>

        <div class="faculty-card">
          <img src="img/gallery/faculty/babita.jpeg" alt="Prof. Babita" class="responsive-img circle" />
          <p><strong>Prof. Babita</strong><br>Commerce Faculty</p>
        </div>

        <div class="faculty-card">
          <img src="img/gallery/faculty/gopal.jpeg" alt="Prof. Gopal" class="responsive-img circle" />
          <p><strong>Prof. Gopal</strong><br>Assistant Professor</p>
        </div>

        <div class="faculty-card">
          <img src="img/gallery/faculty/ashok.jpeg" alt="Prof. Ashok" class="responsive-img circle" />
          <p><strong>Prof. Ashok</strong><br>Assistant Professor</p>
        </div>

      </div>
    </section>
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
