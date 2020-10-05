<?php
$datadb = "testpj";
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $datadb);

// $data1='data1';

if (isset($_GET['data1'])) {$id_device = $_REQUEST['data1'];}
if (isset($_GET['data2'])) {$key_de = $_REQUEST['data2'];}
//เช็คจากตาราง User
$check_id_device = "SELECT * FROM devices WHERE id_device = '$id_device'";
$result= mysqli_query($conn,$check_id_device);
$row = mysqli_fetch_assoc($result);

  if($row > 0){
    echo "<span style='color:green'>อุปกรณ์นี้พร้อมใช้งานแล้ว</span>";
}

else{
    echo "<span style='color:red'>อุปกรณ์นี้ยังไม่พร้อมใช้งาน</span>";
}  



mysqli_close($conn);


?>