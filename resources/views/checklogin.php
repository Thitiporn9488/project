<?php
// echo "เข้า";
// Start SESSION
session_start();

// 1. Connect DB
require("dbconnect.php");

//checkLogin.php

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
//echo $user . ", " . $pass;

// 2. SELECT SQL
$sql = "SELECT * FROM users WHERE username='$username' AND password ='$password'";

// echo $sql;

// 3. Execute SQL
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if(isset($row['username']) ? $row['username']:'') { // Login OK

    if($row["status"] == "เจ้าของ"){
        $_SESSION['name_user'] = $row['name_user'];
        $_SESSION['id_farmer'] = $row['id_farmer'];
        $_SESSION['status'] = $row['status'];
        header("Location:home");
        exit(0);
    }else{
        $_SESSION['name_user'] = $row['name_user'];
        $_SESSION['id_farmer'] = $row['id_farmer'];
        $_SESSION['status'] = $row['status'];
        header("Location:home");
        exit(0);
    }
       
}



else {
//     $sql1 = "SELECT * FROM employees WHERE username_em='$username' AND password ='$password'";
// $result1 = mysqli_query($conn, $sql1);
// $row = mysqli_fetch_assoc($result1);
// if(isset($row['username_em']) ? $row['username_em']:'') {
// echo '1';


    echo "<script>";
    echo "alert('password ไม่ถูกต้อง');";
    echo "window.location='login';";
    echo "</script>";
    header("Location:login.php");
}


?>