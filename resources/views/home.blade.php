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
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-database.js"></script>

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
                <li><a href="#">ช่วงของการบ่ม</a></li>
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
    <?php
  $datadb = "testpj";
  $servername = "localhost";
  $username = "root";
  $password = "";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $datadb);
  $sql = "SELECT id_device FROM devices";
  $query = mysqli_query($conn, $sql);

?>  
    <div class="form-group col-md-4" style="margin-left:100px;">
      <label for="inputState">Choose a device</label>
      <select id="inputState" class="form-control">
        <option disabled selected>Choose...</option>
        <?php 
        while($result = mysqli_fetch_assoc($query)): ?>
                                <option value="<?=$result['id_device']?>"><?=$result['id_device']?></option>
                            <?php endwhile; ?>
      </select>
    </div>
    
    <div class="container" style="position: relative; height:40vh; width:80vw">
        <div>
            <canvas id="tempChart"></canvas>
        </div>
        <div>
            <canvas id="humChart"></canvas>
        </div>
    </div>
    
    <script>
    window.addEventListener("load", genLineChart);
    
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

        function genLineChart(){
            let ref = firebase.database().ref('logHTU21D');
            ref.on("child_added", getData)
            
            const humArr = [];
            const tempArr = [];
            const timeArr = [];
            
            function getData(snapshot) {
                const temp = snapshot.val().Temperature
                tempArr.push(temp)
                const time = snapshot.val().Time
                timeArr.push(time)
                const hum = snapshot.val().Humidity
                humArr.push(hum)
                tempChrt(tempArr, timeArr);
                humChrt(humArr, timeArr);
            }
            console.log(timeArr, tempArr, humArr)
            
            function tempChrt(tempArr, timeArr) { // to be called by loadChart() to render live chart
                const ctx1 = document.getElementById('tempChart').getContext('2d');
                const chartConfig = new Chart(ctx1, {
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

            function humChrt(humArr, timeArr) { // to be called by loadChart() to render live chart
                const ctx2 = document.getElementById('humChart').getContext('2d');
                const chartConfig = new Chart(ctx2, {
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
        }
    </script>
  
</body>

</html>
