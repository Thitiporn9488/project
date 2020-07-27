<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โรงบ่ม</title>

      <!-- ส่วนหัว -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    
   

</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{url('home')}}">TOBACCO CURE</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{url('incubator')}}">โรงบ่ม</a></li>
          <li><a href="{{url('device')}}">Device</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">ช่วงของการบ่ม</a></li>
      <li><a href="#">ข้อมูลย้อนหลัง</a></li>
      <li><a href="#">กราฟข้อมูล</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  

 <!-- start add Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">เพิ่มข้อมูลโรงบ่ม</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- start popup -->
                <form action="{{action('IncubatorController@store')}}" method="POST">
                    {{csrf_field()}}
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                    </div>
                </form>
                <!-- end popup -->
            </div>
        </div>
    </div>
    <!-- end add model -->

        <!-- start Edit Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">เพิ่มข้อมูลโรงบ่ม</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- start popup -->
                <form action="incubator'" method="POST" id="editForm">
                 
                    {{csrf_field() }}
                    {{method_field('PUT') }}

                    <div class="modal-body">

                        <div class="form-group">
                            <label>ID โรงบ่ม</label>
                            <input name="id_in" id="id_in" type="text" class="form-control" placeholder="ID โรงบ่ม">
                        </div>
                        <div class="form-group">
                            <label>ชื่อโรงบ่ม</label>
                            <input name="name" id="name" type="text" class="form-control" placeholder="ชื่อโรงบ่ม">
                        </div>
                        <div class="form-group">
                            <label>ที่อยู่</label>
                            <input name="address" id="address" type="text" class="form-control" placeholder="ที่อยู่">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                    </div>
                </form>
                <!-- end popup -->
            </div>
        </div>
    </div>
    <!-- end edit model -->


    <div class="container">
        <h3 style="text-align: center;">โรงบ่ม</h3>
        <p>An inverted navbar is black instead of gray.</p><br>
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

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
            style="font-size:large;padding: 7px 40px;border-radius: 8px;">
            เพิ่มข้อมูล
        </button>
        <br><br>
<!-- ตาราง -->
        <table id="dataTable" class="table table-bordered" style="text-align: center;">
            <thead >
                <tr>
                    <th scope="col" style="text-align: center;">ID</th>
                    <th scope="col" style="text-align: center;">ID โรงบ่ม</th>
                    <th scope="col" style="text-align: center;">ชื่อโรงบ่ม</th>
                    <th scope="col" style="text-align: center;">ADDRESS</th>
                    <th scope="col" style="text-align: center;">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($incubs as $row)
                <tr>
                    <td>{{$row['id']}}</td>
                    <td>{{$row['id_in']}}</td>
                    <td>{{$row['name']}}</td>
                    <td>{{$row['address']}}</td>
                    <td>
                    <a class="btn btn-success edit">Edit</a>
                    <a class="btn btn-danger">DELETE</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table> 

    </div><br>

   

    <script type="text/javascript"> 
$(document).ready( function () {
    var table =$('#dataTable').DataTable();
} );
// start edit record
    table.on('click', '.edit' , function (){
        str =$(this).closet('tr');
        if ($($tr).hasClass('child')) {
            $tr = $tr.prev('.parent');
        }
        var data = table.row($tr).data();
        console.log(data);
        $('#id_in').val(data[1]);
        $('#name').val(data[2);
        $('#address').val(data[3]);
        $('#editForm').attr('action, ./incubator /'+data[0]);
        $('#editModal').Modal('show')
	
    }); 
}); 
</script>


</body>

</html>
