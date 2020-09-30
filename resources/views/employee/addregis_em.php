<?php

$datadb = "testpj";
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $datadb);

$name_emp = $_REQUEST['name_emp'];
$username_em = $_REQUEST['username_em'];
$password= $_REQUEST['password'];
$status= 'ลูกจ้าง';


// เช็คว่ามีข้อมูลนี้อยู่หรือไม่
$check = "SELECT * FROM employees WHERE username_em = '$username_em'";
// echo $check;
$result= mysqli_query($conn,$check);
  $num=mysqli_num_rows($result); 
  if($num > 0){
    //ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
    echo "<script>";
    echo "alert(' มีผู้ใช้ username นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
    echo "window.location='register_em';";
    echo "</script>";
}

else{
// echo 'yed';
    $sql = "INSERT INTO employees (name_emp,username_em,password,status) VALUES ";
    $sql .= "('" . $name_emp ."',
            '" . $username_em ."',
            '" . $password ."',
            '" . $status ."')";
    mysqli_query($conn, $sql);
    header("Location:home");
    exit(0);
}       
mysqli_close($conn);
//header("Location:show_status.php");


?>