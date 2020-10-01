<?php
  $datadb = "testpj";
  $servername = "localhost";
  $username = "root";
  $password = "";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $datadb);
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="styles.css">
    <!-- ส่วนหัว -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- ตาราง -->
      <!-- Latest compiled and minified CSS  ไอค่อน-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme ทำหนา-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
    <!-- data atble -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
        <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
            </script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>

<body>
    <nav class="navbar navbar-inverse " >
        <div class="container-fluid" style="margin-right:100px;margin-left:80px">
            <div class="navbar-header">
                <a class="navbar-brand" href="home" >TOBACCO CURE</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ตั้งค่าโรงบ่ม<span
                            class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="index_in">โรงบ่ม</a></li>
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

                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="about-us" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['name_user'];?>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="about-us">
                        <h5 class="name">
                            <span class="name">Name : <?php echo $_SESSION['name_user'];?></span>
                        </h5>
                        <h5 class="id_farmer">
                            <span class="id_farmer">ID_farmer : <?php echo $_SESSION['id_farmer'];?></span>
                        </h5>
                        <span class="status">Status : <?php echo $_SESSION['status'];?></span><br>
                        <a href="logout">logout</a><br>
                        <a href="regis_em">register employee</a>
                    </ul>
                </div>


                <?php }
                            // ลูกจ้าง
                            else if(isset($_SESSION['status'])=='ลูกจ้าง'){
                            ?>
                <li class="navbar navbar-inverse">
                    <a class="dropdown" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">

                        <div class="name-scle dropdown-toggle "><?php echo $_SESSION['name_user'];?></div>
                    </a>

                    <div class="dropdown-menu">
                        <h5 class="name">
                            <span class="name"><?php echo $_SESSION['name_user'];?></span>
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
    </nav><br>
    
    <h3 style="text-align: center;">โรงบ่ม</h3><br>
    <?php 
    if(isset($_SESSION['status'])=='เจ้าของ'){
                            ?>

        <div class="container" style="width:500px;height:100px;text-align: center;">
            <div class="panel panel-default">
                <div class="panel-heading">ชื่อผู้ใช้</div>
                <div class="panel-body"><?php echo $_SESSION['name_user'];?></div>
            </div>
        </div>
        <?php } ?>
        <!-- end -->
        <br>

    <div class="container">
    
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><span
                class='glyphicon glyphicon-plus' aria-hidden='true'></span>
            เพิ่มข้อมูล
        </button> <br> <br>

        <table id="example" class="table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr class="bg-danger">
                    <th scope="col" style="text-align: center;">NUM</th>
                    <th scope="col" style="text-align: center;">ID โรงบ่ม</th>
                    <th scope="col" style="text-align: center;">ชื่อโรงบ่ม</th>
                    <th scope="col" style="text-align: center;">ID DEVICE</th>
                    <th scope="col" style="text-align: center;">action</th>
                </tr>
            </thead>
            <tfoot>
                <tr class="bg-danger">
                <th scope="col" style="text-align: center;">NUM</th>
                    <th scope="col" style="text-align: center;">ID โรงบ่ม</th>
                    <th scope="col" style="text-align: center;">ชื่อโรงบ่ม</th>
                    <th scope="col" style="text-align: center;">ID DEVICE</th>
                    <th scope="col" style="text-align: center;">action</th>
                </tr>
            </tfoot>

            <tbody>
                <?php 
                 $farmer = (isset($_SESSION['id_farmer'])) ? $_SESSION['id_farmer'] : '';
                 $sql = "SELECT * FROM incubs,users where incubs.id_farmer=users.id_farmer and incubs.id_farmer='$farmer'";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        $no_in = $row['no_in'];
                        $id_in = $row['id_in'];
                        $name_in = $row['name_in'];
                        $id_device = $row['id_device'];
                
                    ?>
                <tr>
                    <td style="text-align: center;">
                        <?php echo $no_in ?>         
                    </td>
                    <td style="text-align: center;">
                        <?php echo $id_in; ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo $name_in; ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo $id_device; ?>
                    </td>
                    <td style="text-align: center;">
                        <a href="#add_de<?php echo $no_in;?>" data-toggle="modal">
                            <button type='button' class='btn btn-success btn-sm' title='เพิ่มอุปกรณ์'><span
                                    class='glyphicon glyphicon-plus' aria-hidden='true'></span></button>
                        </a>
                        <a href="#edit<?php echo $no_in;?>" data-toggle="modal">
                            <button type='button' class='btn btn-warning btn-sm' title='แก้ไขข้อมูล'><span
                                    class='glyphicon glyphicon-edit' aria-hidden='true'></span></button>
                        </a>
                        <a href="#delete<?php echo $no_in;?>" data-toggle="modal">
                            <button type='button' class='btn btn-danger btn-sm' title='ลบข้อมูล'><span
                                    class='glyphicon glyphicon-trash' aria-hidden='true'></span></button>
                        </a>
                    </td>
    
                    <!-- add device Modal -->
                    <div class="modal fade" id="add_de<?php echo $no_in;?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">เพิ่มอุปกรณ์</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="" id="add_de" method="GET">
                                    <div class="modal-body">
                                        <div class="form-group">
                                        <label>ID   โรงบ่ม:</label>
                                        <input type="input" name="id_in" value="<?php echo $id_in;?> " id="id_in"><br><br>
                                            <label>ID DEVICE:</label>
                                            <input type="text" name="id_device" class="form-control" id="id_device"
                                                placeholder="ID DEVICE" required><br>
                                                <span id="hok"></span>
                                        </div>
                                        <div class="form-group">
                                            <label>KEY:</label>
                                            <input type="text" name="key" class="form-control" id="key"
                                                placeholder="KEY" required><br>
                                                <span id="hok1"></span> 
                                        </div>
                                        <div id="show_cal"></div>
                                    </div>
                                    <div class="modal-footer">
                                    <span id="hok2"></span> 
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary" name="check" data-target="#check" id="check">
                                        Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- edit Modal -->
                    <div class="modal fade" id="edit<?php echo $no_in; ?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลโรงบ่ม</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="" method="GET">
                                    <div class="modal-body">
                                        <div class="form-group">
                                        <input type="hidden" name="no_in" value="<?php echo $no_in;?>">
                                            <label>ID โรงบ่ม:</label> 
                                            <input type="text" name="id_in" class="form-control" id="id_in"
                                                value="<?php echo $id_in; ?>" placeholder="ID โรงบ่ม" required>
                                        </div>
                                        <div class="form-group">
                                            <label>ชื่อโรงบ่ม:</label>
                                            <input type="text" name="name_in" class="form-control" id="name_in"
                                                value="<?php echo $name_in; ?>" placeholder="ชื่อโรงบ่ม" required>
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small> -->
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="edit"
                                            data-target="#edit">update data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- delete Modal -->
                    <div class="modal fade" id="delete<?php echo $no_in; ?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">ลบข้อมูลโรงบ่ม</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="" method="GET">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="hidden" name="delete_id" value="<?php echo $no_in; ?>">
                                            <div class="alert alert-danger">คุณต้องการลบ <strong> <?php echo $id_in; ?> </strong> หรือไม่?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="delete"
                                                    data-target="#delete">ลบ</button>
                                            </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </tr>
                <?php
                        }
                    }
                         //Add Item        
                    if(isset($_GET['save'])){
                        $id_in = $_GET['id_in'];
                        $name_in = $_GET['name_in'];
                        $farmer = (isset($_SESSION['id_farmer'])) ? $_SESSION['id_farmer'] : '';
                        $sql = "INSERT INTO incubs (id_in,name_in,id_farmer)  VALUES ('$id_in','$name_in','$farmer') ";
                        if ($conn->query($sql) === TRUE) {
                            
                            if ($conn) {
                                echo  $alert = "<div class='alert alert-succes'>
                                <strong>$id_in</strong> No Stock
                                </div>";
                                echo '<script>window.location.href="index_in"</script>';
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }

                    //Update Items
                    if(isset($_GET['edit'])){
                        $id_in = $_GET['id_in'];
                        $name_in = $_GET['name_in'];
                        $no_in = $_GET['no_in'];
                        
                        $sql = "UPDATE  incubs 
                                SET  id_in='$id_in',
                                     name_in='$name_in'
                                WHERE no_in='$no_in'";
                        if ($conn->query($sql) === TRUE) {
                            echo '<script>window.location.href="index_in"</script>';
                        } else {
                            echo "Error updating record: " . $conn->error;
                        }
                    }

                    // Delete
                    if(isset($_GET['delete'])){
                        // sql to delete a record
                        $delete_id = $_GET['delete_id'];
                        $sql = "DELETE FROM incubs WHERE no_in ='$delete_id' ";
                        if ($conn->query($sql) === TRUE) {
                            $sql = "DELETE FROM incubs WHERE no_in='$delete_id' ";
                            if ($conn->query($sql) === TRUE) {
                                $sql = "DELETE FROM incubs WHERE no_in='$delete_id' ";
                                echo '<script>window.location.href="index_in"</script>';
                            } else {
                                echo "Error deleting record: " . $conn->error;
                            }
                        } else {
                            echo "Error deleting record: " . $conn->error;
                        }
                    }
                    
                   // check device
                   if(isset($_GET['check'])){
                    $id_in = $_GET['id_in'];
                    $id_device = $_GET['id_device'];
                    
                    // เช็คว่ามีข้อมูลนี้อยู่หรือไม่
                    $sql = "SELECT * FROM incubs WHERE id_device='$id_device' ";
                    
                    $result = mysqli_query($conn,$sql);
                    // echo $result;
                    $num = mysqli_num_rows($result); 
                    echo $num;
                    if($num == 0){
                        // echo 'yed';
                        $sql = "UPDATE  incubs 
                        SET  id_device='$id_device'
                        WHERE id_in='$id_in'";
                        mysqli_query($conn,$sql);
                    }       
                    else{
                        echo "ห้องนี้มีผู้ใช้งาน ช่วงเวลา  กรุณาตรวจสอบอีกครั้ง!";
                        echo '<script>window.location.href="index_in"</script>';  
                    }
                    mysqli_close($conn);
                    }
                    
                
?>
            </tbody>
        </table>

    </div>
    <!-- add โรงบ่ม Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลโรงบ่ม</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="" method="GET">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>ID โรงบ่ม:</label>
                            <input type="text" name="id_in" class="form-control" id="id_in" placeholder="ID โรงบ่ม"
                                required>
                        </div>
                        <div class="form-group">
                            <label>ชื่อโรงบ่ม:</label>
                            <input type="text" name="name_in" class="form-control" id="name_in" placeholder="ชื่อโรงบ่ม"
                                required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="save" data-target="#save">
                            บันทึกข้อมูล </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script>
// 

$( document ).ready(function() {
    $("#key").keyup(function(){
    var var1= document.getElementById("id_device").value;
    var var2= document.getElementById("key").value;
    console.log('อุอิอุอิอุอิอุอิอุอิ');
    var _token = $('input[name="_token"]').val();
    $.ajax({
            method:"GET",
            url:"{{'check_id'}}",    
            data:{data1:var1,_token: _token},
            success:function(responsedata){
                console.log('เข้ามาจร้าาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาาา');
                $('#hok').html(responsedata);
            }
        });
        $.ajax({
            method:"GET",
            url:"{{'check_key'}}",    
            data:{data2:var2,_token: _token},
            success:function(responsedata){
                console.log('เข้ามาแล้ววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววว');
                $('#hok1').html(responsedata);
            }
        });
    });
});


</script>		

</html>
