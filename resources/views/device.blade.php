<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>device</title>

  <link rel="stylesheet" href="{{ URL::asset('css/device.css') }}">
  <!-- bar บน -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- icoc + -->
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>  

</head>
<body>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{url('home')}}">TOBACCO CURE</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{url('device')}}">Device</a></li>
      <li><a href="#">ช่วงของการบ่ม</a></li>
      <li><a href="#">ข้อมูลย้อนหลัง</a></li>
      <li><a href="#">กราฟข้อมูล</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3 style="text-align: center;">DEVICE</h3>
  <p>An inverted navbar is black instead of gray.</p>
</div><br>
<!-- 
<p>Used on a button:</p>
<button style='font-size:24px;'> ADD DEVICE <i class='fas fa-plus-circle'></i></button> -->

<!-- <h2>Popup Form</h2>
<p>Click on the button at the bottom of this page to open the login form.</p>
<p>Note that the button and the form is fixed - they will always be positioned to the bottom of the browser window.</p> -->

<button class="open-button" onclick="openForm()">ADD DEVICE <i class='fas fa-plus-circle' ></i></button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>ADD DEVICE</h1>

    <label for="ID DEVICE"><b>ID DEVICE</b></label>
    <input type="text" placeholder="ID DEVICE" name="ID_DEVICE" required>

    <label for="ชื่อโรงบ่ม"><b>ชื่อโรงบ่ม</b></label>
    <input type="text" placeholder="ชื่อโรงบ่ม" name="ชื่อโรงบ่ม" required>

    <label for="ที่อยู่"><b>ที่อยู่</b></label>
    <input type="password" placeholder="ที่อยู่" name="ที่อยู่" required>

    <button type="submit" class="btn">ADD DEVICE</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>