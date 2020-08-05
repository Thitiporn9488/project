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

<div class="container" >
    <h3 style="text-align: center;">โรงบ่ม</h3>
    <p>An inverted navbar is black instead of gray.</p><br>

    <div><a href="{{route('incub.create')}}" class="btn btn-primary" style="font-size:large;padding: 7px 40px;border-radius: 8px;">เพิ่มข้อมูล</a></div><br>

    <br>
    <!-- ตาราง -->
    <table id="datatable" class="table table-bordered" style="text-align: center;">
        <thead>
            <tr>
                <th scope="col" style="text-align: center;">ID โรงบ่ม</th>
                <th scope="col" style="text-align: center;">ชื่อโรงบ่ม</th>
                <th scope="col" style="text-align: center;">ADDRESS</th>
                <th scope="col" style="text-align: center;">EDIT</th>
                <th scope="col" style="text-align: center;">DELETE</th>
            </tr>
        </thead>
        <tbody>
            @foreach($incubs as $row)
            <tr>
                <td>{{$row['id_in']}}</td>
                <td>{{$row['name']}}</td>
                <td>{{$row['address']}}</td>
                <td><a href="{{action('IncubatorController@edit', $row['id'])}}" class="btn btn-success">Edit</a></td>
                <td>
                    <form method="post" class="delete_form" action="{{action('IncubatorController@destroy',$row['id'])}}">{{csrf_field()}}
                    <input type="hidden" name="_method" value="Delete" />
                    <button type="submit" class="btn btn-danger">Delete</botton>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

</div><br>



</body>
</html>