<meta charset="utf-8">
<?php

include('user.php');

$name = $_user["name"];
$id_farmer = $_user["id_farmer"];
$group = $_user["group"];
$username = $_user["username"];
$password = $_user["password"];
$status = $_user["status"];

$check = "
SELECT username
FROM users
WHERE username = 'username'
";
$result1 =mysql_query($user,$check) or die (mysqli_error());
$num = mysqli_num_rows($result1);


if($num > 0)
{
    echo "<script>";
    echo "alert('ข้อมูลซ้ำ');";
    echo "return redirect()->back();";
    echo "</script>";
}else{

    $sql = "INSERT INTO users
    (
name,
id_farmer,
group,
username,
password,
status,
)
VALUES
(
'name',
'id_farmer',
'group',
'username',
'password',
'status',
)";

$result =mysql_query($user,$check) or die ("Error in mysql_query : $sql" .
mysqli_error());

    }

mysql_close($user);

if($result){
    echo "<script tyre='text/javascript>";
    echo "alert('เพิ่ม');";
    echo "wimdow.location.user.php;";
    echo "</script>";
}else{
    echo "<script tyre='text/javascript>";
    echo "alert('Error');";
    echo "wimdow.location.user.php;";
    echo "</script>";  
}

?>
