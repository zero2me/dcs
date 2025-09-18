<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students Corner - Degree College Shikaripara</title>
  <link rel="stylesheet" href="css/style.css"> <!-- Your main CSS file -->
  <style>
    /* Inline styling specific to Students Corner */
    .students-section {
      max-width: 900px;
      margin: 40px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    h1 {
      text-align: center;
      color: #004080;
      margin-bottom: 30px;
    }

    .students-list {
      list-style: none;
      padding: 0;
    }

    .students-list li {
      margin-bottom: 20px;
      line-height: 1.6;
      font-size: 16px;
    }

    .students-list li a {
      color: #004080;
      text-decoration: none;
    }

    .students-list li a:hover {
      text-decoration: underline;
    }

    .semester {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      margin-top: 10px;
    }

    .semester div {
      background-color: #e6f0ff;
      padding: 10px 15px;
      border-radius: 5px;
      font-weight: bold;
    }

    @media (max-width: 600px) {
      .semester {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Students Corner Content -->
  <div class="students-section">
    <h1>Students Corner</h1>

    <ul class="students-list">
      <li>
        <strong>1. Semester Details:</strong>
        <div class="semester">
          <div>Semester I (UG 2024-28)</div>
          <div>Semester II (UG 2025-29)</div>
        </div>
      </li>

      <li>
        <strong>2. Download Syllabus:</strong>
        <a href="https://skmu.ac.in/ug-programme-nep.php" target="_blank">UG Program Syllabus (NEP)</a>
      </li>

      <li>
        <strong>3. About University:</strong>
        <a href="https://skmu.ac.in/" target="_blank">Sido Kanhu Murmu University, Dumka</a>
      </li>

      <li>
        <strong>4. Apply, Admission and Examination Forms:</strong>
        <a href="https://jharkhanduniversities.nic.in/home" target="_blank">Jharkhand Universities Portal</a>
      </li>

      <li>
        <strong>5. Department of Higher and Technical Education, Government of Jharkhand:</strong>
        <a href="https://www.jharkhand.gov.in/hte/dhe" target="_blank">DHE Jharkhand</a>
      </li>

      <li>
        <strong>6. Ministry of Education, Government of India:</strong>
        <a href="https://www.education.gov.in/" target="_blank">Ministry of Education</a>
      </li>
    </ul>
  </div>

  <!-- Footer -->
  <?php include 'footer.php'; ?>

</body>
</html>
