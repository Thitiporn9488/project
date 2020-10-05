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
        if(isset($_SESSION['status'])=='ลูกจ้าง'){
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

    <!-- <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}"> -->
    <!-- ส่วนหัว -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- ส่วนกราฟ -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-database.js"></script>

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
                            
                                </form>
                            </div>
                        </div>
                    </li>

                    
                <?php }
                            // ลูกจ้าง
                            else if(isset($_SESSION['status'])=='ลูกจ้าง'){
                            ?>
                      <li class="nav-item dropdown d-none d-xl-inline-block">
                        <a class="dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                            aria-expanded="false">
                            <span class="glyphicon glyphicon-user hidden-xs"> <?php echo $_SESSION['name_emp'];?></span>  </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                aria-labelledby="UserDropdown"  ><br>
                                    <div class="d-flex border-bottom w-100 justify-content-center" style="width:250px;height:160px;text-indent:1.5em;">
                                        <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                            <p class="mdi mdi-bookmark-plus-outline mr-0 text-gray">NAME : <?php echo $_SESSION['name_emp'];?></p>
                                        </div>
                                        <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                            <p class="mdi mdi-alarm-check mr-0 text-gray">STATUS : <?php echo $_SESSION['status'];?></p>
                                        </div>
                                        <hr class="my-4">
                                                                             
                                    </div>
                            </div>
                    </li>
                    
                    <?php } ?>
                    <li><a href="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav><br>
    
<div>

