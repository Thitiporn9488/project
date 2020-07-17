<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TOBACCO CURE</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{url('incubator')}}">โรงบ่ม</a></li>
      <li><a href="{{url('device')}}">Device</a></li>
      <li><a href="#">ช่วงของการบ่ม</a></li>
       <li><a href="#">ข้อมูลย้อนหลัง</a></li>
      <li><a href="#">กราฟข้อมูล</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3  style="text-align: center;">TOBACCO CURE</h3>
  <p>An inverted navbar is black instead of gray.</p>
</div><br>


<!-- <div class="top-left">Top Left</div> -->
<!-- css image รูปใหญ่ -->
<!-- <div class="bg-image"></div> -->


</div>
</body>
</html>