<?php
require('connect.php');

$name = $_REQUEST['name'];
$id_farmer = $_REQUEST['id_farmer'];
$group= $_REQUEST['group'];
$username= $_REQUEST['username'];
$password= $_REQUEST['password'];
$password= $_REQUEST['status'];


// เช็คว่ามีข้อมูลนี้อยู่หรือไม่
$check = "SELECT * FROM users WHERE USERNAME = '$USERNAME' ";
echo $check;
$result1 = mysqli_query($conn,$check);
  $num=mysqli_num_rows($result1); 
  if($num > 0){
    //ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
    echo "<script>";
    echo "alert(' มีผู้ใช้ username นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
    echo "window.location='register.blade.php';";
    echo "</script>";

}else{
    $sql = "INSERT INTO users (name, id_farmer ,group,password,status) VALUES ";
    $sql .= "('" . $name ."',
            '" . $id_farmer."',
            '" . $group ."',
            '" . $password ."',
            '" . $status ."')";
    mysqli_query($conn, $sql);
    header("Location:login.blade.php");
}       
mysqli_close($conn);
//header("Location:show_status.php");


?>