<?php

require('dbconnect.php');

$name = $_REQUEST['name'];
$id_farmer= $_REQUEST['id_farmer'];
$group_farmer= $_REQUEST['group_farmer'];
$username = $_REQUEST['username'];
$password= $_REQUEST['password'];
$status= $_REQUEST['status'];


// เช็คว่ามีข้อมูลนี้อยู่หรือไม่
$check1 = "SELECT * FROM users WHERE username = '$username'";
$check2 = "SELECT * FROM users WHERE id_farmer = '$id_farmer'";
// echo $check;
$result1 = mysqli_query($conn,$check1);
$result2 = mysqli_query($conn,$check2);
  $num1=mysqli_num_rows($result1); 
  $num2=mysqli_num_rows($result2);
  if($num1 > 0){
    //ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
    echo "<script>";
    echo "alert(' มีผู้ใช้ username นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
    echo "window.location='register';";
    echo "</script>";

}  if($num2 > 0){
  //ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
  echo "<script>";
  echo "alert(' มีผู้ใช้ id_farmer นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
  echo "window.location='register';";
  echo "</script>";
}


else{

    $sql = "INSERT INTO users (name, id_farmer ,group_farmer,username,password,status) VALUES ";
    $sql .= "('" . $name ."',
            '" . $id_farmer."',
            '" . $group_farmer ."',
            '" . $username ."',
            '" . $password ."',
            '" . $status ."')";
    mysqli_query($conn, $sql);
    header("Location:login");
    exit(0);
}       
mysqli_close($conn);
//header("Location:show_status.php");


?>