<!-- drop down โรงบ่ม -->
    <div class="form-group row" style="margin-right:100px;margin-left:200px">
                    <label class="control-label col-sm-2" >เลือกโรงบ่ม:</label>
                    <div class="col-md-3">
                        <select name="status" id="" class="form-control">
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
                    </div>
                </div> <br>
                <!-- จบ -->

 
    <?php
        define("DB_SERVER", "localhost");
        define("DB_USERNAME", "root");
        define("DB_PASSWORD", "");
        define("DB_DATABASE", "testpj");

        $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        $result = mysqli_query($conn, "SELECT lowTemp, highTemp, lowHumid, highHumid FROM conditions");
 
        $data = array();
        while($row = mysqli_fetch_assoc($result)){
            array_push($data, $row);
        }
        // echo json_encode($data, true);
    ?>



    <div class="contain"  style="position:relative;width:90%;left:50px">
        <div>
            <h1>LogS161</h1><br>
        </div display: inline;>
        <div style="float:left;width:600px;height:500px">
            <canvas id="tempChart"></canvas>
        </div>
        <div style="float:right;width:600px;height:100px">
            <canvas id="humChart"></canvas>
            </div>
    </div>
    
    <script>
    
        const firebaseConfig = {
            apiKey: "AIzaSyBU_2EzzqX8jAhKmLkfxguCSENHLDgHXiM",
            authDomain: "testdb-29bea3.firebaseapp.com",
            databaseURL: "https://testdb-29bea3.firebaseio.com",
            projectId: "testdb-29bea3",
            storageBucket: "testdb-29bea3.appspot.com",
            messagingSenderId: "781525089319",
            appId: "1:781525089319:web:c8a40559939adfb253e202",
            measurementId: "G-MXQ4FRTZFK"
        };
        firebase.initializeApp(firebaseConfig);

        let ref = firebase.database().ref('logS161');
        ref.on("child_added", getData)
            
        let humArr = [];
        let tempArr = [];
        let timeArr = [];
        let idArr = [];
            
        async function getData(snapshot) {
            let temp = snapshot.val().Temperature
            tempArr.push(temp)
            let time = snapshot.val().Time
            timeArr.push(time)
            let humid = snapshot.val().Humidity
            humArr.push(humid)
            let id = snapshot.val().ID
            idArr.push(id)

            await tempChrt();
            await humChrt();
            await alertData(temp, humid);
        }
            
        function tempChrt(){
            let ctx1 = document.getElementById('tempChart').getContext('2d');
            let chartConfig = new Chart(ctx1, {
                type: 'line',
                data: {
                    labels: timeArr,
                    datasets: [{
                        label: 'Temprature',
                        data: tempArr,
                        backgroundColor: "rgba(255, 99, 132, 0.2)",
                        borderColor: "rgba(255, 99, 132, 1)",
                        borderWidth: 1
                    }]
                },
                options:{
                    responsive: true,
                    legend: {
                        display: true,
                        labels:{
                            fontColor :"#333",
                            fontSize:12,
                        },
                        position: 'bottom' 
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true,
                                max:100,
                                min:0,
                                stepSize:10
                            }
                        }]
                    }
                }
            });
        }

        function humChrt(){
            let ctx2 = document.getElementById('humChart').getContext('2d');
            let chartConfig = new Chart(ctx2, {
                type: 'line',
                data: {
                    labels: timeArr,
                    datasets: [{
                        label: 'Humidity',
                        data: humArr,
                        backgroundColor: "rgba(54, 162, 235, 0.2)",
                        borderColor: "rgba(54, 162, 235, 1)",
                        borderWidth: 1
                    }]
                },
                options:{
                    responsive: true,
                    legend: {
                        display: true,
                        labels:{
                            fontColor :"#333",
                            fontSize:12,
                        },
                        position: 'bottom' 
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true,
                                max:100,
                                min:0,
                                stepSize:10
                            }
                        }]
                    }
                }
            });
        }

        function alertData(temp, humid){

            let dataArr = <?php echo json_encode($data) ?>;
            let lT = dataArr[0].lowTemp;
            let hT = dataArr[0].highTemp;
            let lH = dataArr[0].lowHumid;
            let hH = dataArr[0].highHumid;

            console.log('--------------------------')
            console.log(lT, hT, lH, hH);
            console.log(temp, humid)

            if(temp < lT && humid < lH){
                Swal.fire({
                    title: 'อุณหภูมิต่ำกว่าที่กำหนด Temperature: ' + temp.toFixed(2) + '&deg;C' + '\n' + 'ความชื้นต่ำกว่าที่กำหนด Humidity: ' + humid.toFixed(2) + '%',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                })
            }

            else if(temp > hT && humid > hH){
                Swal.fire({
                    title: 'อุณหภูมิสูงกว่าที่กำหนด Temperature: ' + temp.toFixed(2) + '&deg;C' + '\n' + 'ความชื้นสูงกว่าที่กำหนด Humidity: ' + humid.toFixed(2) + '%',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                })
            }

            else if(temp < lT && humid > hH){
                Swal.fire({
                    title: 'อุณหภูมิสูงกว่าที่กำหนด Temperature: ' + temp.toFixed(2) + '&deg;C' + '\n' + 'ความชื้นสูงกว่าที่กำหนด Humidity: ' + humid.toFixed(2) + '%',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                })
            }

            else if(temp > hT && humid < lH){
                Swal.fire({
                    title: 'อุณหภูมิสูงกว่าที่กำหนด Temperature: ' + temp.toFixed(2) + '&deg;C' + '\n' + 'ความชื้นสูงกว่าที่กำหนด Humidity: ' + humid.toFixed(2) + '%',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                })
            }

            else if(temp < lT){
                Swal.fire({
                    title: 'อุณหภูมิสูงกว่าที่กำหนด Temperature: ' + temp.toFixed(2) + '&deg;C' + '\n' + 'ความชื้นสูงกว่าที่กำหนด Humidity: ' + humid.toFixed(2) + '%',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                })
            }

            else if(temp > hT){
                Swal.fire({
                    title: 'อุณหภูมิสูงกว่าที่กำหนด Temperature: ' + temp.toFixed(2) + '&deg;C' + '\n' + 'ความชื้นสูงกว่าที่กำหนด Humidity: ' + humid.toFixed(2) + '%',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                })
            }

            else if(humid < lH){
                Swal.fire({
                    title: 'อุณหภูมิสูงกว่าที่กำหนด Temperature: ' + temp.toFixed(2) + '&deg;C' + '\n' + 'ความชื้นสูงกว่าที่กำหนด Humidity: ' + humid.toFixed(2) + '%',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                })
            }

            else if(humid > hH){
                Swal.fire({
                    title: 'ความชื้นสูงกว่าที่กำหนด Humidity: ' + humid.toFixed(2) + '%',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                })
            }
        }
    </script>
</body>

</html>
