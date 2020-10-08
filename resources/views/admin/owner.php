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
    <title>home</title>

    <!-- <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}"> -->
    <!-- ส่วนหัว -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
      <!-- data atble -->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });

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
                <a class="navbar-brand" href="home_ad">Rong Bom</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index_de">การจัดการอุปกรณ์</a></li>
                    <li><a href="owner">เจ้าของ</a></li>
                    <li><a href="employ">ลูกจ้าง</a></li>
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
                                style="width:250px;height:130px;text-indent:1.5em;">
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

    <div class="container">

    <table id="example" class="table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr class="bg-danger">
                    <th scope="col" style="text-align: center;">ชื่อผู้ใช้</th>
                    <th scope="col" style="text-align: center;">รหัสชาวไร่</th>
                    <th scope="col" style="text-align: center;">เขต-กลุ่ม</th>
                    <th scope="col" style="text-align: center;">Username</th>
                    <th scope="col" style="text-align: center;">สถานะ</th>
                </tr>
            </thead>
            <tfoot>
            <tr class="bg-danger">
                    <th scope="col" style="text-align: center;">ชื่อผู้ใช้</th>
                    <th scope="col" style="text-align: center;">รหัสชาวไร่</th>
                    <th scope="col" style="text-align: center;">เขต-กลุ่ม</th>
                    <th scope="col" style="text-align: center;">Username</th>
                    <th scope="col" style="text-align: center;">สถานะ</th>
                </tr>
            </tfoot>
            <tbody>
            <?php 
                 $sql = "SELECT * FROM users ";
                  $result = $conn->query($sql);
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        $name_user = $row['name_user'];
                        $id_farmer = $row['id_farmer'];
                        $group_farmer = $row['group_farmer'];
                        $username = $row['username'];
                        $status = $row['status'];
                  
                    ?>
                <tr>
                <td style="text-align: center;">
                        <?php echo $name_user ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo $id_farmer ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo $group_farmer ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo $username ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo $status ?>
                    </td>
                </tr>
            </tbody>
                      <?php } ?>
        </table>
                    


    </div>

    </div>
</body>

</html>
