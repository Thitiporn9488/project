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

    <title>การจัดการกระบวนการบ่ม</title>
    <!-- ส่วนหัว -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>

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

    <!-- ปฏิทิน -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- sweet aleart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                    <li><a href="alert">ตั้งค่าการแจ้งเตือน</a></li>
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
                                style="width:250px;height:160px;text-indent:1.5em;">
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

    <h3 style="text-align: center;">ตั้งค่าการแจ้งเตือน</h3><br><br>
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
    <br> <br>

    <div class="container">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><span
                class='glyphicon glyphicon-plus' aria-hidden='true'></span>
            เพิ่มข้อมูลตั้งค่าการแจ้งเตือน
        </button> <br> <br><br>

        <?php 
             $farmer = (isset($_SESSION['id_farmer'])) ? $_SESSION['id_farmer'] : '';
             $sql = "SELECT * FROM alertrb,users where alertrb.id_farmer=users.id_farmer and alertrb.id_farmer='$farmer' ";
              $result = $conn->query($sql) ;
              while($row = $result->fetch_assoc()) {
                 echo '

                 <div class="panel panel-default">
                 <div class="panel-heading">ตั้งค่าการแจ้งเตือน
                
                 </div>
                 <div class="panel-body" style="background-color: ;">

                   <form class="form-inline" action="">
                   <div class="form-group" >
                   <label><font color="red"> การบ่มช่วงแรก : ช่วงทำสี </font></label>
                      <label style="margin-left:167px">อุณหภูมิต่ำกว่าที่กำหนด:</label>
                      <input style="background-color: #e5ffff;" type="text" class="form-control" name="lowTemp1" value="'.$row['lowTemp1'].'"'.$row['lowTemp1'].'  readonly> 
                      <label for="edate_1"  style="margin-left:18px">อุณหภูมิสูงกว่าที่กำหนด:</label>
                      <input style="background-color: #e5ffff;" type="text" class="form-control" name="highTemp1" value="'.$row['highTemp1'].'"'.$row['highTemp1'].'  readonly> 
                     <br><br>
                      <label style="margin-left:328px">ความชื้นต่ำกว่าที่กำหนด:</label>
                      <input style="background-color: #e5ffff;" type="text" class="form-control" name="lowHumid1" value="'.$row['lowHumid1'].'"'.$row['lowHumid1'].'  readonly> 
                      <label for="edate_1"  style="margin-left:17px">ความชื้นสูงกว่าที่กำหนด:</label>
                      <input style="background-color: #e5ffff;" type="text" class="form-control" name="highHumid1" value="'.$row['highHumid1'].'"'.$row['highHumid1'].'  readonly> 
                     </div><br><br>
                    </form>

                    <form class="form-inline" action="">
                    <div class="form-group" >
                    <label><font color="red"> การบ่มช่วงที่ 2 : ช่วงตรึงสี </font></label>
                       <label style="margin-left:167px">อุณหภูมิต่ำกว่าที่กำหนด:</label>
                       <input style="background-color: #e5ffff;" style="background-color: #e5ffff;" type="text" class="form-control" name="lowTemp2" value="'.$row['lowTemp2'].'"'.$row['lowTemp2'].'  readonly> 
                       <label for="edate_1"  style="margin-left:18px">อุณหภูมิสูงกว่าที่กำหนด:</label>
                       <input style="background-color: #e5ffff;" style="background-color: #e5ffff;" type="text" class="form-control" name="highTemp2" value="'.$row['highTemp2'].'"'.$row['highTemp2'].'  readonly> 
                   </div><br><br>
                
                   <div class="form-group" >
                       <label style="margin-left:328px">ความชื้นต่ำกว่าที่กำหนด:</label>
                       <input style="background-color: #e5ffff;" type="text" class="form-control" name="lowHumid2" value="'.$row['lowHumid2'].'"'.$row['lowHumid2'].'  readonly> 
                       <label for="edate_1"  style="margin-left:17px">ความชื้นสูงกว่าที่กำหนด:</label>
                       <input style="background-color: #e5ffff;" type="text" class="form-control" name="highHumid2" value="'.$row['highHumid2'].'"'.$row['highHumid2'].'  readonly> 
                   </div><br><br>
                    </form>
                
                    <form class="form-inline" action="">
                    <div class="form-group" >
                    <label><font color="red"> การบ่มช่วงที่ 3 : ช่วงทำใบแห้ง </font></label>
                       <label style="margin-left:135px">อุณหภูมิต่ำกว่าที่กำหนด:</label>
                       <input style="background-color: #e5ffff;" type="text" class="form-control" name="lowTemp3" value="'.$row['lowTemp3'].'"'.$row['lowTemp3'].'  readonly> 
                       <label for="edate_1"  style="margin-left:18px">อุณหภูมิสูงกว่าที่กำหนด:</label>
                       <input style="background-color: #e5ffff;" type="text" class="form-control" name="highTemp3" value="'.$row['highTemp3'].'"'.$row['highTemp3'].'  readonly> 
                    </div><br><br>
                
                    <div class="form-group" >
                       <label style="margin-left:328px">ความชื้นต่ำกว่าที่กำหนด:</label>
                       <input style="background-color: #e5ffff;" type="text" class="form-control" name="lowHumid3" value="'.$row['lowHumid3'].'"'.$row['lowHumid3'].'  readonly> 
                       <label style="margin-left:17px">ความชื้นสูงกว่าที่กำหนด:</label>
                       <input style="background-color: #e5ffff;" type="text" class="form-control" name="highHumid3" value="'.$row['highHumid3'].'"'.$row['highHumid3'].'  readonly> 
                    </div><br><br>
                    </form>

                    <form class="form-inline" action="">
                    <div class="form-group">
                    <label ><font color="red"> การบ่มช่วงที่ 4 : ช่วงทำก้านแห้ง </font></label>
                       <label  style="margin-left:167px">อุณหภูมิต่ำกว่าที่กำหนด:</label>
                       <input style="background-color: #e5ffff;" type="text" class="form-control" name="lowTemp4" value="'.$row['lowTemp4'].'"'.$row['lowTemp4'].'  readonly> 
                       <label style="margin-left:18px">อุณหภูมิสูงกว่าที่กำหนด:</label>
                       <input style="background-color: #e5ffff;" type="text" class="form-control" name="highTemp4" value="'.$row['highTemp4'].'"'.$row['highTemp4'].'  readonly> 
                    </div><br><br>
                   <div class="form-group" >
                       <label style="margin-left:328px">ความชื้นต่ำกว่าที่กำหนด:</label>
                       <input style="background-color: #e5ffff;" type="text" class="form-control" name="lowHumid4" value="'.$row['lowHumid4'].'"'.$row['lowHumid4'].'  readonly> 
                       <label  style="margin-left:17px">ความชื้นสูงกว่าที่กำหนด:</label>
                       <input style="background-color: #e5ffff;" type="text" class="form-control" name="highHumid4" value="'.$row['highHumid4'].'"'.$row['highHumid4'].'  readonly> 
                   </div><br><br><br>
                    
                    </form>   

                 </div>

                 <div class="panel-footer">Panel footer</div>

               </div>


                 ';  
                ?>


        <?php 
            } 
            if(isset($_GET['save'])){

                $lowTemp1 = $_GET['lowTemp1'];
                $highTemp1= $_GET['highTemp1'];
                $lowHumid1 = $_GET['lowHumid1'];
                $highHumid1 = $_GET['highHumid1'];
               
                $lowTemp2 = $_GET['lowTemp2'];
                $highTemp2 = $_GET['highTemp2'];
                $lowHumid2 = $_GET['lowHumid2'];
                $highHumid2 = $_GET['highHumid2'];
               
                $lowTemp3 = $_GET['lowTemp3'];
                $highTemp3 = $_GET['highTemp3'];
                $lowHumid3 = $_GET['lowHumid3'];
                $highHumid3 = $_GET['highHumid3'];
               
                $lowTemp4 = $_GET['lowTemp4'];
                $highTemp4 = $_GET['highTemp4'];
                $lowHumid4 = $_GET['lowHumid4'];
                $highHumid4 = $_GET['highHumid4'];
             
                $farmer = (isset($_SESSION['id_farmer'])) ? $_SESSION['id_farmer'] : '';
                $sql = "INSERT INTO alertrb (lowTemp1,highTemp1,lowHumid1,highHumid1,lowTemp2,highTemp2,lowHumid2,highHumid2,lowTemp3,highTemp3,lowHumid3,highHumid3,lowTemp4,highTemp4,lowHumid4,highHumid4,id_farmer)  
                VALUES ('$lowTemp1','$highTemp1','$lowHumid1','$highHumid1','$lowTemp2','$highTemp2','$lowHumid2','$highHumid2','$lowTemp3','$highTemp3','$lowHumid3','$highHumid3','$lowTemp4','$highTemp4','$lowHumid4','$highHumid4','$farmer') ";
                if ($conn->query($sql) === TRUE) {
                    if ($conn) {
                        echo  '<script>
                        swal("บันทึกข้อมูลเรียบร้อยแล้ว", "success");
                            window.location.href="pro";
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
                $lowTemp1 = $_GET['lowTemp1'];
                $highTemp1= $_GET['highTemp1'];
                $lowHumid1 = $_GET['lowHumid1'];
                $highHumid1 = $_GET['highHumid1'];
               
                $lowTemp2 = $_GET['lowTemp2'];
                $highTemp2 = $_GET['highTemp2'];
                $lowHumid2 = $_GET['lowHumid2'];
                $highHumid2 = $_GET['highHumid2'];
               
                $lowTemp3 = $_GET['lowTemp3'];
                $highTemp3 = $_GET['highTemp3'];
                $lowHumid3 = $_GET['lowHumid3'];
                $highHumid3 = $_GET['highHumid3'];
               
                $lowTemp4 = $_GET['lowTemp4'];
                $highTemp4 = $_GET['highTemp4'];
                $lowHumid4 = $_GET['lowHumid4'];
                $highHumid4 = $_GET['highHumid4'];
            
                $sql = "UPDATE  pprocessb 
                        SET   
                        lowTemp1='$lowTemp1',
                        highTemp1='$highTemp1',
                        lowHumid1='$lowHumid1',
                        highHumid1='$highHumid1', 
                        
                        lowTemp2='$lowTemp1',
                        highTemp2='$highTemp1',
                        lowHumid2='$lowHumid1',
                        highHumid2='$highHumid2', 
                        
                        lowTemp3='$lowTemp3',
                        highTemp3='$highTemp3',
                        lowHumid3='$lowHumid3',
                        highHumid3='$highHumid3', 
                       
                        lowTemp4='$lowTemp4',
                        highTemp4='$highTemp4',
                        lowHumid4='$lowHumid4',
                        highHumid4='$highHumid4'

                        WHERE  ='$'";

                       
                if ($conn->query($sql) === TRUE) {
                    echo '<script>
                    swal("แก้ไขข้อมูลเรียบร้อยแล้ว", "success");
                        window.location.href="pro";
             </script>';
                } 
                else {
                    echo "Error updating record: " . $conn->error;
                }
            }
              
             // Delete
             if(isset($_GET['delete'])){
                // sql to delete a record
                $delete_id = $_GET['delete_id'];
                $sql = "DELETE FROM pprocessb WHERE no_pro  ='$delete_id' ";
                if ($conn->query($sql) === TRUE) {
                    $sql = "DELETE FROM pprocessb WHERE no_pro ='$delete_id' ";
                    if ($conn->query($sql) === TRUE) {
                        $sql = "DELETE FROM pprocessb WHERE no_pro='$delete_id' ";
                        echo  '<script>
                        swal("ลบข้อมูลเรียบร้อยแล้ว","success");
                            window.location.href="pro";
                 </script>';
                   
                    } else {
                        echo "Error deleting record: " . $conn->error;
                    }
                } else {
                    echo "Error deleting record: " . $conn->error;
                }
            }
              
              
              ?>

    </div>

    <!--Add Item Modal -->

    <div class="modal fade" id="exampleModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">กระบวนการบ่ม</h4>
                </div>

                <div class="modal-body">

                    <form method="GET">

                        <div class="form-group row">

                            <div class="col-xs-4">
                                <label><font color="red"> การบ่มช่วงแรก : ช่วงทำสี </font></label>
                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิต่ำกว่าที่กำหนด:</label>
                                <input class="form-control" id="lowTemp1" name="lowTemp1"
                                    placeholder="อุณหภูมิต่ำกว่าที่กำหนด" type="text" required>
                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิสูงกว่าที่กำหนด:</label>
                                <input class="form-control" id="highTemp1" name="highTemp1"
                                    placeholder="อุณหภูมิสูงกว่าที่กำหนด" type="text" required>
                            </div><br><br><br><br>
                            
                            <div class="col-xs-4" style="margin-left:299px">
                                <label>ความชื้นต่ำกว่าที่กำหนด:</label>
                                <input class="form-control" id="lowHumid1" name="lowHumid1"
                                    placeholder="ความชื้นต่ำกว่าที่กำหนด" type="text" required>
                            </div>
                            
                            <div class="col-xs-4">
                                <label>ความชื้นสูงกว่าที่กำหนด:</label>
                                <input class="form-control" id="highHumid1" name="highHumid1"
                                    placeholder="ความชื้นสูงกว่าที่กำหนด" type="text" required>
                            </div><br><br><br><br>
                        </div>

                        <div class="form-group row">

                            <div class="col-xs-4">
                                <label><font color="red"> การบ่มช่วงที่ 2 : ช่วงตรึงสี </font></label>
                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิต่ำกว่าที่กำหนด:</label>
                                <input class="form-control" id="lowTemp2" name="lowTemp2"
                                    placeholder="อุณหภูมิต่ำกว่าที่กำหนด" type="text" required>
                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิสูงกว่าที่กำหนด:</label>
                                <input class="form-control" id="highTemp2" name="highTemp2"
                                    placeholder="อุณหภูมิสูงกว่าที่กำหนด" type="text" required>
                            </div><br><br><br><br>
                            
                            <div class="col-xs-4" style="margin-left:299px">
                                <label>ความชื้นต่ำกว่าที่กำหนด:</label>
                                <input class="form-control" id="lowHumid2" name="lowHumid2"
                                    placeholder="ความชื้นต่ำกว่าที่กำหนด" type="text" required>
                            </div>
                            
                            <div class="col-xs-4">
                                <label>ความชื้นสูงกว่าที่กำหนด:</label>
                                <input class="form-control" id="highHumid2" name="highHumid2"
                                    placeholder="ความชื้นสูงกว่าที่กำหนด" type="text" required>
                            </div><br><br><br><br>
                        </div>

                        <div class="form-group row">

                            <div class="col-xs-4">
                                <label><font color="red"> การบ่มช่วงที่ 3 : ช่วงทำใบแห้ง </font></label>
                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิต่ำกว่าที่กำหนด:</label>
                                <input class="form-control" id="lowTemp3" name="lowTemp3"
                                    placeholder="อุณหภูมิต่ำกว่าที่กำหนด" type="text" required>
                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิสูงกว่าที่กำหนด:</label>
                                <input class="form-control" id="highTemp3" name="highTemp3"
                                    placeholder="อุณหภูมิสูงกว่าที่กำหนด" type="text" required>
                            </div><br><br><br><br>
                            
                            <div class="col-xs-4" style="margin-left:299px">
                                <label>ความชื้นต่ำกว่าที่กำหนด:</label>
                                <input class="form-control" id="lowHumid3" name="lowHumid3"
                                    placeholder="ความชื้นต่ำกว่าที่กำหนด" type="text" required>
                            </div>
                            
                            <div class="col-xs-4">
                                <label>ความชื้นสูงกว่าที่กำหนด:</label>
                                <input class="form-control" id="highHumid3" name="highHumid3"
                                    placeholder="ความชื้นสูงกว่าที่กำหนด" type="text" required>
                            </div><br><br><br><br>
                        </div>


                        <div class="form-group row">

                            <div class="col-xs-4">
                                <label ><font color="red"> การบ่มช่วงที่ 4 : ช่วงทำก้านแห้ง </font></label>
                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิต่ำกว่าที่กำหนด:</label>
                                <input class="form-control" id="lowTemp4" name="lowTemp4"
                                    placeholder="อุณหภูมิต่ำกว่าที่กำหนด" type="text" required>
                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิสูงกว่าที่กำหนด:</label>
                                <input class="form-control" id="highTemp4" name="highTemp4"
                                    placeholder="อุณหภูมิสูงกว่าที่กำหนด" type="text" required>
                            </div><br><br><br><br>
                            
                            <div class="col-xs-4" style="margin-left:299px">
                                <label>ความชื้นต่ำกว่าที่กำหนด:</label>
                                <input class="form-control" id="lowHumid4" name="lowHumid4"
                                    placeholder="ความชื้นต่ำกว่าที่กำหนด" type="text" required>
                            </div>
                            
                            <div class="col-xs-4">
                                <label>ความชื้นสูงกว่าที่กำหนด:</label>
                                <input class="form-control" id="highHumid4" name="highHumid4"
                                    placeholder="ความชื้นสูงกว่าที่กำหนด" type="text" required>
                            </div><br><br><br><br>

                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" name="save" data-target="#save">
                                บันทึกข้อมูล </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</body>
</html>
