@extends('user.master')
@section('content')

<script type="text/javascript">
        function autoTab(obj) {
            /* กำหนดรูปแบบข้อความโดยให้ _ แทนค่าอะไรก็ได้ แล้วตามด้วยเครื่องหมาย
            หรือสัญลักษณ์ที่ใช้แบ่ง เช่นกำหนดเป็น  รูปแบบเลขที่บัตรประชาชน
            4-2215-54125-6-12 ก็สามารถกำหนดเป็น  _-____-_____-_-__
            รูปแบบเบอร์โทรศัพท์ 08-4521-6521 กำหนดเป็น __-____-____
            หรือกำหนดเวลาเช่น 12:45:30 กำหนดเป็น __:__:__
            ตัวอย่างข้างล่างเป็นการกำหนดรูปแบบเลขบัตรประชาชน
            */
            var pattern = new String("____-__-______"); // กำหนดรูปแบบในนี้
            var pattern_ex = new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้
            var returnText = new String("");
            var obj_l = obj.value.length;
            var obj_l2 = obj_l - 1;
            for (i = 0; i < pattern.length; i++) {
                if (obj_l2 == i && pattern.charAt(i + 1) == pattern_ex) {
                    returnText += obj.value + pattern_ex;
                    obj.value = returnText;
                }
            }
            if (obj_l >= pattern.length) {
                obj.value = obj.value.substr(0, pattern.length);
            }
        }

    </script>

<div class="row">
    <div class="col-md-12"> <br />
        <h3 align="center">แก้ไขข้อมูล</h3> <br />

        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul> @foreach($errors->all() as $error) <li>{{$error}}</li>
                @endforeach </ul>
            @endif

            <form method="post" action="{{action('UsersController@update', $id)}}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH" />
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" placeholder="Name" name="name" class="form-control" value="{{$user->name}}" />
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">รหัสชาวไร่</label>
                    <input type="text" placeholder="id_farmer" name="id_farmer" class="form-control"
                        value="{{$user->id_farmer}}"  onkeyup="autoTab(this)" /> 
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">เขต-กลุ่ม</label>
                    <input type="text" placeholder="group" name="group" class="form-control"
                        value="{{$user->group}}"  /> 
                    </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">UserName</label>
                    <input type="text" placeholder="Username" name="username" class="form-control"
                        value="{{$user->username}}" /> 
                    </div>

        
                <div class="form-group row">
                    <label for="status" class="col-md-4 col-form-label text-md-right" >{{ __('status') }}</label>
                    <div class="col-md-6" style="width:200px;">
                        <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                            <option value="" disabled selected>เลือกสถานะ</option>
                            <option value="เจ้าของ" <?php if($user['status']=="เจ้าของ"){ echo "selected" ; } ?>>เจ้าของ</option>
                            <option value="ลูกจ้าง"<?php if($user['status']=="ลูกจ้าง"){ echo "selected" ; } ?>>ลูกจ้าง</option>
                        </select>
                        @error('status')
                        <span class="invalid-feedback" role="alert" >
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

            
                <div class="form-group"> <input type="submit" class="btn btn-primary" value="Update" />
                </div>
            </form>
        </div>
    </div>
    @endsection
