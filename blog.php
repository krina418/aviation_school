<!DOCTYPE html>
<html>
<head>
<title>Aviation School | Blog</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="assets/style.css" />


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />


</head>
<body>
<div id="page">
  <div id="header">
    <div id="section">
      <div><a href="index.php"><img src="images/logo.gif" alt="" /></a></div>
      <span>aviationschool@flying.com <br />
      <br />
      + 7958 917 9747 2481 000</span> </div>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="admissions.php">Admissions</a></li>
      <li><a href="training-courses.php">Training Courses</a></li>
      <li class="current"><a href="blog.php">Blog</a></li>
      <li><a href="school-calendar.php">School Calendar</a></li>
      <li><a href="contact-us.php">Contact us</a></li>
    </ul>
  </div>
  <div id="content">
    <div>
      <h3>Blog</h3>
      <div class="section">
        <div id="aside">
          <p><span class="first"><strong> website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.</span></p>
          <p>You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the Forum.</p><br />
          <p>This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the Forum.</strong></p>
        </div>
        
        
        <div id="sidebar">
          <div class="slider">
            <div> 
              <h2>This is just a place holder.</h2>
              <img src="images/img1.jpg" alt="Blog Image 1" width="900" height="300"  />
              <p><strong> website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.</strong></p>
            </div>
            <div>
              <h2>This is just a place holder.</h2>
               <img src="images/images.jfif" alt="Blog Image 2" width="500" height="300"  />
              <p><strong> can remove any link to our website from this website template, you're free to use this website template without linking back to us.</strong></p>
            </div>
            <div>
              <h2>This is just a place holder.</h2>
              <img src="images/img2.jpg" alt="Blog Image 3"  width="500" height="300" />
              <p><strong> you're having problems editing this website template, then don't hesitate to ask for help on the Forum.</strong></p>
            </div>
            <div>
              <h2>This is just a place holder.</h2>
              <img src="images/best-school-bangalore.jpeg" alt="Blog Image 4" width="500" height="300"  />
              <p><strong>This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.</strong></p>
            </div>
          </div>
        </div>
      </div><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aviation School | School Calendar 2026</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    h2 {
      text-align: center;
      margin: 30px 0;
    }

    .year-calendar {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 25px;
      padding: 20px;
    }

    .calendar-month {
      border: 1px solid #ccc;
      padding: 10px;
    }

    .calendar-header {
      text-align: center;
      font-weight: bold;
      font-size: 18px;
      margin-bottom: 10px;
      background: #f4f4f4;
      padding: 5px;
    }

    .calendar-table {
      width: 100%;
      border-collapse: collapse;
    }

    .calendar-table th,
    .calendar-table td {
      border: 1px solid #aaa;
      text-align: center;
      padding: 5px;
      font-size: 12px;
      height: 35px;
    }

    .calendar-table th {
      background: #eaeaea;
    }

  
    @media (max-width: 992px) {
      .year-calendar {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 600px) {
      .year-calendar {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body>

<h2>School Calendar - 2026</h2>

<div class="year-calendar">
  
  <?php
    // Generate calendar for each month
    $months = [
        "January", "February", "March", "April", "May", "June", 
        "July", "August", "September", "October", "November", "December"
    ];

    $daysInMonth = [
        31, 29, 31, 30, 31, 30, 
        31, 31, 30, 31, 30, 31
    ];
    
    $startDays = [
        5, 1, 2, 5, 7, 3, 
        5, 1, 2, 6, 4, 7
    ];

    for ($i = 0; $i < 12; $i++) {
      $month = $months[$i];
      $days = $daysInMonth[$i];
      $startDay = $startDays[$i];

      echo "<div class='calendar-month'>";
      echo "<div class='calendar-header'>$month 2026</div>";
      echo "<table class='calendar-table'>";
      echo "<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>";

      // Add empty cells before the first day of the month
      $currentDay = 1;
      $emptyCells = $startDay;
      echo "<tr>";
      for ($j = 0; $j < $emptyCells; $j++) {
        echo "<td></td>";
      }

      // Generate the days
      for ($j = $emptyCells; $j < 7; $j++) {
        echo "<td>" . sprintf("%02d", $currentDay++) . "</td>";
      }
      echo "</tr>";

      // Generate the rest of the days in the month
      while ($currentDay <= $days) {
        echo "<tr>";
        for ($j = 0; $j < 7 && $currentDay <= $days; $j++) {
          echo "<td>" . sprintf("%02d", $currentDay++) . "</td>";
        }
        echo "</tr>";
      }

      echo "</table>";
      echo "</div>";
    }
  ?>

</div>

<script>
  // jQuery code to handle a click on a date
  $(document).ready(function() {
    $(".calendar-table td").click(function() {
      var day = $(this).text(); // Get the day clicked
      if (day) {
        var month = $(this).closest(".calendar-month").find(".calendar-header").text().split(" ")[0]; // Get the month name
        var year = 2026; // Set the year
        var formattedDate = formatDate(day, month, year); // Format the date
        alert("You selected: " + formattedDate);
      }
    });

    function formatDate(day, month, year) {
      // Convert month name to month number
      var months = {
        "January": "01", "February": "02", "March": "03", "April": "04", 
        "May": "05", "June": "06", "July": "07", "August": "08", 
        "September": "09", "October": "10", "November": "11", "December": "12"
      };

      // Format the date in dd/mm/yyyy
      return day.padStart(2, '0') + "/" + months[month] + "/" + year;
    }
  });
</script>

</body>
</html>
    </div>
  </div>

  <div id="footer">
    <div>
      <div id="connect"> <a href="#"><img src="images/icon-facebook.gif" alt="" /></a> <a href="#"><img src="images/icon-twitter.gif" alt="" /></a> <a href="#"><img src="images/icon-youtube.gif" alt="" /></a> </div>
      <div class="section">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="admissions.php">Admissions</a></li>
          <li><a href="training-courses.php">Training Courses</a></li>
          <li><a href="career.php">Career</a></li>
          <li class="last"><a href="contact-us.php">Contact us</a></li>
        </ul>
        <p>Copyright &copy; <a href="#">Domain Name</a> - All Rights Reserved | Template By <a target="_blank" href="http://www.freewebsitetemplates.com/">FreeWebsiteTemplates.com</a></p>
      </div>
    </div>
  </div>
</div>

<div align=center>This template downloaded from <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


<script type="text/javascript">
  $(document).ready(function(){
    $('.slider').slick({
      autoplay: true,
      autoplaySpeed: 1000, 
      dots: true, 
      arrows: true, 
      fade: true 
    });
  });
</script>
</body>
</html>