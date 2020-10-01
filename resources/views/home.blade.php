

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


    <nav class="navbar navbar-inverse ">
        <div class="container-fluid">
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
                <li><a href="pro">กระบวนการบ่ม</a></li>
                <li><a href="#">ข้อมูลย้อนหลัง</a></li>
                <li><a href="#">กราฟข้อมูล</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <?php session_start(); 
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


        </ul>

        </div>
    </nav>
<div>
    <div class="form-group row">
                    <label class="control-label col-sm-1">เลือกโรงบ่ม:</label>
                    <div class="col-md-4">
                        <select name="status" id="" class="form-control">

                            <option value="" disabled selected>เลือกโรงบ่ม</option>
                            <?php 
                           $datadb = "testpj";
                           $servername = "localhost";
                           $username = "root";
                           $password = "";
                       
                           // Create connection
                           $conn = new mysqli($servername, $username, $password, $datadb);

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
                </div> 

 
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
    
    <div class="container" style="position: relative; height:40vh; width:80vw">
        <div>
            <canvas id="tempChart"></canvas>
        </div>
        <div>
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
            console.log(lT, hT, lH, hH);

            if(temp < lT && humid < lH){
                Swal.fire({
                    title: 'อุณหภูมิต่ำกว่าที่กำหนด Temperature: ' + temp + '\n' + 'ความชื้นต่ำกว่าที่กำหนด Humidity: ' + humid,
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
                    title: 'อุณหภูมิสูงกว่าที่กำหนด Temperature: ' + temp + '\n' + 'ความชื้นสูงกว่าที่กำหนด Humidity: ' + humid,
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
                    title: 'อุณหภูมิสูงกว่าที่กำหนด Temperature: ' + temp + '\n' + 'ความชื้นสูงกว่าที่กำหนด Humidity: ' + humid,
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                })
            }

            else if(temp > hT && humid < lH){
                // swal("อุณหภูมิสูงกว่าที่กำหนด Temperature: " + temp + '\n' + "ความชื้นต่ำกว่าที่กำหนด Humidity: " + humid);
                Swal.fire({
                    title: 'อุณหภูมิสูงกว่าที่กำหนด Temperature: ' + temp + '\n' + 'ความชื้นสูงกว่าที่กำหนด Humidity: ' + humid,
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
                    title: 'อุณหภูมิสูงกว่าที่กำหนด Temperature: ' + temp + '\n' + 'ความชื้นสูงกว่าที่กำหนด Humidity: ' + humid,
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
                    title: 'อุณหภูมิสูงกว่าที่กำหนด Temperature: ' + temp + '\n' + 'ความชื้นสูงกว่าที่กำหนด Humidity: ' + humid,
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
                    title: 'อุณหภูมิสูงกว่าที่กำหนด Temperature: ' + temp + '\n' + 'ความชื้นสูงกว่าที่กำหนด Humidity: ' + humid,
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
                    title: 'ความชื้นสูงกว่าที่กำหนด Humidity: ' + humid,
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
