@extends('user.master')
@section('title','Welcome Hompage')
@section('content')
<div class="containre">
    <div class="row">
        <div class="col-md-12">
            <br><br>
            <div align="right"><a href="{{route('user.create')}}" class="btn btn-success">เพิ่มข้อมูล</a></div><br>

            @if(\Session::has('success')) 
                <div class="alert alert-success"> 
                <p>{{ \Session::get('success') }}</p> 
                </div> 
                @endif

            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>รหัสชาวไร่</th>
                    <th>เขต-กลุ่ม</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($users as $row) 
                <tr>
                    <td>{{$row['id']}}</td>
                    <td>{{$row['name']}}</td>
                    <td>{{$row['id_farmer']}}</td>
                    <td>{{$row['group']}}</td>
                    <td>{{$row['username']}}</td>
                    <td>{{$row['password']}}</td>
                    <td>{{$row['status']}}</td>
                    <td><a href="{{action('UsersController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
                    <td>
                    <form method="post" class="delete_form" action="{{action('UsersController@destroy',$row['id'])}}">{{csrf_field()}}
                    <input type="hidden" name="_method" value="Delete" />
                    <button type="submit" class="btn btn-danger">Delete</botton>
                    </form>
                    </td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>

<script type="text/javascript"> 
$(document).ready(function(){ $('.delete_form').on('submit', function(){ 
	if(confirm("คุณต้องการลบข้อมูลหรือไม่ ?")) { 
	return true; 
    } 
	else { 
	return false; 
	} 
    }); 
}); 

</script>


@stop
