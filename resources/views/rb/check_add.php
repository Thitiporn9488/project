<?php
$datadb = "testpj";
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $datadb);

 // check device
                    if(isset($_GET['check'])){
                    $id_device = $_REQUEST['id_device'];
                    $key= $_REQUEST['key'];

                    // เช็คว่ามีข้อมูลนี้อยู่หรือไม่
                    // $check = "SELECT * FROM devices WHERE id_device = '$id_device'";
                    $check = "SELECT COUNT * FROM devices WHERE id_device ='$id_device'";
                    // echo $check;
                    
                    $result = mysqli_query($conn,$check);
                    if($num = 0){
                        while($rowDevice = mysqli_fetch_assoc($result)){
                            $RowNameDevice = $rowDevice['id_device'];
                            $RowKeyDevice = $rowDevice['key'];
                            // echo $RowNameDevice.'Key'.$RowKeyDevice .'<br>';
                            if($id_device == $RowNameDevice){
                                echo '<script>';
                                echo "comfirm('มีข้อมูลอุปกรณ์')";
                                echo '</script>';
                                 echo '<script>window.history.back();</script>';
                            }
                        }

                    }
                    $sql = "UPDATE  incubs 
                    SET  id_device='$id_device'
                    WHERE id_in='$id_in'";
            if ($conn->query($sql) === TRUE) {
                echo '<script>window.location.href="index_in"</script>';
            } else {
                echo "Error updating record: " . $conn->error;
            }  
                    }     



?>