<?php
$datadb = "testpj";
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $datadb);

// $data1='data1';

if (isset($_GET['data1'])) {
$id_device = $_REQUEST['data1'];
//เช็คจากตาราง User
$check = "SELECT * FROM devices WHERE id_device = '$id_device'";
$result= mysqli_query($conn,$check);
  $num=mysqli_num_rows($result); 
  if($num > 0){
    echo "<span style='color:green'>มีอยู่แล้ว</span>";
}

else{
    echo "<span style='color:red'>ไม่มีข้อมูล</span>";
}       
mysqli_close($conn);
}

?>