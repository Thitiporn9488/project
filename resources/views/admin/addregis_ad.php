<?php

$datadb = "testpj";
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $datadb);

$name_ad = $_REQUEST['name_ad'];
$id_admin = $_REQUEST['id_admin'];
$username_ad = $_REQUEST['username_ad'];
$password= $_REQUEST['password'];
$status= 'แอดมิน';


// เช็คว่ามีข้อมูลนี้อยู่หรือไม่
$check = "SELECT * FROM admins WHERE 	username_ad = '$username_ad'";
// echo $check;
$result= mysqli_query($conn,$check);
  $num=mysqli_num_rows($result); 
  if($num > 0){
    //ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
    echo "<script>";
    echo "alert(' มีผู้ใช้ username นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
    echo "window.location='regis_ad';";
    echo "</script>";
}

else{
// echo 'yed';
$sql = "INSERT INTO admins  (name_ad,id_admin,username_ad,password,status) VALUES ";
    $sql .= "('" . $name_ad ."',
            '" . $id_admin ."',
            '" . $username_ad ."',
            '" . $password ."',
            '" . $status ."')";  
    mysqli_query($conn, $sql);
    header("Location:/");
    exit(0);
}       
mysqli_close($conn);
//header("Location:show_status.php");


?>
