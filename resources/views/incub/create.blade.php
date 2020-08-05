<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <!-- ส่วนหัว -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- ส่วนตัว -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>

</head>
<body>
    
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{url('home')}}">TOBACCO CURE</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ตั้งค่าโรงบ่ม<span
                        class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{url('incub')}}">โรงบ่ม</a></li>
                    <li><a href="{{url('device')}}">Device</a></li>
                    <li><a href="#">Page 1-3</a></li>
                </ul>
            </li>
            <li><a href="#">ช่วงของการบ่ม</a></li>
            <li><a href="#">ข้อมูลย้อนหลัง</a></li>
            <li><a href="#">กราฟข้อมูล</a></li>
        </ul>
        <!-- <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul> -->
    </div>
</nav>

<div class="container">
  <h3>โรงบ่ม</h3>
  <p>The .navbar-right class is used to right-align navigation bar buttons.</p>
</div>

 <form action="{{url('incub')}}" method="POST">
 {{csrf_field()}}
            <!-- เกิดข้อผิดพลาด -->
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- กรอกข้อมูลแล้ว -->
            @if(\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
            @endif

                <div class="modal-body">

                    <div class="form-group">
                        <label>ID โรงบ่ม</label>
                        <input name="id_in" type="text" class="form-control" placeholder="ID โรงบ่ม">
                    </div>
                    <div class="form-group">
                        <label>ชื่อโรงบ่ม</label>
                        <input name="name" type="text" class="form-control" placeholder="ชื่อโรงบ่ม">
                    </div>
                    <div class="form-group">
                        <label>ที่อยู่</label>
                        <input name="address" type="text" class="form-control" placeholder="ที่อยู่">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                </div>
            </form>


</body>
</html>