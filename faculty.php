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
    body {
      font-family: Arial, sans-serif;
      background: #f7f7f7;
      margin: 0;
      padding: 0;
    }

    .faculty-section {
      max-width: 900px;
      margin: 40px auto;
      padding: 20px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    h1 {
      text-align: center;
      color: #333;
    }

    .faculty-head {
      text-align: center;
      margin: 20px 0;
    }

    .faculty-head img {
      width: 130px;
      height: 130px;
      border-radius: 50%;
      object-fit: cover;
    }

    .faculty-head p {
      margin-top: 10px;
      font-size: 18px;
    }

    /* Buttons */
    .accordion, .toggle-all {
      background: #004080;
      color: #fff;
      cursor: pointer;
      padding: 12px 18px;
      width: 100%;
      text-align: left;
      border: none;
      outline: none;
      font-size: 18px;
      margin-top: 15px;
      border-radius: 5px;
      transition: background 0.3s;
    }

    .accordion:hover, .toggle-all:hover {
      background: #0059b3;
    }

    .accordion:after {
      content: '\25BC';
      float: right;
    }

    .accordion.active:after {
      content: '\25B2';
    }

    .panel {
      display: none;
      padding: 15px;
      background: #fafafa;
      border: 1px solid #ddd;
      border-top: none;
      border-radius: 0 0 5px 5px;
    }

    .faculty-gallery {
      display: flex;
      flex-direction: column;
      gap: 15px;
      margin-top: 10px;
    }

    .faculty-card {
      display: flex;
      align-items: center;
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    }

    .faculty-card img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 15px;
    }

    .faculty-card p {
      margin: 0;
      font-size: 16px;
      color: #333;
    }

    /* Sub faculty (under HOD) */
    .sub-faculty {
      margin-left: 40px;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    @media (max-width: 600px) {
      .faculty-card {
        flex-direction: column;
        text-align: center;
      }
      .faculty-card img {
        margin: 0 0 10px 0;
      }
      .sub-faculty {
        margin-left: 0;
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


<div class="faculty-section">
  <h1>Faculty Gallery</h1>

  <!-- Expand/Collapse All -->
  <button class="toggle-all">Expand All</button>

  <!-- Principal -->
  <div class="faculty-head">
    <img src="img/gallery/faculty/subodh.jpg" alt="Dr. Subodh Prasad Rajak">
    <p><strong>Dr. Subodh Prasad Rajak</strong><br>Professor In-Charge & H.O.D, Dept. of Political Science</p>
  </div>

  <!-- Arts Department -->
  <button class="accordion">Arts Faculty</button>
  <div class="panel">
    <div class="faculty-gallery">

      <div class="faculty-card">
        <img src="img/gallery/faculty/sidhor.jpg" alt="Mr. Sidhor Hansdak">
        <p><strong>Mr. Sidhor Hansdak</strong><br>H.O.D, Dept. of Santhali</p>
      </div>

      <div class="faculty-card">
        <img src="img/gallery/faculty/varun.jpg" alt="Mr. Varun Kumar">
        <p><strong>Mr. Varun Kumar</strong><br>H.O.D, Dept. of Sociology</p>
      </div>

      <div class="faculty-card">
        <img src="img/gallery/faculty/ashok.jpg" alt="Dr. Ashok Kumar Bharti">
        <p><strong>Dr. Ashok Kumar Bharti</strong><br>H.O.D, Dept. of Psychology</p>
      </div>
      <div class="sub-faculty">
        <div class="faculty-card">
          <img src="img/gallery/faculty/nazim.jpg" alt="Dr. Nazim Imam">
          <p><strong>Dr. Nazim Imam</strong><br>Dept. of Psychology</p>
        </div>
      </div>

      <div class="faculty-card">
        <img src="img/gallery/faculty/babita.jpg" alt="Mrs. Babita Kisku">
        <p><strong>Mrs. Babita Kisku</strong><br>H.O.D, Dept. of Geography</p>
      </div>

      <div class="faculty-card">
        <img src="img/gallery/faculty/bablu.jpg" alt="Mr. Bablu Murmu">
        <p><strong>Mr. Bablu Murmu</strong><br>H.O.D, Dept. of Economics</p>
      </div>

      <div class="faculty-card">
        <img src="img/gallery/faculty/ainul.jpg" alt="Dr. Ainul Bari">
        <p><strong>Dr. Ainul Bari</strong><br>H.O.D, Dept. of English</p>
      </div>

      <div class="faculty-card">
        <img src="img/gallery/faculty/gopal.jpg" alt="Dr. Gopal Kumar Sahu">
        <p><strong>Dr. Gopal Kumar Sahu</strong><br>H.O.D, Dept. of History</p>
      </div>

    </div>
  </div>

  <!-- Science Department -->
  <button class="accordion">Science Faculty</button>
  <div class="panel">
    <div class="faculty-gallery">
      <div class="faculty-card">
        <img src="img/gallery/faculty/kishore.jpg" alt="Dr. Kishor Chandra Kharkwal">
        <p><strong>Dr. Kishor Chandra Kharkwal</strong><br>H.O.D, Dept. of Physics</p>
      </div>
    </div>
  </div>

  <!-- Commerce Department -->
  <button class="accordion">Commerce Faculty</button>
  <div class="panel">
    <div class="faculty-gallery">
      <div class="faculty-card">
        <img src="img/gallery/faculty/mukesh.jpg" alt="Dr. Mukesh Kumar">
        <p><strong>Dr. Mukesh Kumar</strong><br>H.O.D, Dept. of Commerce</p>
      </div>
      <div class="sub-faculty">
        <div class="faculty-card">
          <img src="img/gallery/faculty/mrima.jpg" alt="Mrs. Rima Gladis Soren">
          <p><strong>Mrs. Rima Gladis Soren</strong><br>Dept. of Commerce</p>
        </div>
      </div>
    </div>
  </div>

</div>

<script>
  const acc = document.querySelectorAll(".accordion");
  const toggleAllBtn = document.querySelector(".toggle-all");

  acc.forEach(btn => {
    btn.addEventListener("click", function () {
      this.classList.toggle("active");
      const panel = this.nextElementSibling;
      panel.style.display = panel.style.display === "block" ? "none" : "block";
    });
  });

  toggleAllBtn.addEventListener("click", () => {
    const expand = toggleAllBtn.textContent === "Expand All";
    acc.forEach(btn => {
      const panel = btn.nextElementSibling;
      if (expand) {
        btn.classList.add("active");
        panel.style.display = "block";
      } else {
        btn.classList.remove("active");
        panel.style.display = "none";
      }
    });
    toggleAllBtn.textContent = expand ? "Collapse All" : "Expand All";
  });
</script>


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
