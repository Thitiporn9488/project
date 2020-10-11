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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>กราฟสรุปข้อมูล</title>

    <style>
        h1 {text-align: center;}
        p {text-align: center;}
    </style>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

     <!-- <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}"> -->
    <!-- ส่วนหัว -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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

    <?php

        define("DB_SERVER", "localhost");
        define("DB_USERNAME", "root");
        define("DB_PASSWORD", "");
        define("DB_DATABASE", "testpj");

        $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        $logs = mysqli_query($conn, "SELECT temp, humid, ti, da FROM logs161");
        $st1 = mysqli_query($conn, "SELECT temp, humid, ti, da FROM logs161 WHERE da BETWEEN '2020-09-26' AND '2020-09-27'");
        $st2 = mysqli_query($conn, "SELECT temp, humid, ti, da FROM logs161 WHERE da BETWEEN '2020-09-28' AND '2020-09-30'");
        $st3 = mysqli_query($conn, "SELECT temp, humid, ti, da FROM logs161 WHERE da BETWEEN '2020-10-01' AND '2020-10-02'");
        $st4 = mysqli_query($conn, "SELECT temp, humid, ti, da FROM logs161 WHERE da BETWEEN '2020-10-03' AND '2020-10-04'");

        $dataLogs = array();
        while($row = mysqli_fetch_assoc($logs)){
            array_push($dataLogs, $row);
        }

        $dataSt1 = array();
        while($row = mysqli_fetch_assoc($st1)){
            array_push($dataSt1, $row);
        }

        $dataSt2 = array();
        while($row = mysqli_fetch_assoc($st2)){
            array_push($dataSt2, $row);
        }

        $dataSt3 = array();
        while($row = mysqli_fetch_assoc($st3)){
            array_push($dataSt3, $row);
        }

        $dataSt4 = array();
        while($row = mysqli_fetch_assoc($st4)){
            array_push($dataSt4, $row);
        }
        // echo "<pre>";
        // print_r($dataSt1);
        // echo "</pre>";

        // print json_encode($data);
    ?>

<div class="container" style="position:relative;width:70%;left:0px">
        <h1>กราฟสรุปกระบวนการบ่ม</h1><br>
        <canvas id="logChart"></canvas>
    </div><br><br><br><br><br>
    
    <div class="container" style="position:relative;width:90%;left:0px;">

        <div style="float:left;width:530px;height:350px">
            <p>ช่วงการทำสี</p>
            <canvas id="St1Chart"></canvas>
        </div>

        <div style="float:right;width:530px;height:350px">
            <p>ช่วงการตรึงสี</p>
            <canvas id="St2Chart"></canvas>
        </div>

        <div style="float:left;width:530px;height:350px">
            <p>ช่วงทำใบแห้ง</p>
            <canvas id="St3Chart"></canvas>
        </div>

        <div style="float:right;width:530px;height:350px">
            <p>ช่วงทำก้านแห้ง</p>
            <canvas id="St4Chart"></canvas>
        </div>
    </div>

