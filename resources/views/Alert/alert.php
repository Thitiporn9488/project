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

                 <a href="#edit'.$row['no_alertrb'].'"'.$row['no_alertrb'].'"  style="margin-left:880px" data-toggle="modal">
                 <button type="button" class="btn btn-info btn-sm" title="แก้ไขข้อมูล"><span
                         class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
             </a>
             <a href="#delete'.$row['no_alertrb'].'"'.$row['no_alertrb'].'"  data-toggle="modal">
                 <button type="button" class="btn btn-danger btn-sm" title="ลบข้อมูล"><span
                         class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
             </a>

                 </div>

                 <div class="modal-body">

                 <form method="GET">

                 <div class="form-group row">

                 <div class="col-xs-4" style="text-align: center;">
                 <label>
                     <font color="red"> การบ่มช่วงแรก : ช่วงทำสี </font>
                 </label><br><br>
                 <img src="image/Capture.JPG" class="img-rounded" alt="ช่วงทำสี" width="150" height="100"
                     align="Center">
                </div>

                <div class="col-xs-4">
                    <label><img src="image\444.Jpg" class="img-rounded" alt="อุณหภูมิต่ำกว่าที่กำหนด" width="50" height="60" align="Center" >อุณหภูมิต่ำ:</label>
                    <span> <font color="#3d5afe"> Current Slider Value: </font></span>
                    <span><font color="#3d5afe"> '.$row['lowTemp1'].' </font></span>
                </div>

                <div class="col-xs-4">
                <label><img src="image\333.Jpg" class="img-rounded" alt="อุณหภูมิสูงกว่าที่กำหนด" width="50" height="60" align="Center">อุณหภูมิสูง:</label>
                    <span ><font color="#e53935"> Current Slider Value: </font></span>
                <span><font color="#e53935"> '.$row['highTemp1'].' </font></span>

                </div><br><br><br><br>

                <div class="col-xs-4">
                    <label><img src="image\987.Jpg" class="img-rounded" alt="ความชื้นต่ำ" width="50" height="60" align="Center">ความชื้นต่ำ:</label>
                    <span><font color="#3d5afe"> Current Slider Value: </font></span>
                    <span><font color="#3d5afe"> '.$row['lowHumid1'].' </font></span>

                </div>

                <div class="col-xs-4">
                    <label><img src="image\7899.Jpg" class="img-rounded" alt="ความชื้นสูง" width="50" height="60" align="Center">ความชื้นสูง:</label
                    <span ><font color="#e53935"> Current Slider Value: </font></span>
                    <span><font color="#e53935">'.$row['highHumid1'].'</font></span>
                </div><br><br><br><br>
                <hr width="100%" size="30" color="red">
             </div>


             <div class="form-group row">

                            <div class="col-xs-4" style="text-align: center;">
                                <label>
                                    <font color="red"> การบ่มช่วงที่ 2 : ช่วงตรึงสี </font>
                                </label><br><br>
                                <img src="image/6669.JPG" class="img-rounded" alt="ช่วงทำสี" width="150" height="100"
                                    align="Center">
                            </div>

                            <div class="col-xs-4">
                                <label><img src="image\444.Jpg" class="img-rounded" alt="อุณหภูมิต่ำกว่าที่กำหนด" width="50" height="60" align="Center">อุณหภูมิต่ำ:</label>
                                <span ><font color="#3d5afe"> Current Slider Value: </font></span>
                                <span><font color="#3d5afe">'.$row['lowTemp2'].'</font></span>

                            </div>

                            <div class="col-xs-4">
                                <label><img src="image\333.Jpg" class="img-rounded" alt="อุณหภูมิสูงกว่าที่กำหนด" width="50" height="60" align="Center">อุณหภูมิสูง:</label>
                                    <span ><font color="#e53935"> Current Slider Value: </font></span>
                                <span><font color="#e53935"> '.$row['highTemp2'].'</font></span>

                            </div><br><br><br><br>

                            <div class="col-xs-4">
                                <label><img src="image\987.Jpg" class="img-rounded" alt="ความชื้นต่ำ" width="50" height="60" align="Center">ความชื้นต่ำ:</label>
                                    <span ><font color="#3d5afe"> Current Slider Value: </font></span>
                                <span><font color="#3d5afe">'.$row['lowHumid2'].'</font></span>

                            </div>

                            <div class="col-xs-4">
                                <label><img src="image\7899.Jpg" class="img-rounded" alt="ความชื้นสูง" width="50" height="60" align="Center">ความชื้นสูง:</label
                                    <span ><font color="#e53935"> Current Slider Value: </font></span>
                                <span><font color="#e53935"> '.$row['highHumid2'].' </font></span>

                            </div><br><br><br><br>
                        </div>
                        <hr width="100%" size="30" color="red">

                        <div class="form-group row">

                        <div class="col-xs-4" style="text-align: center;">
                            <label>
                                <font color="red"> การบ่มช่วงที่ 3 : ช่วงทำใบแห้ง </font>
                            </label><br><br>
                            <img src="image\999.Jpg" class="img-rounded" alt="ช่วงทำสี" width="150" height="100"
                                align="Center">
                        </div>

                        <div class="col-xs-4">
                            <label><img src="image\444.Jpg" class="img-rounded" alt="อุณหภูมิต่ำกว่าที่กำหนด" width="50" height="60" align="Center">อุณหภูมิต่ำ:</label>
                                <span ><font color="#3d5afe"> Current Slider Value: </font></span>
                            <span><font color="#3d5afe"> '.$row['lowTemp3'].'</font></span>

                        </div>

                        <div class="col-xs-4">
                            <label><img src="image\333.Jpg" class="img-rounded" alt="อุณหภูมิสูงกว่าที่กำหนด" width="40" height="60" align="Center">อุณหภูมิสูง:</label>
                                <span ><font color="#e53935"> Current Slider Value: </font></span>
                            <span><font color="#e53935">'.$row['highTemp3'].'</font></span>

                        </div><br><br><br><br>

                        <div class="col-xs-4">
                            <label><img src="image\987.Jpg" class="img-rounded" alt="ความชื้นต่ำ" width="50" height="60" align="Center">ความชื้นต่ำ:</label>
                                <span ><font color="#3d5afe"> Current Slider Value: </font></span>
                            <span><font color="#3d5afe">'.$row['lowHumid3'].'</font></span>

                        </div>

                        <div class="col-xs-4">
                            <label><img src="image\7899.Jpg" class="img-rounded" alt="ความชื้นสูง" width="50" height="60" align="Center">ความชื้นสูง:</label>
                                <span ><font color="#e53935"> Current Slider Value: </font><span>
                            <span><font color="#e53935">'.$row['highHumid3'].'</font></span>

                        </div><br><br><br><br>
                    </div>
                    <hr width="100%" size="30" color="red">


                    <div class="form-group row">

                        <div class="col-xs-4" style="text-align: center;">
                            <label>
                                <font color="red"> การบ่มช่วงที่ 4 : ช่วงทำก้านแห้ง </font>
                            </label><br><br>
                            <img src="image\48.Jpg" class="img-rounded" alt="ช่วงทำสี" width="150" height="100"
                                align="Center">
                        </div>

                        <div class="col-xs-4">
                            <label><img src="image\444.Jpg" class="img-rounded" alt="อุณหภูมิต่ำกว่าที่กำหนด" width="50" height="60" align="Center">อุณหภูมิต่ำ:</label>
                                <span ><font color="#3d5afe"> Current Slider Value: </font></span>
                            <span><font color="#3d5afe">'.$row['lowTemp4'].'</font></span>

                        </div>

                        <div class="col-xs-4">
                            <label><img src="image\333.Jpg" class="img-rounded" alt="อุณหภูมิสูงกว่าที่กำหนด" width="50" height="60">อุณหภูมิสูง:</label>
                                <span ><font color="#e53935"> Current Slider Value: </font></span>
                            <span><font color="#e53935"> '.$row['highTemp4'].'</font></span>

                        </div><br><br><br><br>

                        <div class="col-xs-4">
                            <label><img src="image\987.Jpg" class="img-rounded" alt="ความชื้นต่ำ" width="50" height="60" align="Center">ความชื้นต่ำ:</label>
                                <span ><font color="#3d5afe"> Current Slider Value: </font><span>
                            <span><font color="#3d5afe">'.$row['lowHumid4'].'</font></span>

                        </div>

                        <div class="col-xs-4">
                            <label><img src="image\7899.Jpg" class="img-rounded" alt="ความชื้นสูง" width="50" height="60" align="Center">ความชื้นสูง:</label>
                                <span ><font color="#e53935"> Current Slider Value: </font></span>
                            <span><font color="#e53935"> '.$row['highHumid4'].' </font></span>

                        </div><br><br><br><br>

                    </div>


             </form>

                 </div>

                 <div class="panel-footer"></div>

               </div>

               <!--edit Item Modal -->
    <div class="modal fade" id="edit'.$row['no_alertrb'].'"'.$row['no_alertrb'].'" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">ตั้งค่าการแจ้งเตือน</h4>
                </div>

                <form method="GET">
                <div class="modal-body">

                <input class="form-control" id="no_alertrb" value="'.$row['no_alertrb'].'"'.$row['no_alertrb'].'"
                         name="no_alertrb" type="hidden">

                
                        <div class="form-group row">

                            <div class="col-xs-4" style="text-align: center;">
                                <label><font color="red"> การบ่มช่วงแรก : ช่วงทำสี </font></label><br><br>
                                <img src="image/Capture.JPG" class="img-rounded" alt="ช่วงทำสี" width="150" height="100" align="Center">
                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิต่ำกว่าที่กำหนด:</label>

                                <input type="range" class="custom-range" id="customRange1" min="25" max="80" name="lowTemp1" value="'.$row['lowTemp1'].'">
                                <span> Current Slider Value:</span>
                                <span class="font-weight-bold text-primary ml-2 valueSpan1"></span>
                          
                            
                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิสูงกว่าที่กำหนด:</label>

                                <input type="range" class="custom-range" id="customRange2" min="25" max="80" name="highTemp1"  value="'.$row['highTemp1'].'">
                                <span> Current Slider Value:</span>
                                <span class="font-weight-bold text-primary ml-2 valueSpan2"></span>
                               
                            </div><br><br><br><br>
                            
                            <div class="col-xs-4" >
                                <label>ความชื้นต่ำกว่าที่กำหนด:</label>

                                <input type="range" class="custom-range" id="customRange3" min="20" max="60" name="lowHumid1" value="'.$row['lowHumid1'].'">
                                <span> Current Slider Value:</span>
                                <span class="font-weight-bold text-primary ml-2 valueSpan3"></span>

                            </div>
                            
                            <div class="col-xs-4">
                                <label>ความชื้นสูงกว่าที่กำหนด:</label>

                                <input type="range" class="custom-range" id="customRange4" min="20" max="60" name="highHumid1" value="'.$row['highHumid1'].'">
                                <span> Current Slider Value:</span>
                                <span class="font-weight-bold text-primary ml-2 valueSpan4"></span>
                            
                            </div><br><br><br><br>
                        </div>
                        <hr width="100%" size="30" color="red">

                        <div class="form-group row">

                            <div class="col-xs-4"  style="text-align: center;">
                                <label><font color="red"> การบ่มช่วงที่ 2 : ช่วงตรึงสี </font></label><br><br>
                                <img src="image/6669.JPG" class="img-rounded" alt="ช่วงทำสี" width="150" height="100" align="Center">
                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิต่ำกว่าที่กำหนด:</label>

                                <input type="range" class="custom-range" id="customRange5" min="25" max="80" name="lowTemp2" value="'.$row['lowTemp2'].'">
                                <span> Current Slider Value:</span>
                                <span class="font-weight-bold text-primary ml-2 valueSpan5"></span>
                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิสูงกว่าที่กำหนด:</label>

                                <input type="range" class="custom-range" id="customRange6" min="25" max="80" name="highTemp2" value="'.$row['highTemp2'].'">
                                <span> Current Slider Value:</span>
                                <span class="font-weight-bold text-primary ml-2 valueSpan6"></span>

                            </div><br><br><br><br>
                            
                            <div class="col-xs-4" >
                                <label>ความชื้นต่ำกว่าที่กำหนด:</label>
                                
                                <input type="range" class="custom-range" id="customRange7" min="20" max="60" name="lowHumid2" value="'.$row['lowHumid2'].'">
                                <span> Current Slider Value:</span>
                                <span class="font-weight-bold text-primary ml-2 valueSpan7"></span>
                            </div>
                            
                            <div class="col-xs-4">
                                <label>ความชื้นสูงกว่าที่กำหนด:</label>
                                
                                <input type="range" class="custom-range" id="customRange8"min="20" max="60" name="highHumid2" value="'.$row['highHumid2'].'">
                                <span> Current Slider Value:</span>
                                <span class="font-weight-bold text-primary ml-2 valueSpan8"></span>
                            </div><br><br><br><br>
                        </div>
                        <hr width="100%" size="30" color="red">

                        <div class="form-group row">

                            <div class="col-xs-4" style="text-align: center;">
                                <label><font color="red"> การบ่มช่วงที่ 3 : ช่วงทำใบแห้ง </font></label><br><br>
                                <img src="image\999.Jpg" class="img-rounded" alt="ช่วงทำสี" width="150" height="100" align="Center">
                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิต่ำกว่าที่กำหนด:</label>

                                <input type="range" class="custom-range" id="customRange9" min="25" max="80" name="lowTemp3" value="'.$row['lowTemp3'].'">
                                <span> Current Slider Value:</span>
                                <span class="font-weight-bold text-primary ml-2 valueSpan9"></span>
                    
                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิสูงกว่าที่กำหนด:</label>
                              
                                <input type="range" class="custom-range" id="customRange10" min="25" max="80" name="highTemp3" value="'.$row['highTemp3'].'">
                                <span> Current Slider Value:</span>
                                <span class="font-weight-bold text-primary ml-2 valueSpan10"></span>
                            </div><br><br><br><br>
                            
                            <div class="col-xs-4">
                                <label>ความชื้นต่ำกว่าที่กำหนด:</label>

                                <input type="range" class="custom-range" id="customRange18" min="20" max="60"  name="lowHumid3" value="'.$row['lowHumid3'].'">
                                <span> Current Slider Value:</span>
                                <span class="font-weight-bold text-primary ml-2 valueSpan18"></span>
                
                            </div>
                            
                            <div class="col-xs-4">
                                <label>ความชื้นสูงกว่าที่กำหนด:</label>
                            
                                <input type="range" class="custom-range" id="customRange11" min="20" max="60" name="highHumid3" value="'.$row['highHumid3'].'">
                                <span> Current Slider Value:</span>
                                <span class="font-weight-bold text-primary ml-2 valueSpan11"></span>
                            </div><br><br><br><br>
                        </div>
                        <hr width="100%" size="30" color="red">


                        <div class="form-group row">

                            <div class="col-xs-4" style="text-align: center;">
                                <label ><font color="red"> การบ่มช่วงที่ 4 : ช่วงทำก้านแห้ง </font></label><br><br>
                                <img src="image\48.Jpg" class="img-rounded" alt="ช่วงทำสี" width="150" height="100" align="Center">
                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิต่ำกว่าที่กำหนด:</label>

                                <input type="range" class="custom-range" id="customRange19" min="25" max="80" name="lowTemp4" value="'.$row['lowTemp4'].'">
                                <span> Current Slider Value:</span>
                                <span class="font-weight-bold text-primary ml-2 valueSpan19"></span>
                    
                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิสูงกว่าที่กำหนด:</label>
                            
                                <input type="range" class="custom-range" id="customRange14" min="25" max="80" name="highTemp4" value="'.$row['highTemp4'].'">
                                <span> Current Slider Value:</span>
                                <span class="font-weight-bold text-primary ml-2 valueSpan13"></span>

                            </div><br><br><br><br>
                            
                            <div class="col-xs-4">
                                <label>ความชื้นต่ำกว่าที่กำหนด:</label>

                                <input type="range" class="custom-range" id="customRange16" min="20" max="60"  name="lowHumid4" value="'.$row['lowHumid4'].'">
                                <span> Current Slider Value:</span>
                                <span class="font-weight-bold text-primary ml-2 valueSpan16"></span>
                                
                            </div>
                            
                            <div class="col-xs-4">
                                <label>ความชื้นสูงกว่าที่กำหนด:</label>
                              
                                <input type="range" class="custom-range" id="customRange17" min="20" max="60" name="highHumid4" value="'.$row['highHumid4'].'">
                                <span> Current Slider Value:</span>
                                <span class="font-weight-bold text-primary ml-2 valueSpan17"></span>
                            </div><br><br><br><br>

                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" name="edit" data-target="#edit">
                                บันทึกข้อมูล </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- delete Modal -->
                        <div class="modal fade" id="delete'.$row['no_alertrb'].'"'.$row['no_alertrb'].'" role="dialog">
                          <div class="modal-dialog">
                          
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">ลบข้อมูลกระบวนการบ่ม</h4>
                              </div>
                              <form method="GET">
                              <div class="modal-body">
                      
                              <input type="hidden" name="delete_id" value="'.$row['no_alertrb'].'"'.$row['no_alertrb'].'">
                              <div class="alert alert-danger">คุณต้องการลบ
                              <a href="#" class="alert-link">ตั้งค่าการแจ้งเตือน</a> หรือไม่? 
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
                            window.location.href="alert";
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
                $no_alertrb = $_GET['no_alertrb'];
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
            
                $sql = "UPDATE  alertrb 
                        SET    no_alertrb ='$no_alertrb ',
                        lowTemp1='$lowTemp1',
                        highTemp1='$highTemp1',
                        lowHumid1='$lowHumid1',
                        highHumid1='$highHumid1', 
                        lowTemp2='$lowTemp2',
                        highTemp2='$highTemp2',
                        lowHumid2='$lowHumid2',
                        highHumid2='$highHumid2', 
                        lowTemp3='$lowTemp3',
                        highTemp3='$highTemp3',
                        lowHumid3='$lowHumid3',
                        highHumid3='$highHumid3', 
                        lowTemp4='$lowTemp4',
                        highTemp4='$highTemp4',
                        lowHumid4='$lowHumid4',
                        highHumid4='$highHumid4'
                        WHERE  no_alertrb ='$no_alertrb '";  
                if ($conn->query($sql) === TRUE) {
                    echo '<script>
                    swal("แก้ไขข้อมูลเรียบร้อยแล้ว", "success");
                        window.location.href="alert";
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
                $sql = "DELETE FROM alertrb WHERE no_alertrb  ='$delete_id' ";
                if ($conn->query($sql) === TRUE) {
                    $sql = "DELETE FROM alertrb WHERE no_alertrb ='$delete_id' ";
                    if ($conn->query($sql) === TRUE) {
                        $sql = "DELETE FROM alertrb WHERE no_alertrb='$delete_id' ";
                        echo  '<script>
                        swal("ลบข้อมูลเรียบร้อยแล้ว","success");
                            window.location.href="alert";
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
                    <h4 class="modal-title">ตั้งค่าการแจ้งเตือน</h4>
                </div>

                <div class="modal-body">

                    <form method="GET">

                        <div class="form-group row">

                            <div class="col-xs-4" style="text-align: center;">
                                <label>
                                    <font color="red"> การบ่มช่วงแรก : ช่วงทำสี </font>
                                </label><br><br>
                                <img src="image/Capture.JPG" class="img-rounded" alt="ช่วงทำสี" width="150" height="100"
                                    align="Center">
                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิต่ำกว่าที่กำหนด:</label>
                                
                                <input type="range" class="form-control-range" id="lowTemp1" name="lowTemp1"
                                    onInput="$('#rangeval').html($(this).val())" min="25" max="80" step="1">
                                <span>Current Slider Value:</span>
                                <span id="rangeval">50
                                    <!-- Default value --></span>

                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิสูงกว่าที่กำหนด:</label>

                                <input type="range" class="form-control-range" id="highTemp1" name="highTemp1" 
                                    onInput="$('#rangeval1').html($(this).val())" min="25" max="80" step="1">
                                <span>Current Slider Value:</span>
                                <span id="rangeval1">50
                                    <!-- Default value --></span>

                            </div><br><br><br><br>

                            <div class="col-xs-4">
                                <label>ความชื้นต่ำกว่าที่กำหนด:</label>

                                <input type="range" class="form-control-range" id="lowHumid1" name="lowHumid1"
                                    onInput="$('#rangeval2').html($(this).val())" min="20" max="60" step="1">
                                <span>Current Slider Value:</span>
                                <span id="rangeval2">40
                                    <!-- Default value --></span>

                            </div>

                            <div class="col-xs-4">
                                <label>ความชื้นสูงกว่าที่กำหนด:</label>

                                <input type="range" class="form-control-range" id="highHumid1" name="highHumid1"
                                    onInput="$('#rangeval3').html($(this).val())" min="20" max="60" step="1">
                                <span>Current Slider Value:</span>
                                <span id="rangeval3">40
                                    <!-- Default value --></span>

                            </div><br><br><br><br>
                        </div>
                        <hr width="100%" size="30" color="red">

                        <div class="form-group row">

                            <div class="col-xs-4" style="text-align: center;">
                                <label>
                                    <font color="red"> การบ่มช่วงที่ 2 : ช่วงตรึงสี </font>
                                </label><br><br>
                                <img src="image/6669.JPG" class="img-rounded" alt="ช่วงทำสี" width="150" height="100"
                                    align="Center">
                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิต่ำกว่าที่กำหนด:</label>
                                <input type="range" class="form-control-range" id="lowTemp2" name="lowTemp2"
                                    onInput="$('#rangeval4').html($(this).val())" min="25" max="80" step="1">
                                <span>Current Slider Value:</span>
                                <span id="rangeval4">50
                                    <!-- Default value --></span>

                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิสูงกว่าที่กำหนด:</label>

                                <input type="range" class="form-control-range" id="highTemp2" name="highTemp2"
                                    onInput="$('#rangeval5').html($(this).val())" min="25" max="80" step="1">
                                <span>Current Slider Value:</span>
                                <span id="rangeval5">50
                                    <!-- Default value --></span>

                            </div><br><br><br><br>

                            <div class="col-xs-4">
                                <label>ความชื้นต่ำกว่าที่กำหนด:</label>

                                <input type="range" class="form-control-range" id="lowHumid2" name="lowHumid2"
                                    onInput="$('#rangeval6').html($(this).val())" min="20" max="60" step="1">
                                <span>Current Slider Value:</span>
                                <span id="rangeval6">40
                                    <!-- Default value --></span>

                            </div>

                            <div class="col-xs-4">
                                <label>ความชื้นสูงกว่าที่กำหนด:</label>

                                <input type="range" class="form-control-range" id="highHumid2" name="highHumid2"
                                    onInput="$('#rangeval7').html($(this).val())" min="20" max="60" step="1">
                                <span>Current Slider Value:</span>
                                <span id="rangeval7">40
                                    <!-- Default value --></span>

                            </div><br><br><br><br>
                        </div>
                        <hr width="100%" size="30" color="red">

                        <div class="form-group row">

                            <div class="col-xs-4" style="text-align: center;">
                                <label>
                                    <font color="red"> การบ่มช่วงที่ 3 : ช่วงทำใบแห้ง </font>
                                </label><br><br>
                                <img src="image\999.Jpg" class="img-rounded" alt="ช่วงทำสี" width="150" height="100"
                                    align="Center">
                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิต่ำกว่าที่กำหนด:</label>

                                <input type="range" class="form-control-range" id="lowTemp3" name="lowTemp3"
                                    onInput="$('#rangeval8').html($(this).val())" min="25" max="80" step="1">
                                <span>Current Slider Value:</span>
                                <span id="rangeval8">50
                                    <!-- Default value --></span>

                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิสูงกว่าที่กำหนด:</label>

                                <input type="range" class="form-control-range" id="highTemp3" name="highTemp3"
                                    onInput="$('#rangeval9').html($(this).val())" min="25" max="80" step="1">
                                <span>Current Slider Value:</span>
                                <span id="rangeval9">50
                                    <!-- Default value --></span>

                            </div><br><br><br><br>

                            <div class="col-xs-4">
                                <label>ความชื้นต่ำกว่าที่กำหนด:</label>

                                <input type="range" class="form-control-range" id="lowHumid3" name="lowHumid3"
                                    onInput="$('#rangeval10').html($(this).val())" min="20" max="60" step="1">
                                <span>Current Slider Value:</span>
                                <span id="rangeval10">40
                                    <!-- Default value --></span>

                            </div>

                            <div class="col-xs-4">
                                <label>ความชื้นสูงกว่าที่กำหนด:</label>

                                <input type="range" class="form-control-range" id="highHumid3" name="highHumid3"
                                    onInput="$('#rangeval11').html($(this).val())" min="20" max="60" step="1">
                                <span>Current Slider Value:</span>
                                <span id="rangeval11">40
                                    <!-- Default value --></span>

                            </div><br><br><br><br>
                        </div>
                        <hr width="100%" size="30" color="red">


                        <div class="form-group row">

                            <div class="col-xs-4" style="text-align: center;">
                                <label>
                                    <font color="red"> การบ่มช่วงที่ 4 : ช่วงทำก้านแห้ง </font>
                                </label><br><br>
                                <img src="image\48.Jpg" class="img-rounded" alt="ช่วงทำสี" width="150" height="100"
                                    align="Center">
                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิต่ำกว่าที่กำหนด:</label>

                                <input type="range" class="form-control-range" id="lowTemp4" name="lowTemp4"
                                    onInput="$('#rangeval12').html($(this).val())" min="25" max="80" step="1">
                                <span>Current Slider Value:</span>
                                <span id="rangeval12">50
                                    <!-- Default value --></span>

                            </div>

                            <div class="col-xs-4">
                                <label>อุณหภูมิสูงกว่าที่กำหนด:</label>

                                <input type="range" class="form-control-range" id="highTemp4" name="highTemp4"
                                    onInput="$('#rangeval13').html($(this).val())" min="25" max="80" step="1">
                                <span>Current Slider Value:</span>
                                <span id="rangeval13">50
                                    <!-- Default value --></span>

                            </div><br><br><br><br>

                            <div class="col-xs-4">
                                <label>ความชื้นต่ำกว่าที่กำหนด:</label>

                                <input type="range" class="form-control-range" id="lowHumid4" name="lowHumid4"
                                    onInput="$('#rangeval14').html($(this).val())" min="20" max="60" step="1">
                                <span>Current Slider Value:</span>
                                <span id="rangeval14">40
                                    <!-- Default value --></span>

                            </div>

                            <div class="col-xs-4">
                                <label>ความชื้นสูงกว่าที่กำหนด:</label>

                                <input type="range" class="form-control-range" id="highHumid4" name="highHumid4"
                                    onInput="$('#rangeval15').html($(this).val())" min="20" max="60" step="1">
                                <span>Current Slider Value:</span>
                                <span id="rangeval15">40
                                    <!-- Default value --></span>

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

<script>
    
$(document).ready(function() {

const $valueSpan = $('.valueSpan1');
const $value = $('#customRange1');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan2');
const $value = $('#customRange2');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan3');
const $value = $('#customRange3');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan4');
const $value = $('#customRange4');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan5');
const $value = $('#customRange5');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan6');
const $value = $('#customRange6');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan7');
const $value = $('#customRange7');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan8');
const $value = $('#customRange8');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan9');
const $value = $('#customRange9');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan10');
const $value = $('#customRange10');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan11');
const $value = $('#customRange11');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan12');
const $value = $('#customRange2');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan13');
const $value = $('#customRange14');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan15');
const $value = $('#customRange15');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan16');
const $value = $('#customRange16');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan17');
const $value = $('#customRange17');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan18');
const $value = $('#customRange18');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan19');
const $value = $('#customRange19');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});


</script>
</html>
