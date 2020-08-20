<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Device</title>

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
            <ul class="nav navbar-nav navbar-right">
                <?php session_start(); 
    if(isset($_SESSION['status'])=='เจ้าของ'){
                            ?>
                <li class="dropdown">
                    <a class="dropdown" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">

                        <div class="name-scle dropdown-toggle "><?php echo $_SESSION['name'];?></div>
                    </a>

                    <div class="dropdown-menu">
                        <h5 class="name">
                            <span class="name"><?php echo $_SESSION['name'];?></span>
                        </h5>
                        <h5 class="id_farmer">
                            <span class="id_farmer"><?php echo $_SESSION['id_farmer'];?></span>
                        </h5>
                        <span class="status"><?php echo $_SESSION['status'];?></span>
                    </div>
        </div>

        </div>
        </ul>
        </div>
        </li>


        <?php }
                            // ลูกจ้าง
                            else if(isset($_SESSION['status'])=='ลูกจ้าง'){
                            ?>
        <li class="navbar navbar-inverse">
            <a class="dropdown" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">

                <div class="name-scle dropdown-toggle "><?php echo $_SESSION['name'];?></div>
            </a>

            <div class="dropdown-menu">
                <h5 class="name">
                    <span class="name"><?php echo $_SESSION['name'];?></span>
                </h5>
                <span class="id_farmer"><?php echo $_SESSION['id_farmer'];?></span>
                <span class="status"><?php echo $_SESSION['status'];?></span>
            </div>
            </div>

            </div>
            </ul>
            </div>
        </li>
        <?php } ?>
        </ul>
        </div>
    </nav>

    <div class="container">
        <h3 style="text-align: center;">Device</h3><br>

        <!-- box โชว์ผู้ใช้งาน -->
        <?php  
    if(isset($_SESSION['status'])=='เจ้าของ'){
                            ?>
        <div class="container" style="width:500px;height:100px;text-align: center;">
            <div class="panel panel-default">
                <div class="panel-heading">ชื่อผู้ใช้</div>
                <div class="panel-body"><?php echo $_SESSION['name'];?></div>
            </div>
        </div>
        <?php } ?>
        <!-- end -->
        <br>
        <!-- เพิ่มข้อมูล -->
        <h4 style="text-align: center;">เพิ่มข้อมูลDevice</h4>
        <form action="{{url('device')}}" method="POST">
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

            <div class="modal-body" >
                <div class="form-group" >
                    <label>ID DEVICE</label>
                    <input name="id_device" type="text" class="form-control" placeholder="ID DEVICE">
                </div>
                <div class="form-group">
                    <label>KEY</label>
                    <input name="key" type="text" class="form-control" placeholder="KEY">
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
            </div>
        </form>

        <br>
        <!-- ตาราง -->
        <table id="datatable" class="table table-bordered" style="text-align: center;">
            <thead>
                <tr>
                    <th scope="col" style="text-align: center;">ID DEVICE</th>
                    <th scope="col" style="text-align: center;">KEY</th>
                    <th scope="col" style="text-align: center;">EDIT</th>
                    <th scope="col" style="text-align: center;">DELETE</th>
                </tr>
            </thead>
            <tbody>
                @foreach($devices as $row)
                <tr>
                    <td>{{$row['id_device']}}</td>
                    <td>{{$row['key']}}</td>
                    <td><a href="{{action('DeviceController@edit', $row['id'])}}" class="btn btn-success">Edit</a></td>
                    <td>
                        <form method="post" class="delete_form"
                            action="{{action('DeviceController@destroy',$row['id'])}}">{{csrf_field()}}
                            <input type="hidden" name="_method" value="Delete" />
                            <button type="submit" class="btn btn-danger">Delete</botton>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div><br>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.delete_form').on('submit', function () {
                if (confirm("คุณต้องการลบข้อมูลหรือไม่ ?")) {
                    return true;
                } else {
                    return false;
                }
            });
        });

    </script>

</body>

</html>
