<meta charset="utf-8" />
<?php require_once('dbconnect.php'); 

	$username = $_POST["username"];
        $password = $_POST["password"];
// เช็คว่ามีข้อมูลนี้อยู่หรือไม่
	$check = "select * from users  where username = '$username' ";
	  $result1 = mysql_query($check) or die(mysql_error());
		$num=mysql_num_rows($result1); 
        if($num > 0)   		
        {
//ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
             echo "<script>";
			 echo "alert(' มีผู้ใช้ username นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
			 echo "window.location='register.blade.php';";
          	 echo "</script>";

		}else{
	
//ถ้าไม่มีก็บันทึกลงฐานข้อมูล
 $sql = "INSERT INTO users
		(username, password)
		
 		VALUES
		('$username', '$password') "; 
	$result = mysql_db_query($database_dbconnect, $sql) or die ("Error in query: $sql". mysql_error());
 
 
}
//ปิดการเชื่อมต่อกับฐานข้อมูล
	mysql_close($dbconnect);
//บันทึกสำเร็จแจ้งเตือนและกระโดดกลับไปหน้าฟอร์ม   ปล.การทำระบบจริงๆ อาจกระโดดไปหน้าอื่นที่เรากำหนด
	if($result){
			echo "<script type='text/javascript'>";
				echo "alert('SUCCESSFULLY');";
				echo "window.location='register.blade.php';";
			echo "</script>";
	  }
	  else{
//ถ้าบันทึกไม่สำเร็จแสดงข้อความ Error และกระโดดกลับไปหน้าฟอร์ม
		    echo "<script type='text/javascript'>";
				echo "alert('Error!');";
				echo "window.location='register.blade.php';";
			echo "</script>";
	  }
	  
	  
 ?>