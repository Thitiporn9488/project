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
                <li><a href="{{url('incubator')}}">โรงบ่ม</a></li>
                <li><a href="{{url('device')}}">Device</a></li>
                <li><a href="#">ช่วงของการบ่ม</a></li>
                <li><a href="#">ข้อมูลย้อนหลัง</a></li>
                <li><a href="#">กราฟข้อมูล</a></li>
            </ul>
        </div>
    </nav>


   

</body>

</html>



 <!-- start add -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลDevice</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- start popup -->
                    <form action="{{action('DeviceController@store')}}" method="POST">
                        {{csrf_field()}}
                        <div class="modal-body">

                            <div class="form-group">
                                <label>ID DEVICE</label>
                                <input name="id_device" type="text" class="form-control" placeholder="ID DEVICE">
                            </div>
                            <div class="form-group">
                                <label>KEY</label>
                                <input name="key" type="text" class="form-control" placeholder="KEY">
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
    </div>
    <!-- end add -->


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

        <table class="table table-bordered" style="text-align: center;">
            <thead>
                <tr>
                    <th scope="col" style="text-align: center;">ID</th>
                    <th scope="col" style="text-align: center;">ID DEVICE</th>
                    <th scope="col" style="text-align: center;">KEY</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($devices as $row)
                    <th>{{$row['id']}}</th>
                    <td>{{$row['id_device']}}</td>
                    <td>{{$row['key']}}</td>
                  
                </tr>
                @endforeach
            </tbody>
        </table>

    </div><br>
