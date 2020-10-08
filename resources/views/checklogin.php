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
$sql_usrers = "SELECT * FROM users WHERE username='$username' AND password ='$password'";
$sql_employees = "SELECT * FROM employees WHERE username_em='$username' AND password ='$password'";
$sql_admins = "SELECT * FROM admins WHERE username_ad='$username' AND password ='$password'";

// echo $sql;

// 3. Execute SQL
$result_users = mysqli_query($conn, $sql_usrers);
$result_employees = mysqli_query($conn, $sql_employees);
$result_admins = mysqli_query($conn, $sql_admins);
// $row = mysqli_fetch_assoc($result);

// if(isset($row['username']) ? $row['username']:'') { // Login OK

//     if($row["status"] == "เจ้าของ"){
//         $_SESSION['name_user'] = $row['name_user'];
//         $_SESSION['id_farmer'] = $row['id_farmer'];
//         $_SESSION['status'] = $row['status'];
//         header("Location:home");
//         exit(0);
//     }else{
//         $_SESSION['name_user'] = $row['name_user'];
//         $_SESSION['id_farmer'] = $row['id_farmer'];
//         $_SESSION['status'] = $row['status'];
//         header("Location:home");
//         exit(0);
//     }
       
// }
if(mysqli_num_rows($result_users)==1) {
    $row = mysqli_fetch_assoc($result_users);

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
}
if(mysqli_num_rows($result_employees)==1 ){
    $row = mysqli_fetch_assoc($result_employees);

    if(isset($row['username_em']) ? $row['username_em']:'') { // Login OK

        if($row["status"] == "ลูกจ้าง"){
            $_SESSION['name_emp'] = $row['name_emp'];
            $_SESSION['status'] = $row['status'];
            header("Location:home_em");
            exit(0);
        }else{
            $_SESSION['name_emp'] = $row['name_emp'];
            $_SESSION['status'] = $row['status'];
            header("Location:home_em");
            exit(0);
        }
       
    }
}
if(mysqli_num_rows($result_admins)==1){
    $row = mysqli_fetch_assoc($result_admins);

    if(isset($row['username_ad']) ? $row['username_ad']:'') { // Login OK

        if($row["status"] == "แอดมิน"){
            $_SESSION['name_ad'] = $row['name_ad'];
            $_SESSION['id_admin'] = $row['id_admin'];
            $_SESSION['status'] = $row['status'];
            header("Location:home_ad");
            exit(0);
        }else{
            $_SESSION['name_ad'] = $row['name_ad'];
            $_SESSION['id_admin'] = $row['id_admin'];
            $_SESSION['status'] = $row['status'];
            header("Location:home_ad");
            exit(0);
        }
       
    }
}



else {
//     $sql1 = "SELECT * FROM employees WHERE username_em='$username' AND password ='$password'";
// $result1 = mysqli_query($conn, $sql1);
// $row = mysqli_fetch_assoc($result1);
// if(isset($row['username_em']) ? $row['username_em']:'') {
// echo '1';


    echo "<script>";
    echo "alert('ข้อมูลผู้ใช้ไม่ถูกต้อง');";
    echo "window.location='/';";
    echo "</script>";
    header("Location:index_h");
}


?>