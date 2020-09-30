<?php
$datadb = "testpj";
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $datadb);

// $data1='data1';

if (isset($_GET['data2'])) {
$key_de = $_REQUEST['data2'];
//เช็คจากตาราง User
$check = "SELECT * FROM devices WHERE key_de = '$key_de'";
$result= mysqli_query($conn,$check);
  $num=mysqli_num_rows($result); 
  if($num > 0){
    echo "<span style='color:green'>ชื่อผู้ใช้งานใช้ได้ครับ</span>";
}

else{
    echo "<span style='color:red'>ชื่อผู้ใช้งานนี้ไม่ว่างครับ</span>";
}       
mysqli_close($conn);
}

?>