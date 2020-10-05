<?php
  $datadb = "testpj";
  $servername = "localhost";
  $username = "root";
  $password = "";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $datadb);

  session_start(); 

  if(isset($_SESSION['status'])=='แอดมิน') {
     header("Location:/");
     }
 
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
                <a class="navbar-brand" href="home_ad">Rong Bom</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index_de">การจัดการอุปกรณ์</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <?php  
    if(isset($_SESSION['status'])=='แอดมิน'){
                            ?>
                    <li class="nav-item dropdown d-none d-xl-inline-block">
                        <a class="dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                            aria-expanded="false">
                            <span class="glyphicon glyphicon-user hidden-xs">
                                <?php echo $_SESSION['name_ad'];?></span> </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <br>
                            <div class="d-flex border-bottom w-100 justify-content-center"
                                style="width:250px;height:160px;text-indent:1.5em;">
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                    <p class="mdi mdi-bookmark-plus-outline mr-0 text-gray">NAME :
                                        <?php echo $_SESSION['name_ad'];?></p>
                                </div>
                                <div
                                    class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                                    <p class="mdi mdi-account-outline mr-0 text-gray">ID ADMIN :
                                        <?php echo $_SESSION['id_admin'];?></p>
                                </div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                    <p class="mdi mdi-alarm-check mr-0 text-gray">STATUS :
                                        <?php echo $_SESSION['status'];?></p>
                                </div>
                                <hr class="my-4">
                                <form action="regis_em">
                            
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

                
    <h3 style="text-align: center;">โรงบ่ม</h3><br>
    <?php 
    if(isset($_SESSION['status'])=='แอดมิน'){
                            ?>

        <div class="container" style="width:500px;height:100px;text-align: center;">
            <div class="panel panel-default">
                <div class="panel-heading">ชื่อผู้ใช้</div>
                <div class="panel-body"><?php echo $_SESSION['name_ad'];?></div>
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
                    <th scope="col" style="text-align: center;">ID DEVICE</th>
                    <th scope="col" style="text-align: center;">KEY</th>
                    <th scope="col" style="text-align: center;">action</th>
                </tr>
            </thead>
            <tfoot>
                <tr class="bg-danger">
                <th scope="col" style="text-align: center;">NUM</th>
                    <th scope="col" style="text-align: center;">ID DEVICE</th>
                    <th scope="col" style="text-align: center;">KEY</th>
                    <th scope="col" style="text-align: center;">action</th>
                </tr>
            </tfoot>

            <tbody>
                <?php 
                 $sql = "SELECT * FROM devices ";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        $no_devi = $row['no_devi'];
                        $id_device = $row['id_device'];
                        $key_de = $row['key_de'];
               
                        if($id_device == 0){
                           $alert = "<div class='alert alert-danger'>
                           <strong>$id_device</strong> No Stock
                           </div>";
                       }else if($id_device >= $id_device){
                           $alert = "<div class='alert alert-warning'>
                           <strong>$id_device</strong> Critical Level
                           </div>";
                       }else {
                           $alert = $id_device;
                       }

                    ?>
                <tr>
                <td style="text-align: center;">
                        <?php echo $no_devi  ?>         
                    </td>
                    <td style="text-align: center;">
                        <?php echo $id_device ?>         
                    </td>
                    <td style="text-align: center;">
                        <?php echo $key_de; ?>
                    </td>
                    <td style="text-align: center;">
                        <a href="#edit<?php echo $no_devi  ;?>" data-toggle="modal">
                            <button type='button' class='btn btn-warning btn-sm' title='แก้ไขข้อมูล'><span
                                    class='glyphicon glyphicon-edit' aria-hidden='true'></span></button>
                        </a>
                        <a href="#delete<?php echo $no_devi  ;?>" data-toggle="modal">
                            <button type='button' class='btn btn-danger btn-sm' title='ลบข้อมูล'><span
                                    class='glyphicon glyphicon-trash' aria-hidden='true'></span></button>
                        </a>
                    </td>
                    <!-- <td>
            <?php echo $alert; ?>
        </td> -->
 
                    <!-- edit Modal -->
                    <div class="modal fade" id="edit<?php echo $no_devi  ; ?>" tabindex="-1" role="dialog"
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
                                        <input type="hidden" name="no_devi" value="<?php echo $no_devi ;?>">
                                            <label>ID DEVICE:</label> 
                                            <input type="text" name="id_device" class="form-control" id="id_device"
                                                value="<?php echo $id_device; ?>" placeholder="ID โรงบ่ม" required>
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small> -->
                                <span class="message"></span>
                                        </div>
                                        <div class="form-group">
                                            <label>KEY:</label>
                                            <input type="text" name="key_de" class="form-control" id="key_de"
                                                value="<?php echo $key_de; ?>" placeholder="ชื่อโรงบ่ม" required>
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
                    <div class="modal fade" id="delete<?php echo $no_devi; ?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">ลบข้อมูลอุปกรณ์</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="" method="GET">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="hidden" name="delete_id" value="<?php echo $no_devi ; ?>">
                                            <div class="alert alert-danger">คุณต้องการลบ <strong> <?php echo $id_device; ?> </strong> หรือไม่?
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
                        $id_device = $_GET['id_device'];
                        $key_de = $_GET['key_de'];
                        $sql = "INSERT INTO devices (id_device,key_de) VALUES ('$id_device','$key_de')";
                        // echo  $sql;
                        if ($conn->query($sql) === TRUE) {
                            
                            if ($conn) {
                                echo '<script>
                                swal({
                                    title: "สร้างผลงานเรียบร้อย",
                                    icon: "success",
                                    button: "ตกลง",
                                    
                                }); 
          </script>';
 
                                echo '<script>window.location.href="index_de"</script>';
                            } 
                            else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }

                     //Update Items
                     if(isset($_GET['edit'])){
                        $id_device = $_GET['id_device'];
                        $key_de = $_GET['key_de'];
                        $no_devi = $_GET['no_devi'];
                        
                      
                        $sql = "UPDATE  devices 
                                SET  id_device='$id_device',
                                     key_de='$key_de'
                                WHERE no_devi=$no_devi";
                        if ($conn->query($sql) === TRUE) {
                            echo '<script>window.location.href="index_de"</script>';
                        } else {
                            echo "Error updating record: " . $conn->error;
                        }
                    }
                    // Delete
                    if(isset($_GET['delete'])){
                        // sql to delete a record
                        $delete_id = $_GET['delete_id'];
                        $sql = "DELETE FROM devices WHERE no_devi   ='$delete_id' ";
                        if ($conn->query($sql) === TRUE) {
                            $sql = "DELETE FROM devices WHERE no_devi  ='$delete_id' ";
                            if ($conn->query($sql) === TRUE) {
                                $sql = "DELETE FROM devices WHERE no_devi ='$delete_id' ";
                                echo '<script>window.location.href="index_de"</script>';
                            } else {
                                echo "Error deleting record: " . $conn->error;
                            }
                        } else {
                            echo "Error deleting record: " . $conn->error;
                        }
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
                    <h4 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลอุปกรณ์</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="" method="GET">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>ID DEVICE:</label>
                            <input type="text" name="id_device" class="form-control" id="id_device" placeholder="ID DEVICE"
                                required>
                        </div>
                        <div class="form-group">
                            <label>KEY:</label>
                            <input type="text" name="key_de" class="form-control" id="key_de" placeholder="KEY"
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

</html>
