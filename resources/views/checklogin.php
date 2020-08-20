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

if(mysqli_num_rows($result) == 1) { // Login OK

    $row = mysqli_fetch_assoc($result);

  
    if($row["status"] == "เจ้าของ"){
        $_SESSION['name'] = $row['name'];
        $_SESSION['id_farmer'] = $row['id_farmer'];
        $_SESSION['status'] = $row['status'];
        header("Location:home");
        exit(0);
    }else{
        $_SESSION['name'] = $row['name'];
        $_SESSION['id_farmer'] = $row['id_farmer'];
        $_SESSION['status'] = $row['status'];
        header("Location:home");
        exit(0);
    }
       
    }

else {
    echo "<script>";
    echo "alert('password ไม่ถูกต้อง');";
    echo "window.location='login';";
    echo "</script>";
    // header("Location:login.php");
}


?>