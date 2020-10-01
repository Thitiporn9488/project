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
        $(document).ready(function () {
            $('#example').DataTable();
        });

    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>

<body>
    <nav class="navbar navbar-inverse ">
        <div class="container-fluid" style="margin-right:100px;margin-left:80px">
            <div class="navbar-header">
                <a class="navbar-brand" href="home">TOBACCO CURE</a>
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
                <tr>
                    <td style="text-align: center;">

                    </td>
                    <td style="text-align: center;">

                    </td>
                    <td style="text-align: center;">

                    </td>
                    <td style="text-align: center;">

                    </td>
                    <td style="text-align: center;">
                        <a href="#edit" data-toggle="modal">
                            <button type='button' class='btn btn-warning btn-sm' title='แก้ไขข้อมูล'><span
                                    class='glyphicon glyphicon-edit' aria-hidden='true'></span></button>
                        </a>
                        <a href="#delete" data-toggle="modal">
                            <button type='button' class='btn btn-danger btn-sm' title='ลบข้อมูล'><span
                                    class='glyphicon glyphicon-trash' aria-hidden='true'></span></button>
                        </a>
                    </td>





                </tr>



            </tbody>
        </table>
    </div>
    <!--Add Item Modal -->
    <div id="exampleModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <form method="post" class="form-horizontal" role="form">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">กระบวนการบ่ม</h4>
                    </div>
                    <div class="modal-body">

                    <div class="form-group">
                            <label class="control-label col-sm-2" >ID กระบวนการบ่ม:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="id_pro" name="id_pro"
                                    placeholder="ID กระบวนการบ่ม" autocomplete="off" autofocus required> </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" >ชื่อการบ่ม:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="name_pro" name="name_pro"
                                    placeholder="ชื่อการบ่ม" autocomplete="off" autofocus required> </div>
                            <label class="control-label col-sm-2" >โรงบ่ม:</label>
                            <div class="col-sm-4">
                            <select name="rbom" id="rbom" class="form-control ">
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
                        </select> </div>
                        </div><br>

                        <div class="form-group">
                            <label class="control-label col-sm-2" >การบ่มช่วงแรก:</label>
                            <div class="col-sm-4">
                            <select name="stap_1" id="stap_1" class="form-control ">
                            <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                            <option value="ช่วงทำสี">ช่วงทำสี</option>
                            <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                            <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                            <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                        </select> </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" >เริ่มกระบวนการบ่ม:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="sdate_1" name="sdate_1"
                                    placeholder="เริ่มกระบวนการบ่ม" autocomplete="off" autofocus required> </div>
                            <label class="control-label col-sm-2" >สิ้นสุดการบ่ม:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="edate_1" name="edate_1"
                                    placeholder="สิ้นสุดการบ่ม" autocomplete="off" required> </div>
                        </div><br>


                        <div class="form-group">
                            <label class="control-label col-sm-2" >การบ่มช่วงที่ 2:</label>
                            <div class="col-sm-4">
                            <select name="stap_2" id="stap_2" class="form-control ">
                            <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                            <option value="ช่วงทำสี">ช่วงทำสี</option>
                            <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                            <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                            <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                        </select></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" >เริ่มกระบวนการบ่ม:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="sdate_2" name="sdate_2"
                                    placeholder="เริ่มกระบวนการบ่ม" autocomplete="off" required> </div>
                            <label class="control-label col-sm-2" for="item_code">สิ้นสุดการบ่ม:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="edate_2" name="edate_2"
                                    placeholder="สิ้นสุดการบ่ม" autocomplete="off" required> </div>
                        </div><br>

                        <div class="form-group">
                            <label class="control-label col-sm-2">การบ่มช่วงที่ 3:</label>
                            <div class="col-sm-4">
                            <select name="stap_3" id="stap_3" class="form-control ">
                            <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                            <option value="ช่วงทำสี">ช่วงทำสี</option>
                            <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                            <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                            <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                        </select> </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" ">เริ่มกระบวนการบ่ม:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="sdate_3" name="sdate_3"
                                    placeholder="เริ่มกระบวนการบ่ม" autocomplete="off" required> </div>
                                    <label class="control-label col-sm-2" >สิ้นสุดการบ่ม:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="edate_3" name="edate_3"
                                    placeholder="สิ้นสุดการบ่ม" autocomplete="off" required> </div>
                        </div><br>

                        <div class="form-group">
                            <label class="control-label col-sm-2" >การบ่มช่วงที่ 4:</label>
                            <div class="col-sm-4">
                            <select name="stap_4" id="stap_4" class="form-control ">
                            <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                            <option value="ช่วงทำสี">ช่วงทำสี</option>
                            <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                            <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                            <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                        </select> </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" >เริ่มกระบวนการบ่ม:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="sdate_4" name="sdate_4"
                                    placeholder="เริ่มกระบวนการบ่ม" autocomplete="off" required> </div>
                                    <label class="control-label col-sm-2" >สิ้นสุดการบ่ม:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="edate_4" name="edate_4"
                                    placeholder="สิ้นสุดการบ่ม" autocomplete="off" required> </div>
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



</html>
