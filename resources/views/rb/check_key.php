<?php
$datadb = "testpj";
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $datadb);



// $data1='data1';
//เช็คจากตาราง User

$check = "SELECT * FROM devices WHERE id_device = '".$_GET["hok"]."' OR key_de = '".$_GET["hok1"]."' ";
$result= mysqli_query($conn,$check);
$row = mysqli_fetch_assoc($result);

  if($row > 0){
    echo "<span style='color:green'>อุปกรณ์นี้พร้อมใช้งานแล้ว</span>";
}

else{
    echo "<span style='color:red'>อุปกรณ์นี้ยังไม่พร้อมใช้งาน</span>";
}  
    $conn->close();
    
?>