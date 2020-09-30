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


</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="home_ad">TOBACCO CURE</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ตั้งค่าโรงบ่ม<span
                            class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="device">Device</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>
                <li><a href="#">ช่วงของการบ่ม</a></li>
                <li><a href="#">ข้อมูลย้อนหลัง</a></li>
                <li><a href="#">กราฟข้อมูล</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <!-- <?php session_start(); 
    if(isset($_SESSION['status'])=='เจ้าของ'){
                            ?>

                            <div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <a class="dropdown" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">

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


        </ul> -->

        </div>
    </nav>





    <div class="container">
        <h3>Right Aligned Navbar</h3>
        <p>The .navbar-right class is used to right-align navigation bar buttons.</p>
    </div>


    <!-- <div class="top-left">Top Left</div> -->
    <!-- css image รูปใหญ่ -->
    <!-- <div class="bg-image"></div> -->


    </div>
</body>

</html>
