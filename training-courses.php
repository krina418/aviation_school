<!DOCTYPE html>
<html>
<head>
  <title>Aviation School | Training Courses</title>
  <meta charset="UTF-8" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
    body {
      font-family: Arial, ;
      text-align: center;
      margin: 0;
      padding: 0;
    }

    h3 {
      margin-top: 30px;
    }

    .zoom-container {
      width: 80%;
      overflow: hidden;
      margin-top: 30px;
    }

    #zoomImage {
      width: 60%;
      transition: transform 0.3s ease-in-out;
    }

    .zoom-controls {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 15px;
      margin-top: 30px;
    }

    #zoomSlider {
      width: 300px;
    }

    #zoomIn, #zoomOut {
      padding: 6px 14px;
      font-size: 18px;
      cursor: pointer;
      border: 1px solid #ccc;
      background:lightblue;
    }

    #zoomIn:hover, #zoomOut:hover {
      background: #ddd;
    }

    
    #zoomLoader {
      width: 25px;
      height: 25px;
      border: 4px solid #ccc;
      border-top: 4px solid #007bff;
      border-radius: 50%;
      animation: spin 1s linear infinite;
      cursor: pointer;
      display: none;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

  </style>
</head>

<body>

  <h3>Training Courses & Services</h3>

  <div class="zoom-container">
    <img id="zoomImage" src="images/download.jfif" alt="Training Image">
  </div>

  <div class="zoom-controls">
    <button id="zoomOut">➖</button>
    <input type="range" id="zoomSlider" min="1" max="2" step="0.1" value="1">
    <button id="zoomIn">➕</button>
    <div id="zoomLoader" title="Click to Stop Zoom"></div>
  </div>

<script>
$(document).ready(function() {

  let zoomStopped = false;

  function updateZoom(value) {
    if (!zoomStopped) {
      $('#zoomImage').css('transform', 'scale(' + value + ')');
      $('#zoomSlider').val(value);
      $('#zoomLoader').show();
    }
  }

  $('#zoomSlider').on('input', function() {
    zoomStopped = false;
    updateZoom($(this).val());
  });

  $('#zoomIn').click(function() {
    zoomStopped = false;

    let current = parseFloat($('#zoomSlider').val());
    let max = parseFloat($('#zoomSlider').attr('max'));

    if (current < max) {
      current += 0.1;
      updateZoom(current.toFixed(1));
    }
  });

  $('#zoomOut').click(function() {
    zoomStopped = false;

    let current = parseFloat($('#zoomSlider').val());
    let min = parseFloat($('#zoomSlider').attr('min'));

    if (current > min) {
      current -= 0.1;
      updateZoom(current.toFixed(1));
    }
  });

  
  $('#zoomLoader').click(function() {
    zoomStopped = true;
    $(this).hide();
  });

});
</script>

</body>
</html>6