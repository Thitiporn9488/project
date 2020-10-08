<?php
  $datadb = "testpj";
  $servername = "localhost";
  $username = "root";
  $password = "";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $datadb);

  session_start(); 

     if(isset($_SESSION['status'])=='เจ้าของ') {
            header("Location:/");
        }
     
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การจัดการโรงบ่มและอุปกรณ์</title>
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
        $(document).ready(function () {
            $('#example').DataTable();
        });

    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript" src="js/jquery_v_1.4.js"></script>
    <script type="text/javascript" src="js/jquery_notification_v.1.js"></script>
    <link href="css/jquery_notification.css" type="text/css" rel="stylesheet" />

</head>

<body>

<nav class="navbar navbar-default">
        <div class="container-fluid" style="margin-right:100px;margin-left:100px">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home">Rong Bom</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index_in">การจัดการโรงบ่มและอุปกรณ์</a></li>
                    <li><a href="pro">การจัดการกระบวนการบ่ม</a></li>
                    <li><a href="graph">กราฟสรุปข้อมูล</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">

                <?php  
    if(isset($_SESSION['status'])=='เจ้าของ'){
                            ?>
                   <li class="nav-item dropdown d-none d-xl-inline-block">
                        <a class="dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                            aria-expanded="false">
                            <span class="glyphicon glyphicon-user hidden-xs">
                                <?php echo $_SESSION['name_user'];?></span> </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <br>
                            <div class="d-flex border-bottom w-100 justify-content-center"
                                style="width:250px;height:140px;text-indent:1.5em;">
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                    <p class="mdi mdi-bookmark-plus-outline mr-0 text-gray">NAME :
                                        <?php echo $_SESSION['name_user'];?></p>
                                </div>
                                <div
                                    class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                                    <p class="mdi mdi-account-outline mr-0 text-gray">ID ADMIN :
                                        <?php echo $_SESSION['id_farmer'];?></p>
                                </div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                    <p class="mdi mdi-alarm-check mr-0 text-gray">STATUS :
                                        <?php echo $_SESSION['status'];?></p>
                                </div>
                                <hr class="my-4">

                                <form action="regis_em">
                                    <div class="pull-left">
                                    <button href="#" class="btn btn-defaul btn-flat">register employee</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </li>
                    <?php } ?>

                    <li><a href="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav><br>

    <h3 style="text-align: center;">การจัดการโรงบ่มและอุปกรณ์</h3><br><br>
    <?php 
    if(isset($_SESSION['status'])=='เจ้าของ'){
                            ?>

    <div class="container" style="width:400px;height:100px;text-align: center;">
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
            เพิ่มข้อมูลโรงบ่มและอุปกรณ์
        </button> <br> <br><br>
    

        <table id="example" class="table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr class="bg-danger">
                    <th scope="col" style="text-align: center;">ID โรงบ่ม</th>
                    <th scope="col" style="text-align: center;">ชื่อโรงบ่ม</th>
                    <th scope="col" style="text-align: center;">ID DEVICE</th>
                    <th scope="col" style="text-align: center;">ลูกจ้างดูแลโรงบ่ม</th>
                    <th scope="col" style="text-align: center;">action</th>
                </tr>
            </thead>
            <tfoot>
                <tr class="bg-danger">
                <th scope="col" style="text-align: center;">ID โรงบ่ม</th>
                    <th scope="col" style="text-align: center;">ชื่อโรงบ่ม</th>
                    <th scope="col" style="text-align: center;">ID DEVICE</th>
                    <th scope="col" style="text-align: center;">ลูกจ้างดูแลโรงบ่ม</th>
                    <th scope="col" style="text-align: center;">action</th>
                </tr>
            </tfoot>

            <tbody>
                <?php 
                 $farmer = (isset($_SESSION['id_farmer'])) ? $_SESSION['id_farmer'] : '';
                 $sql = "SELECT * FROM incubs,users where incubs.id_farmer=users.id_farmer and incubs.id_farmer='$farmer'";
                  $result = $conn->query($sql);
                      // output data of each row
                      while($row = $result->fetch_assoc()){

                        echo ' 
                        <tr>
                        <td style="text-align: center;">
                            '.$row['id_in'].'
                        </td>
                        <td style="text-align: center;">
                            '.$row['name_in'].'
                        </td>
                        <td style="text-align: center;">
                            '.$row['id_device'].'
                        </td>

                        <td style="text-align: center;">
                            <a href="#alert'.$row['no_in'].'"'.$row['no_in'].'" data-toggle="modal">
                                <button type="button" class="btn btn-warning btn-sm" title="แจ้งเตือน"><span
                                        class="glyphicon glyphicon-bell" aria-hidden="true"></span></button>
                            </a>
                            <a href="#add_de'.$row['no_in'].'"'.$row['no_in'].'" data-toggle="modal">
                                <button type="button" class="btn btn-success btn-sm" title="เพิ่มอุปกรณ์"><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                            </a>
                            <a href="#edit'.$row['no_in'].'"'.$row['no_in'].'" data-toggle="modal">
                                <button type="button" class="btn btn-info btn-sm" title="แก้ไขข้อมูล"><span
                                        class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </a>
                            <a href="#delete'.$row['no_in'].'"'.$row['no_in'].'" data-toggle="modal">
                                <button type="button" class="btn btn-danger btn-sm" title="ลบข้อมูล"><span
                                        class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                            </a>
                        </td>
    
                        <!-- แจ้งเตือน Modal -->

                        
                        <div class="modal fade" id="alert'.$row['no_in'].'"'.$row['no_in'].'" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel">ตั้งค่าการแจ้งเตือน</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="" method="GET">
                                        <div class="modal-body">
                                            <label>ชื่อโรงบ่ม:</label>
                                            <input type="input" name="name_in" class="form-control"
                                                value="'.$row['name_in'].'"'.$row['name_in'].' " id="name_in" readonly><br>

                                                <div class="form-group row">

                                            <div  class="col-xs-4" style="margin-left:70px">
                                                <label>อุณหภูมิต่ำกว่าที่กำหนด:</label>
                                                <input type="text" name="lowTemp" class="form-control" id="lowTemp"
                                                    placeholder="อุณหภูมิต่ำกว่าที่กำหนด" required>
                                            </div>
                                            <div  class="col-xs-4" style="margin-left:70px">
                                                <label>อุณหภูมิสูงกว่าที่กำหนด:</label>
                                                <input type="text" name="highTemp" class="form-control" id="highTemp"
                                                    placeholder="อุณหภูมิสูงกว่าที่กำหนด" required>
                                            </div><br><br><br><br>
                                            <div  class="col-xs-4" style="margin-left:70px">
                                                <label>ความชื้นต่ำกว่าที่กำหนด:</label>
                                                <input type="text" name="lowHumid" class="form-control" id="lowHumid"
                                                    placeholder="ความชื้นต่ำกว่าที่กำหนด" required>
                                            </div>
                                            <div  class="col-xs-4" style="margin-left:70px"
                                                <label>ความชื้นสูงกว่าที่กำหนด:</label>
                                                <input type="text" name="highHumid" class="form-control" id="highHumid"
                                                    placeholder="ความชื้นสูงกว่าที่กำหนด" required>
                                            </div>

                                        </div>  
                                        
                                        </div>
    
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="alert"
                                                data-target="#alert">บันทึกข้อมูล</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
    
    
                        <!-- add device Modal -->
                        <div class="modal fade" id="add_de'.$row['no_in'].'"'.$row['no_in'].'" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel">เพิ่มอุปกรณ์</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="" method="GET">
                                        <div class="modal-body">
                                            <label>ชื่อโรงบ่ม:</label>
                                            <input type="input" name="name_in" class="form-control"
                                                value="'.$row['name_in'].'"'.$row['name_in'].' " id="name_in" readonly><br>

                                                <div class="form-group row">

                                            <div class="col-xs-4" style="margin-left:70px">
                                                <label>ID DEVICE::</label>
                                                <input type="text" name="id_device" class="form-control" id="id_device"
                                                    placeholder="ID DEVICE" required>
                                            </div>
                                           
                                            <div class="col-xs-4" style="margin-left:70px">
                                                <label>KEY:</label>
                                                <input type="text" name="key" class="form-control" id="key"
                                                    placeholder="KEY" required>
                                            </div>
                                           
    
                                        </div><br>
                                        <span id="hok"></span>
                                        <span id="hok1"></span>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="check"
                                                data-target="#check">บันทึกข้อมูล</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
    
    
                        <!-- edit Modal -->
                        <div class="modal fade" id="edit'.$row['no_in'].'"'.$row['no_in'].'" tabindex="-1" role="dialog"
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
                                            <input type="hidden" name="no_in" class="form-control"
                                                value="'.$row['no_in'].'"'.$row['no_in'].'" id="no_in" readonly><br>

                                                <div class="form-group row">
    
                                            <div class="col-xs-4" style="margin-left:65px">
                                                <label>ID โรงบ่ม:</label>
                                                <input type="text" name="id_in" class="form-control" id="id_in"
                                                    value="'.$row['id_in'].'"'.$row['id_in'].'" placeholder="ID โรงบ่ม" >
                                            </div>
                                            <div class="col-xs-4" style="margin-left:65px">
                                                <label>ชื่อโรงบ่ม:</label>
                                                <input type="text" name="name_in" class="form-control" id="name_in"
                                                    value="'.$row['name_in'].'"'.$row['name_in'].'" placeholder="ชื่อโรงบ่ม" >
                                            </div><br><br><br><br>

                                            <div class="col-xs-4" style="margin-left:65px">
                                                <label>อุณหภูมิต่ำกว่าที่กำหนด:</label>
                                                <input type="text" name="lowTemp" class="form-control" id="lowTemp"
                                                    value="'.$row['lowTemp'].'"'.$row['lowTemp'].'" placeholder="อุณหภูมิต่ำกว่าที่กำหนด"
                                                    >
                                            </div>
                                            <div class="col-xs-4" style="margin-left:65px">
                                                <label>อุณหภูมิสูงกว่าที่กำหนด:</label>
                                                <input type="text" name="highTemp" class="form-control" id="highTemp"
                                                    value="'.$row['highTemp'].'"'.$row['highTemp'].'" placeholder="อุณหภูมิสูงกว่าที่กำหนด"
                                                    >
                                            </div><br><br><br><br>
                                            <div class="col-xs-4" style="margin-left:65px">
                                                <label>ความชื้นต่ำกว่าที่กำหนด:</label>
                                                <input type="text" name="lowHumid" class="form-control" id="lowHumid"
                                                    value="'.$row['lowHumid'].'"'.$row['lowHumid'].'" placeholder="ความชื้นต่ำกว่าที่กำหนด"
                                                    >
                                            </div>
                                            <div class="col-xs-4" style="margin-left:65px">
                                                <label>ความชื้นสูงกว่าที่กำหนด:</label>
                                                <input type="text" name="highHumid" class="form-control" id="highHumid"
                                                    value="'.$row['highHumid'].'"'.$row['highHumid'].'" placeholder="ความชื้นสูงกว่าที่กำหนด"
                                                    >
                                            </div>

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
                       
                        <div class="modal fade" id="delete'.$row['no_in'].'"'.$row['no_in'].'" role="dialog">
                          <div class="modal-dialog">
                          
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">ลบข้อมูลกระบวนการบ่ม</h4>
                              </div>
                              <form method="GET">
                              <div class="modal-body">
                      
                              <input type="hidden" name="delete_id" value="'.$row['no_in'].'"'.$row['no_in'].'">
                              <div class="alert alert-danger">คุณต้องการลบ
                              <a href="#" class="alert-link">'.$row['name_in'].'</a> หรือไม่? 
                            </div>
                      
                              </div>
                      
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" name="delete" data-target="#delete">
                                                      ลบ</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
    
                    </tr>
                        
                        
                        ';
                      
                    ?>
             
                <?php
                      }
                    
                      //Add Item  
                      if(isset($_GET['alert'])){
                        $name_in = $_GET['name_in'];
                        $lowTemp = $_GET['lowTemp'];
                        $highTemp = $_GET['highTemp'];
                        $lowHumid = $_GET['lowHumid'];
                        $highHumid = $_GET['highHumid'];

                        $sql = "UPDATE  incubs 
                                SET  lowTemp='$lowTemp',
                                highTemp='$highTemp',
                                lowHumid='$lowHumid',
                                highHumid='$highHumid'
                                WHERE name_in='$name_in'";
                        if ($conn->query($sql) === TRUE) {
                            echo  '<script>
                            swal("บันทึกข้อมูลเรียบร้อยแล้ว","success");
                                window.location.href="index_in";
                     </script>';
                        } else {
                            echo "Error updating record: " . $conn->error;
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
                                echo '<script>
                                swal("บันทึกข้อมูลเรียบร้อยแล้ว", "success");
                                    window.location.href="index_in";
                         </script>';
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }

                    //Update Items
                    if(isset($_GET['edit'])){
                        $no_in = $_GET['no_in'];
                        $id_in = $_GET['id_in'];
                        $name_in = $_GET['name_in'];
                        $lowTemp = $_GET['lowTemp'];
                        $highTemp = $_GET['highTemp'];
                        $lowHumid = $_GET['lowHumid'];
                        $highHumid = $_GET['highHumid'];
                        
                        $sql = "UPDATE  incubs 
                                SET  id_in='$id_in',
                                     name_in='$name_in',
                                     lowTemp='$lowTemp',
                                highTemp='$highTemp',
                                lowHumid='$lowHumid',
                                highHumid='$highHumid'
                                WHERE no_in='$no_in'";
                        if ($conn->query($sql) === TRUE) {
                            echo '<script>
                            swal("แก้ไขข้อมูลเรียบร้อยแล้ว","success");
                                window.location.href="index_in";
                     </script>';
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
                                echo '<script>
                                swal("ลบข้อมูลเรียบร้อยแล้ว", "success");
                                    window.location.href="index_in";
                         </script>';
                            } else {
                                echo "Error deleting record: " . $conn->error;
                            }
                        } else {
                            echo "Error deleting record: " . $conn->error;
                        }
                    }
                    
                   // check device
                   if(isset($_GET['check'])){
                    $name_in = $_GET['name_in'];
                    $id_device = $_GET['id_device'];
                    $key = $_GET['key'];
                    
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
                        WHERE name_in='$name_in'";
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

<script type="text/javascript">

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
