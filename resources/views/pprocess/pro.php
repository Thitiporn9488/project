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






    <script type="text/javascript">
        // <!--  ปฏิทิน -->
        $(function () {
            var startDateTextBox = $('#sdate_1');
            var endDateTextBox = $('#edate_1');

            startDateTextBox.datepicker({
                dateFormat: 'yy-mm-dd',
                onClose: function (dateText, inst) {
                    if (endDateTextBox.val() != '') {
                        var testStartDate = startDateTextBox.datepicker('getDate');
                        var testEndDate = endDateTextBox.datepicker('getDate');
                        if (testStartDate > testEndDate)
                            endDateTextBox.datepicker('setDate', testStartDate);
                    }
                },
                onSelect: function (selectedDateTime) {
                    endDateTextBox.datepicker('option', 'minDate', startDateTextBox.datepicker(
                        'getDate'));
                }
            });
            endDateTextBox.datepicker({
                dateFormat: 'yy-mm-dd',
                onClose: function (dateText, inst) {
                    if (startDateTextBox.val() != '') {
                        var testStartDate = startDateTextBox.datepicker('getDate');
                        var testEndDate = endDateTextBox.datepicker('getDate');
                        if (testStartDate > testEndDate)
                            startDateTextBox.datepicker('setDate', testEndDate);
                    }
                },
                onSelect: function (selectedDateTime) {
                    startDateTextBox.datepicker('option', 'maxDate', endDateTextBox.datepicker(
                        'getDate'));
                }
            });

        });

        $(function () {
            var startDateTextBox = $('#sdate_2');
            var endDateTextBox = $('#edate_2');

            startDateTextBox.datepicker({
                dateFormat: 'yy-mm-dd',
                onClose: function (dateText, inst) {
                    if (endDateTextBox.val() != '') {
                        var testStartDate = startDateTextBox.datepicker('getDate');
                        var testEndDate = endDateTextBox.datepicker('getDate');
                        if (testStartDate > testEndDate)
                            endDateTextBox.datepicker('setDate', testStartDate);
                    }
                },
                onSelect: function (selectedDateTime) {
                    endDateTextBox.datepicker('option', 'minDate', startDateTextBox.datepicker(
                        'getDate'));
                }
            });
            endDateTextBox.datepicker({
                dateFormat: 'yy-mm-dd',
                onClose: function (dateText, inst) {
                    if (startDateTextBox.val() != '') {
                        var testStartDate = startDateTextBox.datepicker('getDate');
                        var testEndDate = endDateTextBox.datepicker('getDate');
                        if (testStartDate > testEndDate)
                            startDateTextBox.datepicker('setDate', testEndDate);
                    }
                },
                onSelect: function (selectedDateTime) {
                    startDateTextBox.datepicker('option', 'maxDate', endDateTextBox.datepicker(
                        'getDate'));
                }
            });

        });


        $(function () {
            var startDateTextBox = $('#sdate_3');
            var endDateTextBox = $('#edate_3');

            startDateTextBox.datepicker({
                dateFormat: 'yy-mm-dd',
                onClose: function (dateText, inst) {
                    if (endDateTextBox.val() != '') {
                        var testStartDate = startDateTextBox.datepicker('getDate');
                        var testEndDate = endDateTextBox.datepicker('getDate');
                        if (testStartDate > testEndDate)
                            endDateTextBox.datepicker('setDate', testStartDate);
                    }
                },
                onSelect: function (selectedDateTime) {
                    endDateTextBox.datepicker('option', 'minDate', startDateTextBox.datepicker(
                        'getDate'));
                }
            });
            endDateTextBox.datepicker({
                dateFormat: 'yy-mm-dd',
                onClose: function (dateText, inst) {
                    if (startDateTextBox.val() != '') {
                        var testStartDate = startDateTextBox.datepicker('getDate');
                        var testEndDate = endDateTextBox.datepicker('getDate');
                        if (testStartDate > testEndDate)
                            startDateTextBox.datepicker('setDate', testEndDate);
                    }
                },
                onSelect: function (selectedDateTime) {
                    startDateTextBox.datepicker('option', 'maxDate', endDateTextBox.datepicker(
                        'getDate'));
                }
            });

        });


        $(function () {
            var startDateTextBox = $('#sdate_4');
            var endDateTextBox = $('#edate_4');

            startDateTextBox.datepicker({
                dateFormat: 'yy-mm-dd',
                onClose: function (dateText, inst) {
                    if (endDateTextBox.val() != '') {
                        var testStartDate = startDateTextBox.datepicker('getDate');
                        var testEndDate = endDateTextBox.datepicker('getDate');
                        if (testStartDate > testEndDate)
                            endDateTextBox.datepicker('setDate', testStartDate);
                    }
                },
                onSelect: function (selectedDateTime) {
                    endDateTextBox.datepicker('option', 'minDate', startDateTextBox.datepicker(
                        'getDate'));
                }
            });
            endDateTextBox.datepicker({
                dateFormat: 'yy-mm-dd',
                onClose: function (dateText, inst) {
                    if (startDateTextBox.val() != '') {
                        var testStartDate = startDateTextBox.datepicker('getDate');
                        var testEndDate = endDateTextBox.datepicker('getDate');
                        if (testStartDate > testEndDate)
                            startDateTextBox.datepicker('setDate', testEndDate);
                    }
                },
                onSelect: function (selectedDateTime) {
                    startDateTextBox.datepicker('option', 'maxDate', endDateTextBox.datepicker(
                        'getDate'));
                }
            });

        });
        // <!-- จบปฏิทิน -->

    </script>

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

    <h3 style="text-align: center;">การจัดการกระบวนการบ่ม</h3><br><br>
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
    <br>  <br>

    <div class="container">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><span
                class='glyphicon glyphicon-plus' aria-hidden='true'></span>
            เพิ่มข้อมูลกระบวนการบ่ม
        </button> <br> <br><br>

                <?php 
             $farmer = (isset($_SESSION['id_farmer'])) ? $_SESSION['id_farmer'] : '';
             $sql = "SELECT * FROM pprocessb,users where pprocessb.id_farmer=users.id_farmer and pprocessb.id_farmer='$farmer' ";
              $result = $conn->query($sql) ;
              while($row = $result->fetch_assoc()) {
                 echo '
                 <div class="panel panel-default">
                 <div class="panel-heading">
                     <h3 class="panel-title">

                     <form>
                     <div class="form-group row"><br>

                     <div class="col-xs-3">
                         <label>ID กระบวนการบ่ม:</label><br><br>
                         <input class="form-control" id="id_pro" name="id_pro" type="text" value="'.$row['id_pro'].'"'.$row['id_pro'].' readonly>
                     </div>

                     <div class="col-xs-3">
                         <label>ชื่อการบ่ม:</label><br><br>
                         <input class="form-control" id="name_pro" name="name_pro" type="text" value="'.$row['name_pro'].'"'.$row['name_pro'].' readonly>
                     </div>

                     <div class="col-xs-3">
                         <label>โรงบ่ม:</label><br><br>
                         <input class="form-control" id="rbom" name="rbom" type="text" value="'.$row['rbom'].'"'.$row['rbom'].' readonly>
                     </div>

                     <a href="#edit'.$row['no_pro'].'"'.$row['no_pro'].'" data-toggle="modal" style="margin-left:160px">
                            <button type="button" class="btn btn-info btn-sm" title="แก้ไขข้อมูล"><span
                                    class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                        </a>

                 <a href="#delete'.$row['no_pro'].'"'.$row['no_pro'].'" data-toggle="modal" tyle="text-align:right;">
                     <button type="button" class="btn btn-danger btn-sm" title="ลบข้อมูล"><span
                             class="glyphicon glyphicon-trash" ></span></button>
                 </a>

                     </div>
                   

                            
                         </form>
                     </h3>
                 </div>
                 
                 <div class="panel-body">
     
                     <form class="form-inline" action="">
                         <div class="form-group">
                             <label >การบ่มช่วงแรก:</label>
                             <input type="text" class="form-control"  name="stap_1" value="'.$row['stap_1'].'"'.$row['stap_1'].'  readonly>  
                         </div>
                         <div class="form-group" style="margin-left:80px">
                             <label for="sdate_1">วันที่เริ่มการบ่ม:</label>
                             <input type="text" class="form-control"   name="sdate_1" value="'.$row['sdate_1'].'"'.$row['sdate_1'].'  readonly>
                         </div>
                         <div class="form-group" style="margin-left:80px">
                             <label for="edate_1">วันที่สิ้นสุดการบ่ม:</label>
                             <input type="text" class="form-control" name="edate_1" value="'.$row['edate_1'].'"'.$row['edate_1'].'  readonly> 
                         </div>
                     </form><br>
     
                     <form class="form-inline" action="">
                         <div class="form-group">
                             <label>การบ่มช่วงที่ 2:</label>
                             <input type="text" class="form-control" name="stap_2" value="'.$row['stap_2'].'"'.$row['stap_2'].'  readonly>
                         </div>
                         <div class="form-group" style="margin-left:80px">
                             <label for="sdate_2">วันที่เริ่มการบ่ม:</label>
                             <input type="text" class="form-control"name="sdate_2" value="'.$row['sdate_2'].'"'.$row['sdate_2'].'  readonly>
                         </div>
                         <div class="form-group" style="margin-left:80px">
                             <label for="edate_2">วันที่สิ้นสุดการบ่ม:</label>
                             <input type="text" class="form-control" name="edate_2" value="'.$row['edate_2'].'"'.$row['edate_2'].'  readonly>
                         </div>
                     </form><br>
     
                     <form class="form-inline" action="">
                         <div class="form-group">
                             <label >การบ่มช่วงที่ 3:</label>
                             <input type="text" class="form-control"name="stap_3" value="'.$row['stap_3'].'"'.$row['stap_3'].'  readonly>
                         </div>
                         <div class="form-group" style="margin-left:80px">
                             <label for="sdate_3">วันที่เริ่มการบ่ม:</label>
                             <input type="text" class="form-control" name="sdate_3" value="'.$row['sdate_3'].'"'.$row['sdate_3'].' readonly>
                         </div>
                         <div class="form-group" style="margin-left:80px">
                             <label for="edate_3">วันที่สิ้นสุดการบ่ม:</label>
                             <input type="text" class="form-control"  name="edate_3" value="'.$row['edate_3'].'"'.$row['edate_3'].'  readonly>
                         </div>
                     </form><br>
     
                     <form class="form-inline" action="">
                         <div class="form-group">
                             <label >การบ่มช่วงที่ 4:</label>
                             <input type="text" class="form-control" name="stap_4" value="'.$row['stap_4'].'"'.$row['stap_4'].'  readonly>
                         </div>
                         <div class="form-group" style="margin-left:80px">
                             <label for="sdate_4">วันที่เริ่มการบ่ม:</label>
                             <input type="text" class="form-control" name="sdate_4" value="'.$row['sdate_4'].'"'.$row['sdate_4'].'  readonly>
                         </div>
                         <div class="form-group" style="margin-left:80px">
                             <label for="pwd">วันที่สิ้นสุดการบ่ม:</label>
                             <input type="text" class="form-control" name="edate_4" value="'.$row['edate_4'].'"'.$row['edate_4'].'  readonly>
                         </div><br>
                     </form>
                 </div>
                 <div class="panel-footer">
                 </div>
             </div><br>

             <!-- edit Modal -->
             <div class="modal fade" id="edit'.$row['no_pro'].'"'.$row['no_pro'].'" role="dialog">
                 <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                         <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                             <h4 class="modal-title">แก้ไขข้อมูลกระบานการบ่ม</h4>
                         </div>

                         <form method="GET">

                         <div class="modal-body">

                         <input class="form-control" id="no_pro" value="'.$row['no_pro'].'"'.$row['no_pro'].'"
                         name="no_pro" type="hidden">

                             <div class="form-group row">
                         
                     <div class="col-xs-4">
                         <label>ID กระบวนการบ่ม:</label>
                         <input class="form-control" id="id_pro" value="'.$row['id_pro'].'"'.$row['id_pro'].'"
                         name="id_pro" type="text">
                     </div>

                     <div class="col-xs-4">
                         <label>ชื่อการบ่ม</label>
                         <input class="form-control" id="name_pro" name="name_pro" value="'.$row['name_pro'].'"'.$row['name_pro'].'"
                             type="text">
                     </div>

                     <div class="col-xs-4">
                         <label>โรงบ่ม</label>
                         <input class="form-control" id="rbom" name="rbom" value="'.$row['rbom'].'"'.$row['rbom'].'"
                             type="text">
                     </div><br><br><br><br>

                     <div class="col-xs-4">
                         <label>การบ่มช่วงแรก</label>
                         <input class="form-control" name="stap_1" id="stap_1"
                         value="'.$row['stap_1'].'"'.$row['stap_1'].'" type="text">
                     </div>

                     <div class="col-xs-4">
                         <label>วันที่เริ่มการบ่ม</label>
                         <input class="form-control" name="sdate_1" name="sdate_1" value="'.$row['sdate_1'].'"'.$row['sdate_1'].'>
                     </div>

                     <div class="col-xs-4">
                         <label>วันที่สิ้นสุดการบ่ม</label>
                         <input class="form-control" name="edate_1"
                         value="'.$row['edate_1'].'"'.$row['edate_1'].' type="text">
                     </div><br><br><br><br>

                     <div class="col-xs-4">
                         <label>การบ่มช่วงที่ 2:</label>
                         <input class="form-control" name="stap_2" id="stap_2"
                         value="'.$row['stap_2'].'"'.$row['stap_2'].'" type="text">
                     </div>

                     <div class="col-xs-4">
                         <label>วันที่เริ่มการบ่ม:</label>
                         <input class="form-control" name="sdate_2"
                         value="'.$row['sdate_2'].'"'.$row['sdate_2'].'" type="text">
                     </div>

                     <div class="col-xs-4">
                         <label>วันที่สิ้นสุดการบ่ม:</label>
                         <input class="form-control"  name="edate_2"
                         value="'.$row['edate_2'].'"'.$row['edate_2'].'" type="text">
                     </div><br><br><br><br>

                     <div class="col-xs-4">
                         <label>การบ่มช่วงที่ 3:</label>
                         <input class="form-control" name="stap_3" id="stap_3"
                         value="'.$row['stap_3'].'"'.$row['stap_3'].'" type="text">
                     </div>

                     <div class="col-xs-4">
                         <label>วันที่เริ่มการบ่ม:</label>
                         <input class="form-control" name="sdate_3"
                         value="'.$row['sdate_3'].'"'.$row['sdate_3'].'" type="text">
                     </div>

                     <div class="col-xs-4">
                         <label>วันที่สิ้นสุดการบ่ม:</label>
                         <input class="form-control" name="edate_3"
                         value="'.$row['edate_3'].'"'.$row['edate_3'].' type="text">
                     </div><br><br><br><br>

                     <div class="col-xs-4">
                         <label>การบ่มช่วงที่ 4:</label>
                         <input class="form-control" name="stap_4" id="stap_4"
                         value="'.$row['stap_4'].'"'.$row['stap_4'].'" type="text">
                     </div>

                     <div class="col-xs-4">
                         <label>วันที่เริ่มการบ่ม:</label>
                         <input class="form-control"  name="sdate_4"
                         value="'.$row['sdate_4'].'"'.$row['sdate_4'].' type="text">
                     </div>

                     <div class="col-xs-4">
                         <label>วันที่สิ้นสุดการบ่ม:</label>
                         <input class="form-control"  name="edate_4"
                         value="'.$row['edate_4'].'"'.$row['edate_4'].' type="text">
                     </div>
  
                         </div>

                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                             <button type="submit" class="btn btn-primary" name="edit" data-target="#edit">
                                 Update data </button>
                         </div>
                         </form>
                     </div>
                 </div>
             </div>
</div>

<!-- Delete Modal -->
  <div class="modal fade" id="delete'.$row['no_pro'].'"'.$row['no_pro'].'" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ลบข้อมูลกระบวนการบ่ม</h4>
        </div>
        <form method="GET">
        <div class="modal-body">

        <input type="hidden" name="delete_id" value="'.$row['no_pro'].'"'.$row['no_pro'].'">
        <div class="alert alert-danger">คุณต้องการลบ
        <a href="#" class="alert-link">'.$row['name_pro'].'</a> หรือไม่? 
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
                $id_pro = $_GET['id_pro'];
                $name_pro = $_GET['name_pro'];
                $rbom = $_GET['rbom'];
                $stap_1 = $_GET['stap_1'];
                $sdate_1 = $_GET['sdate_1'];
                $edate_1 = $_GET['edate_1'];
                $stap_2 = $_GET['stap_2'];
                $sdate_2 = $_GET['sdate_2'];
                $edate_2 = $_GET['edate_2'];
                $stap_3 = $_GET['stap_3'];
                $sdate_3 = $_GET['sdate_3'];
                $edate_3 = $_GET['edate_3'];
                $stap_4 = $_GET['stap_4'];
                $sdate_4 = $_GET['sdate_4'];
                $edate_4 = $_GET['edate_4'];
             
                $farmer = (isset($_SESSION['id_farmer'])) ? $_SESSION['id_farmer'] : '';
                $sql = "INSERT INTO pprocessb (id_pro,name_pro,rbom,stap_1,sdate_1,edate_1,stap_2,sdate_2,edate_2,stap_3,sdate_3,edate_3,stap_4,sdate_4,edate_4,id_farmer)  
                VALUES ('$id_pro','$name_pro','$rbom','$stap_1','$sdate_1','$edate_1','$stap_2','$sdate_2','$edate_2','$stap_3','$sdate_3','$edate_3','$stap_4','$sdate_4','$edate_4','$farmer') ";
                if ($conn->query($sql) === TRUE) {
                    if ($conn) {
                        echo  '<script>
                        setTimeout(function() {
                            swal({
                                title: "ลบข้อมูลเรียบร้อยแล้ว",
                                icon: "success",
                              });
                        }, function() {
                            window.location.href="pro";
                     }, );
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
                $no_pro = $_GET['no_pro'];
                $id_pro = $_GET['id_pro'];
                $name_pro = $_GET['name_pro'];
                $rbom = $_GET['rbom'];
                $stap_1 = $_GET['stap_1'];
                $sdate_1 = $_GET['sdate_1'];
                $edate_1 = $_GET['edate_1'];
                $stap_2 = $_GET['stap_2'];
                $sdate_2 = $_GET['sdate_2'];
                $edate_2 = $_GET['edate_2'];
                $stap_3 = $_GET['stap_3'];
                $sdate_3 = $_GET['sdate_3'];
                $edate_3 = $_GET['edate_3'];
                $stap_4 = $_GET['stap_4'];
                $sdate_4 = $_GET['sdate_4'];
                $edate_4 = $_GET['edate_4'];
            
                $sql = "UPDATE  pprocessb 
                        SET    no_pro='$no_pro',
                        id_pro='$id_pro',
                        name_pro='$name_pro',
                        rbom='$rbom',
                        stap_1='$stap_1',
                        sdate_1='$sdate_1',
                        edate_1='$edate_1',
                        stap_2='$stap_2',
                        sdate_2='$sdate_2',
                        edate_2='$edate_2',
                        stap_3='$stap_3',
                        sdate_3='$sdate_3',
                        edate_3='$edate_3',
                        stap_4='$stap_4',
                        sdate_4='$sdate_4',
                        edate_4='$edate_4'

                        WHERE no_pro ='$no_pro'";

                       
                if ($conn->query($sql) === TRUE) {
                    echo  '<script>
                    setTimeout(function() {
                        swal({
                            title: "แก้ไขข้อมูลเรียบร้อยแล้ว",
                            icon: "success",
                          });
                    }, function() {
                        window.location.href="pro";
                 }, 1);
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
                        swal({
                            title: "Good job!",
                            text: "You clicked the button!",
                            icon: "success",
                            timer: ""
                          });
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
                                <label>ID กระบวนการบ่ม:</label>
                                <input class="form-control" id="id_pro" name="id_pro" type="text"
                                    placeholder="ID กระบวนการบ่ม" required>
                            </div>

                            <div class="col-xs-4">
                                <label>ชื่อการบ่ม</label>
                                <input class="form-control" id="name_pro" name="name_pro" placeholder="ชื่อการบ่ม"
                                    type="text" required>
                            </div>

                            <div class="col-xs-4">
                                <label>เลือกโรงบ่ม</label>
                                <select class="form-control" name="rbom" id="rbom" required >
                                <option value="" disabled selected>เลือกโรงบ่ม</option>
                                <?php
                            $farmer = (isset($_SESSION['id_farmer'])) ? $_SESSION['id_farmer'] : '';
                            $sql = "SELECT * FROM incubs,users where incubs.id_farmer=users.id_farmer and incubs.id_farmer='$farmer'";
                             $result = $conn->query($sql);
                                 while($row = $result->fetch_assoc()) {
                                   $name_in = $row['name_in'];
                            ?>
                                    <option value='<?php echo $name_in ?>'><?php echo $name_in?></option>
                                    <?php } ?>
                                </select>
                            </div><br><br><br><br>

                            <div class="col-xs-4">
                                <label>การบ่มช่วงแรก</label>
                                <select class="form-control" name="stap_1" id="stap_1" required>
                                    <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                                    <option value="ช่วงทำสี">ช่วงทำสี</option>
                                    <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                                    <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                                    <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                                </select>
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่เริ่มการบ่ม</label>
                                <input class="form-control" id="sdate_1" name="sdate_1"
                                    placeholder="คลิ๊กเพื่อเลือกวันที่เริ่มกระบวนการบ่ม" type="text" required>
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่สิ้นสุดการบ่ม</label>
                                <input class="form-control" id="edate_1" name="edate_1"
                                    placeholder="คลิ๊กเพื่อเลือกวันที่สิ้นสุดกระบวนการการบ่ม" type="text" required>
                            </div><br><br><br><br>

                            <div class="col-xs-4">
                                <label>การบ่มช่วงที่ 2:</label>
                                <select class="form-control" name="stap_2" id="stap_2" required>
                                    <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                                    <option value="ช่วงทำสี">ช่วงทำสี</option>
                                    <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                                    <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                                    <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                                </select>
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่เริ่มการบ่ม:</label>
                                <input class="form-control" id="sdate_2" name="sdate_2"
                                    placeholder="คลิ๊กเพื่อเลือกวันที่เริ่มกระบวนการบ่ม" type="text" required>
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่สิ้นสุดการบ่ม:</label>
                                <input class="form-control" id="edate_2" name="edate_2"
                                    placeholder="คลิ๊กเพื่อเลือกวันที่สิ้นสุดกระบวนการการบ่ม"type="text" required>
                            </div><br><br><br><br>

                            <div class="col-xs-4">
                                <label>การบ่มช่วงที่ 3:</label>
                                <select class="form-control" name="stap_3" id="stap_3" required>
                                    <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                                    <option value="ช่วงทำสี">ช่วงทำสี</option>
                                    <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                                    <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                                    <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                                </select>
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่เริ่มการบ่ม:</label>
                                <input class="form-control" id="sdate_3" name="sdate_3"
                                    placeholder="คลิ๊กเพื่อเลือกวันที่เริ่มกระบวนการบ่ม" type="text" required>
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่สิ้นสุดการบ่ม:</label>
                                <input class="form-control" id="edate_3" name="edate_3"
                                    placeholder="คลิ๊กเพื่อเลือกวันที่สิ้นสุดกระบวนการการบ่ม"  type="text" required>
                            </div><br><br><br><br>

                            <div class="col-xs-4">
                                <label>การบ่มช่วงที่ 4:</label>
                                <select class="form-control" name="stap_4" id="stap_4" required>
                                    <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                                    <option value="ช่วงทำสี">ช่วงทำสี</option>
                                    <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                                    <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                                    <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                                </select>
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่เริ่มการบ่ม:</label>
                                <input class="form-control" id="sdate_4" name="sdate_4"
                                    placeholder="คลิ๊กเพื่อเลือกวันที่เริ่มกระบวนการบ่ม" type="text" required>
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่สิ้นสุดการบ่ม:</label>
                                <input class="form-control" id="edate_4" name="edate_4"
                                    placeholder="คลิ๊กเพื่อเลือกวันที่สิ้นสุดกระบวนการการบ่ม" type="text" required>
                            </div>

                  
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

$(".save").on("submit", function(e) {
        swal("Good job!", "You clicked the button!", "success");
    });



</script>

</html>
