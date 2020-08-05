<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        function autoTab(obj) {
            var pattern = new String("____-__-______"); // กำหนดรูปแบบในนี้
            var pattern_ex = new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้
            var returnText = new String("");
            var obj_l = obj.value.length;
            var obj_l2 = obj_l - 1;
            for (i = 0; i < pattern.length; i++) { // ความยาวที่กำหนด เพิ่มค่า
                if (obj_l2 == i && pattern.charAt(i + 1) ==
                    pattern_ex) { //ระบุในตำแหน่งที่กำหนด  charAt ใช้ดึงตัวอักษร 1 ตัวจากข้อความโดยระบุตำแหน่งที่ต้องการ
                    returnText += obj.value + pattern_ex; // นำมาต่อกัน
                    obj.value = returnText;
                }
            }
            if (obj_l >= pattern.length) { //ความยาวของที่กำหนด
                obj.value = obj.value.substr(0, pattern.length); //ตัดสตริง
            }
        }

    </script>
</head>

<style>
    #register {
        width: 500px;
        margin: auto;
        margin-top: 12px;
        background-color: whitesmoke;
    }

    #body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://www.cigna.co.th/sites/default/files/pictures/travel-nature-place-family-1.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 110%;
    }

</style>

<body id="body">

    <form action="{{url('user')}}" method="post">
    {{csrf_field()}}
        <div class="card" id="register"><br>
            <h style="text-align: center;">REGISTER</h><br>
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

            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input value="" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Name">
                </div>

                <!-- <div class="form-group">
                    <label for="exampleInputEmail1">รหัสพนักงาน</label>
                    <input value="" name="id_admin" class="form-control" id="id_admin" type="text" 
                        onkeyup="autoTab(this)" aria-describedby="emailHelp" placeholder="รหัสชาวไร่ (สำหรับเจ้าของ)">
                </div> -->

                <div class="form-group">
                    <label for="exampleInputEmail1">รหัสชาวไร่ <font color="red">( * จำเป็นต้องกรอก)</font></label>
                    <input value="" name="id_farmer" class="form-control" id="id_farmer" type="text"
                         aria-describedby="emailHelp" placeholder="รหัสชาวไร่ (สำหรับเจ้าของ)">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">เขต-กลุ่ม <font color="red">( * จำเป็นต้องกรอก)</font></label>
                    <input value="" name="group" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="เขต-กลุ่ม (สำหรับเจ้าของ)">
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input value="" name="username" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Username">

                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input value="" name="password" type="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- <div class="form-group">
                        <label for="exampleInputPassword1">Comfirm password</label>
                        <input value="" name="comfirm_password" type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Comfirm password">
                </div> -->

                <div class="form-group row">
                    <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                    <div class="col-md-6">
                        <select name="status" id="" class="form-control @error('status') is-invalid @enderror">
                            <option value="" disabled selected>เลือกสถานะ</option>
                            <option value="เจ้าของ">เจ้าของ</option>
                            <option value="ลูกจ้าง">ลูกจ้าง</option>
                            <!-- <option value="แอดมิน">แอดมิน</option> -->
                        </select>
                        @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <!-- <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                    <input type="checkbox"> I agree to the <a href="#">terms</a>
                </label>
            </div>
        </div> -->

                <input value="submit" type="submit" class="btn btn-primary form-control">


    </form>

    </div>

</body>

</html>

</body>

</html>