</div>

    

    <script type="text/javascript">

        function logsChart(){

            let dataLogs = <?php echo json_encode($dataLogs) ?>;

            let tempArr = [];
            let humidArr = [];
            // let timeSt1 = [];
            let dateArr = [];

            for(let i in dataLogs){
                tempArr.push(dataLogs[i].temp);
                humidArr.push(dataLogs[i].humid);
                // timeSt1.push(dataSt1[i].ti);
                dateArr.push(dataLogs[i].da);
            }
            // console.log(dateArr);
            logsChrt(tempArr, humidArr, dateArr);
        }

        function logsChrt(tempArr, humidArr, dateArr){
            let ctx = document.getElementById('logChart').getContext('2d');
            let chartConfig = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: dateArr,
                    datasets: [{
                        label: 'Temprature',
                        fill: false,
                        data: tempArr,
                        backgroundColor: "rgba(255, 99, 132, 0.2)",
                        borderColor: "rgba(255, 99, 132, 1)",
                        borderWidth: 1
                    },{
                        label: 'Humidity',
                        fill: false,
                        data: humidArr,
                        backgroundColor: "rgba(255, 99, 132, 0.2)",
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

        function step01(){

            let dataSt1 = <?php echo json_encode($dataSt1) ?>;

            let tempSt1 = [];
            let humidSt1 = [];
            // let timeSt1 = [];
            let dateSt1 = [];

            for(let i in dataSt1){
                tempSt1.push(dataSt1[i].temp);
                humidSt1.push(dataSt1[i].humid);
                // timeSt1.push(dataSt1[i].ti);
                dateSt1.push(dataSt1[i].da);
            }
            // console.log(dateArr);
            st1Chrt(tempSt1, humidSt1, dateSt1);
        }

        function st1Chrt(tempSt1, humidSt1, dateSt1){
            let ctx1 = document.getElementById('St1Chart').getContext('2d');
            let chartConfig = new Chart(ctx1, {
                type: 'line',
                data: {
                    labels: dateSt1,
                    datasets: [{
                        label: 'Temprature',
                        fill: false,
                        data: tempSt1,
                        backgroundColor: "rgba(255, 99, 132, 0.2)",
                        borderColor: "rgba(255, 99, 132, 1)",
                        borderWidth: 1
                    },{
                        label: 'Humidity',
                        fill: false,
                        data: humidSt1,
                        backgroundColor: "rgba(255, 99, 132, 0.2)",
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

        function step02(){

            let dataSt2 = <?php echo json_encode($dataSt2) ?>;

            let tempSt2 = [];
            let humidSt2 = [];
            // let timeSt1 = [];
            let dateSt2 = [];

            for(let i in dataSt2){
                tempSt2.push(dataSt2[i].temp);
                humidSt2.push(dataSt2[i].humid);
                // timeSt1.push(dataSt1[i].ti);
                dateSt2.push(dataSt2[i].da);
            }
            // console.log(dateArr);
            st2Chrt(tempSt2, humidSt2, dateSt2);
        }

        function st2Chrt(tempSt2, humidSt2, dateSt2){
            let ctx2 = document.getElementById('St2Chart').getContext('2d');
            let chartConfig = new Chart(ctx2, {
                type: 'line',
                data: {
                    labels: dateSt2,
                    datasets: [{
                        label: 'Temprature',
                        fill: false,
                        data: tempSt2,
                        backgroundColor: "rgba(255, 99, 132, 0.2)",
                        borderColor: "rgba(255, 99, 132, 1)",
                        borderWidth: 1
                    },{
                        label: 'Humidity',
                        fill: false,
                        data: humidSt2,
                        backgroundColor: "rgba(255, 99, 132, 0.2)",
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

        function step03(){

            let dataSt3 = <?php echo json_encode($dataSt3) ?>;

            let tempSt3 = [];
            let humidSt3 = [];
            // let timeSt1 = [];
            let dateSt3 = [];

            for(let i in dataSt3){
                tempSt3.push(dataSt3[i].temp);
                humidSt3.push(dataSt3[i].humid);
                // timeSt1.push(dataSt1[i].ti);
                dateSt3.push(dataSt3[i].da);
            }
            // console.log(dateArr);
            st3Chrt(tempSt3, humidSt3, dateSt3);
        }

        function st3Chrt(tempSt3, humidSt3, dateSt3){
            let ctx3 = document.getElementById('St3Chart').getContext('2d');
            let chartConfig = new Chart(ctx3, {
                type: 'line',
                data: {
                    labels: dateSt3,
                    datasets: [{
                        label: 'Temprature',
                        fill: false,
                        data: tempSt3,
                        backgroundColor: "rgba(255, 99, 132, 0.2)",
                        borderColor: "rgba(255, 99, 132, 1)",
                        borderWidth: 1
                    },{
                        label: 'Humidity',
                        fill: false,
                        data: humidSt3,
                        backgroundColor: "rgba(255, 99, 132, 0.2)",
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

        function step04(){

            let dataSt4 = <?php echo json_encode($dataSt4) ?>;

            let tempSt4 = [];
            let humidSt4 = [];
            // let timeSt1 = [];
            let dateSt4 = [];

            for(let i in dataSt4){
                tempSt4.push(dataSt4[i].temp);
                humidSt4.push(dataSt4[i].humid);
                // timeSt1.push(dataSt1[i].ti);
                dateSt4.push(dataSt4[i].da);
            }
            // console.log(dateArr);
            st4Chrt(tempSt4, humidSt4, dateSt4);
        }

        function st4Chrt(tempSt4, humidSt4, dateSt4){
            let ctx4 = document.getElementById('St4Chart').getContext('2d');
            let chartConfig = new Chart(ctx4, {
                type: 'line',
                data: {
                    labels: dateSt4,
                    datasets: [{
                        label: 'Temprature',
                        fill: false,
                        data: tempSt4,
                        backgroundColor: "rgba(255, 99, 132, 0.2)",
                        borderColor: "rgba(255, 99, 132, 1)",
                        borderWidth: 1
                    },{
                        label: 'Humidity',
                        fill: false,
                        data: humidSt4,
                        backgroundColor: "rgba(255, 99, 132, 0.2)",
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
        
        logsChart();
        step01();
        step02();
        step03();
        step04();
        
    </script>
  </body>
</html>