<!DOCTYPE html>
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

      
      $currentDay = 1;
      $emptyCells = $startDay;
      echo "<tr>";
      for ($j = 0; $j < $emptyCells; $j++) {
        echo "<td></td>";
      }

      
      for ($j = $emptyCells; $j < 7; $j++) {
        echo "<td>" . sprintf("%02d", $currentDay++) . "</td>";
      }
      echo "</tr>";

      
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
  
  $(document).ready(function() {
    $(".calendar-table td").click(function() {
      var day = $(this).text(); 
      if (day) {
        var month = $(this).closest(".calendar-month").find(".calendar-header").text().split(" ")[0]; // Get the month name
        var year = 2026; // 
        var formattedDate = formatDate(day, month, year); 
        alert("You selected: " + formattedDate);
      }
    });

    function formatDate(day, month, year) {
      
      var months = {
        "January": "01", "February": "02", "March": "03", "April": "04", 
        "May": "05", "June": "06", "July": "07", "August": "08", 
        "September": "09", "October": "10", "November": "11", "December": "12"
      };

      
      return day.padStart(2, '0') + "/" + months[month] + "/" + year;
    }
  });
</script>

</body>
</html>