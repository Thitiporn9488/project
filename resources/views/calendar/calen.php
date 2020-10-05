<?php
                           $farmer = (isset($_SESSION['id_farmer'])) ? $_SESSION['id_farmer'] : '';
                           $sql = "SELECT * FROM pprocessb,users where pprocessb.id_farmer=users.id_farmer and pprocessb.id_farmer='$farmer' ";
                            $result = $conn->query($sql) ;
                            while($row = $result->fetch_assoc()) {
                                    $no_pro = $row['no_pro'];
                                    $id_pro = $row['id_pro'];
                                    $name_pro = $row['name_pro'];
                                    $rbom = $row['rbom'];
                                    $stap_1 = $row['stap_1'];
                                    $sdate_1 = $row['sdate_1'];
                                    $edate_1 = $row['edate_1'];
                                    $stap_2 = $row['stap_2'];
                                    $sdate_2 = $row['sdate_2'];
                                    $edate_2 = $row['edate_2'];
                                    $stap_3 = $row['stap_3'];
                                    $sdate_3 = $row['sdate_3'];
                                    $edate_3 = $row['edate_3'];
                                    $stap_4 = $row['stap_4'];
                                    $sdate_4 = $row['sdate_4'];
                                    $edate_4 = $row['edate_4'];
                                    $id_farmer = $row['id_farmer'];    
                           ?>
                
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">

                    <form class="form-inline" action="">
                        <div class="form-group">
                            <label for="id_pro">ID กระบวนการบ่ม:</label>
                            <input type="text" class="form-control" id="id_pro" value="<?php echo $id_pro ?>"
                                name="id_pro" readonly>
                        </div>
                        <div class="form-group" style="margin-left:25px">
                            <label for="name_pro">ชื่อการบ่ม:</label>
                            <input type="text" class="form-control" id="name_pro" value="<?php echo $name_pro ?> "
                                name="name_pro" readonly>
                        </div>
                        <div class="form-group" style="margin-left:25px">
                            <label for="rbom">โรงบ่ม:</label>
                            <input type="text" class="form-control" id="rbom" value="<?php echo $rbom ?>" name="rbom"
                                readonly>
                        </div>
                        <a href="#edit<?php echo $id_pro; ?>" data-toggle="modal" style="margin-left:100px">
                    <button type='button' class='btn btn-warning btn-sm' title='แก้ไขข้อมูล'><span
                            class='glyphicon glyphicon-edit' ></span></button>
                </a>
                <a href="#delete" data-toggle="modal" tyle="text-align:right;">
                    <button type='button' class='btn btn-danger btn-sm' title='ลบข้อมูล'><span
                            class='glyphicon glyphicon-trash' ></span></button>
                </a>
                    </form>
                </h3>
            </div>
            
            <div class="panel-body">

                <form class="form-inline" action="">
                    <div class="form-group">
                        <label >การบ่มช่วงแรก:</label>
                        <input type="text" class="form-control"  name="stap_1" value="<?php echo $stap_1 ?>" readonly>  
                    </div>
                    <div class="form-group" style="margin-left:80px">
                        <label for="sdate_1">วันที่เริ่มการบ่ม:</label>
                        <input type="text" class="form-control"   name="sdate_1" value="<?php echo $sdate_1 ?>" readonly>
                    </div>
                    <div class="form-group" style="margin-left:80px">
                        <label for="edate_1">วันที่สิ้นสุดการบ่ม:</label>
                        <input type="text" class="form-control" name="edate_1" value="<?php echo $edate_1 ?>" readonly> 
                    </div>
                </form><br>

                <form class="form-inline" action="">
                    <div class="form-group">
                        <label>การบ่มช่วงที่ 2:</label>
                        <input type="text" class="form-control" name="stap_2" value="<?php echo $stap_2 ?>" readonly>
                    </div>
                    <div class="form-group" style="margin-left:80px">
                        <label for="sdate_2">วันที่เริ่มการบ่ม:</label>
                        <input type="text" class="form-control"name="sdate_2" value="<?php echo $sdate_2 ?>" readonly>
                    </div>
                    <div class="form-group" style="margin-left:80px">
                        <label for="edate_2">วันที่สิ้นสุดการบ่ม:</label>
                        <input type="text" class="form-control" name="edate_2" value="<?php echo $edate_2 ?>" readonly>
                    </div>
                </form><br>

                <form class="form-inline" action="">
                    <div class="form-group">
                        <label >การบ่มช่วงที่ 3:</label>
                        <input type="text" class="form-control"name="stap_3" value="<?php echo $stap_3 ?>" readonly>
                    </div>
                    <div class="form-group" style="margin-left:80px">
                        <label for="sdate_3">วันที่เริ่มการบ่ม:</label>
                        <input type="text" class="form-control" name="sdate_3" value="<?php echo $sdate_3 ?>" readonly>
                    </div>
                    <div class="form-group" style="margin-left:80px">
                        <label for="edate_3">วันที่สิ้นสุดการบ่ม:</label>
                        <input type="text" class="form-control"  name="edate_3" value="<?php echo $edate_3 ?>" readonly>
                    </div>
                </form><br>

                <form class="form-inline" action="">
                    <div class="form-group">
                        <label >การบ่มช่วงที่ 4:</label>
                        <input type="text" class="form-control" name="stap_4" value="<?php echo $stap_4 ?>" readonly>
                    </div>
                    <div class="form-group" style="margin-left:80px">
                        <label for="sdate_4">วันที่เริ่มการบ่ม:</label>
                        <input type="text" class="form-control" name="sdate_4" value="<?php echo $sdate_4 ?>" readonly>
                    </div>
                    <div class="form-group" style="margin-left:80px">
                        <label for="pwd">วันที่สิ้นสุดการบ่ม:</label>
                        <input type="text" class="form-control" name="edate_4" value="<?php echo $edate_4 ?>" readonly>
                    </div><br>
                </form>
            </div>
            <div class="panel-footer">
            </div>
        </div><br><br>

        <?php }
                           $farmer = (isset($_SESSION['id_farmer'])) ? $_SESSION['id_farmer'] : '';
                           $sql = "SELECT * FROM pprocessb,users where pprocessb.id_farmer=users.id_farmer and pprocessb.id_farmer='$farmer' ";
                            $result = $conn->query($sql) ;
                            while($row = $result->fetch_assoc()) {
                                    $no_pro = $row['no_pro'];
                                    $id_pro = $row['id_pro'];
                                    $name_pro = $row['name_pro'];
                                    $rbom = $row['rbom'];
                                    $stap_1 = $row['stap_1'];
                                    $sdate_1 = $row['sdate_1'];
                                    $edate_1 = $row['edate_1'];
                                    $stap_2 = $row['stap_2'];
                                    $sdate_2 = $row['sdate_2'];
                                    $edate_2 = $row['edate_2'];
                                    $stap_3 = $row['stap_3'];
                                    $sdate_3 = $row['sdate_3'];
                                    $edate_3 = $row['edate_3'];
                                    $stap_4 = $row['stap_4'];
                                    $sdate_4 = $row['sdate_4'];
                                    $edate_4 = $row['edate_4'];
                                    $id_farmer = $row['id_farmer'];    
                           ?>


        
        <div id="edit<?php echo $no_pro; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <form method="GET" class="form-horizontal" role="form">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">กระบวนการบ่ม</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label col-sm-2">ID กระบวนการบ่ม:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="id_pro" name="id_pro" value="<?php echo $id_pro ?>"
                                    autocomplete="off" autofocus required> </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2">ชื่อการบ่ม:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="name_pro" name="name_pro" value="<?php echo $name_pro ?>"
                                   autocomplete="off" autofocus required> </div>
                            <label class="control-label col-sm-2">โรงบ่ม:</label>
                            <div class="col-sm-4">
                                <select name="rbom" id="rbom" class="form-control ">
                                    <option value="" disabled selected>เลือกโรงบ่ม</option>
                                    <?php
                            $farmer = (isset($_SESSION['id_farmer'])) ? $_SESSION['id_farmer'] : '';
                            $sql = "SELECT * FROM incubs,users where incubs.id_farmer=users.id_farmer and incubs.id_farmer='$farmer'";
                             $result = $conn->query($sql);
                                 while($row = $result->fetch_assoc()) {
                                   $name_in = $row['name_in'];
                            ?>
                                    <option value='<?php echo $name_in ?>'><?php echo $name_in?></option>
                                    <?php } ?>
                                </select> </div>
                        </div><br>

                        <div class="form-group">
                            <label class="control-label col-sm-2">การบ่มช่วงแรก:</label>
                            <div class="col-sm-4">
                                <select name="stap_1" id="stap_1" class="form-control ">
                                    <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                                    <option value="ช่วงทำสี">ช่วงทำสี</option>
                                    <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                                    <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                                    <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                                </select> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">วันที่เริ่มการบ่ม:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"  name="sdate_1" value="<?php echo $sdate_1 ?>"
                                    autocomplete="off" autofocus
                                    required> </div>
                            <label class="control-label col-sm-2">วันที่สิ้นสุดการบ่ม:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"  name="edate_1"
                                value="<?php echo $edate_1 ?>"autocomplete="off"
                                    required> </div>
                        </div><br>


                        <div class="form-group">
                            <label class="control-label col-sm-2">การบ่มช่วงที่ 2:</label>
                            <div class="col-sm-4">
                                <select name="stap_2" id="stap_2" class="form-control ">
                                    <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                                    <option value="ช่วงทำสี">ช่วงทำสี</option>
                                    <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                                    <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                                    <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                                </select></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">วันที่เริ่มการบ่ม:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"  name="sdate_2"
                                value="<?php echo $sdate_2 ?>" autocomplete="off" required>
                            </div>
                            <label class="control-label col-sm-2" for="item_code">วันที่สิ้นสุดการบ่ม:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"  name="edate_2"
                                value="<?php echo $edate_2 ?>" autocomplete="off"
                                    required> </div>
                        </div><br>

                        <div class="form-group">
                            <label class="control-label col-sm-2">การบ่มช่วงที่ 3:</label>
                            <div class="col-sm-4">
                                <select name="stap_3" id="stap_3" class="form-control ">
                                    <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                                    <option value="ช่วงทำสี">ช่วงทำสี</option>
                                    <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                                    <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                                    <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                                </select> </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">วันที่เริ่มการบ่ม:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="sdate_3"
                                value="<?php echo $sdate_3 ?>" autocomplete="off" required>
                            </div>
                            <label class="control-label col-sm-2">วันที่สิ้นสุดการบ่ม:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"  name="edate_3"
                                value="<?php echo $edate_3 ?>" autocomplete="off"
                                    required> </div>
                        </div><br>

                        <div class="form-group">
                            <label class="control-label col-sm-2">การบ่มช่วงที่ 4:</label>
                            <div class="col-sm-4">
                                <select name="stap_4" id="stap_4" class="form-control ">
                                    <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                                    <option value="ช่วงทำสี">ช่วงทำสี</option>
                                    <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                                    <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                                    <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                                </select> </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">วันที่เริ่มการบ่ม:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"  name="sdate_4"
                                value="<?php echo $sdate_4 ?>" autocomplete="off" required>
                            </div>
                            <label class="control-label col-sm-2">วันที่สิ้นสุดการบ่ม:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"  name="edate_4"
                                value="<?php echo $edate_4 ?>" autocomplete="off"
                                    required> </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" name="save" data-target="#save">
                                Update data </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
   


    <?php 

//Add Item        
if(isset($_GET['save'])){
   $id_pro = $_GET['id_pro'];
   $name_pro = $_GET['name_pro'];
   $rbom = $_GET['rbom'];
   $stap_1 = $_GET['stap_1'];
   $sdate_1 = $_GET['sdate_1'];
   $edate_1 = $_GET['edate_1'];
   $stap_2 = $_GET['stap_2'];
   $sdate_2 = $_GET['sdate_2'];
   $edate_2 = $_GET['edate_2'];
   $stap_3 = $_GET['stap_3'];
   $sdate_3 = $_GET['sdate_3'];
   $edate_3 = $_GET['edate_3'];
   $stap_4 = $_GET['stap_4'];
   $sdate_4 = $_GET['sdate_4'];
   $edate_4 = $_GET['edate_4'];

   $farmer = (isset($_SESSION['id_farmer'])) ? $_SESSION['id_farmer'] : '';
   $sql = "INSERT INTO pprocessb (id_pro,name_pro,rbom,stap_1,sdate_1,edate_1,stap_2,sdate_2,edate_2,stap_3,sdate_3,edate_3,stap_4,sdate_4,edate_4,id_farmer)  
   VALUES ('$id_pro','$name_pro','$rbom','$stap_1','$sdate_1','$edate_1','$stap_2','$sdate_2','$edate_2','$stap_3','$sdate_3','$edate_3','$stap_4','$sdate_4','$edate_4','$farmer') ";
   if ($conn->query($sql) === TRUE) {
       if ($conn) {
           echo  $alert = "<div class='alert alert-succes'>

           </div>";
           echo '<script>window.location.href="pro"</script>';
       } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
       }
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
}
?>

<!--Add Item Modal -->
<div id="exampleModal" class="modal fade" role="dialog">
   <div class="modal-dialog modal-lg">
       <!-- Modal content-->
       <div class="modal-content">
           <form method="GET" class="form-horizontal" role="form">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title">กระบวนการบ่ม</h4>
               </div>
               <div class="modal-body">

                   <div class="form-group">
                       <label class="control-label col-sm-2">ID กระบวนการบ่ม:</label>
                       <div class="col-sm-4">
                           <input type="text" class="form-control" id="id_pro" name="id_pro"
                               placeholder="ID กระบวนการบ่ม" autocomplete="off" autofocus required> </div>
                   </div>

                   <div class="form-group">
                       <label class="control-label col-sm-2">ชื่อการบ่ม:</label>
                       <div class="col-sm-4">
                           <input type="text" class="form-control" id="name_pro" name="name_pro"
                               placeholder="ชื่อการบ่ม" autocomplete="off" autofocus required> </div>
                       <label class="control-label col-sm-2">โรงบ่ม:</label>
                       <div class="col-sm-4">
                           <select name="rbom" id="rbom" class="form-control ">
                               <option value="" disabled selected>เลือกโรงบ่ม</option>
                               <?php
                       $farmer = (isset($_SESSION['id_farmer'])) ? $_SESSION['id_farmer'] : '';
                       $sql = "SELECT * FROM incubs,users where incubs.id_farmer=users.id_farmer and incubs.id_farmer='$farmer'";
                        $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                              $name_in = $row['name_in'];
                       ?>
                               <option value='<?php echo $name_in ?>'><?php echo $name_in?></option>
                               <?php } ?>
                           </select> </div>
                   </div><br>

                   <div class="form-group">
                       <label class="control-label col-sm-2">การบ่มช่วงแรก:</label>
                       <div class="col-sm-4">
                           <select name="stap_1" id="stap_1" class="form-control ">
                               <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                               <option value="ช่วงทำสี">ช่วงทำสี</option>
                               <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                               <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                               <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                           </select> </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-sm-2">วันที่เริ่มการบ่ม:</label>
                       <div class="col-sm-4">
                           <input type="text" class="form-control" id="sdate_1" name="sdate_1"
                               placeholder="คลิ๊กเพื่อเลือกวันที่เริ่มกระบวนการบ่ม" autocomplete="off" autofocus
                               required> </div>
                       <label class="control-label col-sm-2">วันที่สิ้นสุดการบ่ม:</label>
                       <div class="col-sm-4">
                           <input type="text" class="form-control" id="edate_1" name="edate_1"
                               placeholder="คลิ๊กเพื่อเลือกวันที่สิ้นสุดกระบวนการการบ่ม" autocomplete="off"
                               required> </div>
                   </div><br>


                   <div class="form-group">
                       <label class="control-label col-sm-2">การบ่มช่วงที่ 2:</label>
                       <div class="col-sm-4">
                           <select name="stap_2" id="stap_2" class="form-control ">
                               <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                               <option value="ช่วงทำสี">ช่วงทำสี</option>
                               <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                               <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                               <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                           </select></div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-sm-2">วันที่เริ่มการบ่ม:</label>
                       <div class="col-sm-4">
                           <input type="text" class="form-control" id="sdate_2" name="sdate_2"
                               placeholder="คลิ๊กเพื่อเลือกวันที่เริ่มกระบวนการบ่ม" autocomplete="off" required>
                       </div>
                       <label class="control-label col-sm-2" for="item_code">วันที่สิ้นสุดการบ่ม:</label>
                       <div class="col-sm-4">
                           <input type="text" class="form-control" id="edate_2" name="edate_2"
                               placeholder="คลิ๊กเพื่อเลือกวันที่สิ้นสุดกระบวนการการบ่ม" autocomplete="off"
                               required> </div>
                   </div><br>

                   <div class="form-group">
                       <label class="control-label col-sm-2">การบ่มช่วงที่ 3:</label>
                       <div class="col-sm-4">
                           <select name="stap_3" id="stap_3" class="form-control ">
                               <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                               <option value="ช่วงทำสี">ช่วงทำสี</option>
                               <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                               <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                               <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                           </select> </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-sm-2">วันที่เริ่มการบ่ม:</label>
                       <div class="col-sm-4">
                           <input type="text" class="form-control" id="sdate_3" name="sdate_3"
                               placeholder="คลิ๊กเพื่อเลือกวันที่เริ่มกระบวนการบ่ม" autocomplete="off" required>
                       </div>
                       <label class="control-label col-sm-2">วันที่สิ้นสุดการบ่ม:</label>
                       <div class="col-sm-4">
                           <input type="text" class="form-control" id="edate_3" name="edate_3"
                               placeholder="คลิ๊กเพื่อเลือกวันที่สิ้นสุดกระบวนการการบ่ม" autocomplete="off"
                               required> </div>
                   </div><br>

                   <div class="form-group">
                       <label class="control-label col-sm-2">การบ่มช่วงที่ 4:</label>
                       <div class="col-sm-4">
                           <select name="stap_4" id="stap_4" class="form-control ">
                               <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                               <option value="ช่วงทำสี">ช่วงทำสี</option>
                               <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                               <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                               <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                           </select> </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-sm-2">วันที่เริ่มการบ่ม:</label>
                       <div class="col-sm-4">
                           <input type="text" class="form-control" id="sdate_4" name="sdate_4"
                               placeholder="คลิ๊กเพื่อเลือกวันที่เริ่มกระบวนการบ่ม" autocomplete="off" required>
                       </div>
                       <label class="control-label col-sm-2">วันที่สิ้นสุดการบ่ม:</label>
                       <div class="col-sm-4">
                           <input type="text" class="form-control" id="edate_4" name="edate_4"
                               placeholder="คลิ๊กเพื่อเลือกวันที่สิ้นสุดกระบวนการการบ่ม" autocomplete="off"
                               required> </div>
                   </div>

                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       <button type="submit" class="btn btn-primary" name="save" data-target="#save">
                           บันทึกข้อมูล </button>
                   </div>
           </form>
       </div>
   </div>
</div>


</div>



<div id="add" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <form method="post" class="form-horizontal" role="form">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Add Stocks</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_name">Item Name:</label>
                                            <div class="col-sm-3">
                                                <input type="hidden" name="add_stocks_id" value="">
                                                <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Item Name" required readonly value=""> </div>
                                            <label class="control-label col-sm-2" for="item_code">Item Code:</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="item_code" name="item_code" placeholder="Item Code" required readonly value="" autocomplete="off"> </div>
                                            <label class="control-label col-sm-1" for="dr_no">DR #:</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="dr_no" name="dr_no" placeholder="DR #" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_name">Quantity:</label>
                                            <div class="col-sm-4">
                                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" autocomplete="off" required min="1"> </div>
                                            <label class="control-label col-sm-2" for="item_name">Remarks:</label>
                                            <div class="col-sm-4">
                                                <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                   
                                </form>
                            </div>
                        </div>
                    </div>



                    <?php
  $datadb = "testpj";
  $servername = "localhost";
  $username = "root";
  $password = "";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $datadb);

  session_start(); 

  if(isset($_SESSION['status'])=='เจ้าของ') {
         header("Location:/");
     }
     if(isset($_SESSION['status'])=='ลูกจ้าง'){
         header("Location:/");
     }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>home</title>
    <!-- ส่วนหัว -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>

    <!-- ตาราง -->
    <!-- Latest compiled and minified CSS  ไอค่อน-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme ทำหนา-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- data atble -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });

    </script>

    <!-- ปฏิทิน -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>




    <script type="text/javascript">
        // <!--  ปฏิทิน -->
        $(function () {
            var startDateTextBox = $('#sdate_1');
            var endDateTextBox = $('#edate_1');

            startDateTextBox.datepicker({
                dateFormat: 'yy-mm-dd',
                onClose: function (dateText, inst) {
                    if (endDateTextBox.val() != '') {
                        var testStartDate = startDateTextBox.datepicker('getDate');
                        var testEndDate = endDateTextBox.datepicker('getDate');
                        if (testStartDate > testEndDate)
                            endDateTextBox.datepicker('setDate', testStartDate);
                    }
                },
                onSelect: function (selectedDateTime) {
                    endDateTextBox.datepicker('option', 'minDate', startDateTextBox.datepicker(
                        'getDate'));
                }
            });
            endDateTextBox.datepicker({
                dateFormat: 'yy-mm-dd',
                onClose: function (dateText, inst) {
                    if (startDateTextBox.val() != '') {
                        var testStartDate = startDateTextBox.datepicker('getDate');
                        var testEndDate = endDateTextBox.datepicker('getDate');
                        if (testStartDate > testEndDate)
                            startDateTextBox.datepicker('setDate', testEndDate);
                    }
                },
                onSelect: function (selectedDateTime) {
                    startDateTextBox.datepicker('option', 'maxDate', endDateTextBox.datepicker(
                        'getDate'));
                }
            });

        });

        $(function () {
            var startDateTextBox = $('#sdate_2');
            var endDateTextBox = $('#edate_2');

            startDateTextBox.datepicker({
                dateFormat: 'yy-mm-dd',
                onClose: function (dateText, inst) {
                    if (endDateTextBox.val() != '') {
                        var testStartDate = startDateTextBox.datepicker('getDate');
                        var testEndDate = endDateTextBox.datepicker('getDate');
                        if (testStartDate > testEndDate)
                            endDateTextBox.datepicker('setDate', testStartDate);
                    }
                },
                onSelect: function (selectedDateTime) {
                    endDateTextBox.datepicker('option', 'minDate', startDateTextBox.datepicker(
                        'getDate'));
                }
            });
            endDateTextBox.datepicker({
                dateFormat: 'yy-mm-dd',
                onClose: function (dateText, inst) {
                    if (startDateTextBox.val() != '') {
                        var testStartDate = startDateTextBox.datepicker('getDate');
                        var testEndDate = endDateTextBox.datepicker('getDate');
                        if (testStartDate > testEndDate)
                            startDateTextBox.datepicker('setDate', testEndDate);
                    }
                },
                onSelect: function (selectedDateTime) {
                    startDateTextBox.datepicker('option', 'maxDate', endDateTextBox.datepicker(
                        'getDate'));
                }
            });

        });


        $(function () {
            var startDateTextBox = $('#sdate_3');
            var endDateTextBox = $('#edate_3');

            startDateTextBox.datepicker({
                dateFormat: 'yy-mm-dd',
                onClose: function (dateText, inst) {
                    if (endDateTextBox.val() != '') {
                        var testStartDate = startDateTextBox.datepicker('getDate');
                        var testEndDate = endDateTextBox.datepicker('getDate');
                        if (testStartDate > testEndDate)
                            endDateTextBox.datepicker('setDate', testStartDate);
                    }
                },
                onSelect: function (selectedDateTime) {
                    endDateTextBox.datepicker('option', 'minDate', startDateTextBox.datepicker(
                        'getDate'));
                }
            });
            endDateTextBox.datepicker({
                dateFormat: 'yy-mm-dd',
                onClose: function (dateText, inst) {
                    if (startDateTextBox.val() != '') {
                        var testStartDate = startDateTextBox.datepicker('getDate');
                        var testEndDate = endDateTextBox.datepicker('getDate');
                        if (testStartDate > testEndDate)
                            startDateTextBox.datepicker('setDate', testEndDate);
                    }
                },
                onSelect: function (selectedDateTime) {
                    startDateTextBox.datepicker('option', 'maxDate', endDateTextBox.datepicker(
                        'getDate'));
                }
            });

        });


        $(function () {
            var startDateTextBox = $('#sdate_4');
            var endDateTextBox = $('#edate_4');

            startDateTextBox.datepicker({
                dateFormat: 'yy-mm-dd',
                onClose: function (dateText, inst) {
                    if (endDateTextBox.val() != '') {
                        var testStartDate = startDateTextBox.datepicker('getDate');
                        var testEndDate = endDateTextBox.datepicker('getDate');
                        if (testStartDate > testEndDate)
                            endDateTextBox.datepicker('setDate', testStartDate);
                    }
                },
                onSelect: function (selectedDateTime) {
                    endDateTextBox.datepicker('option', 'minDate', startDateTextBox.datepicker(
                        'getDate'));
                }
            });
            endDateTextBox.datepicker({
                dateFormat: 'yy-mm-dd',
                onClose: function (dateText, inst) {
                    if (startDateTextBox.val() != '') {
                        var testStartDate = startDateTextBox.datepicker('getDate');
                        var testEndDate = endDateTextBox.datepicker('getDate');
                        if (testStartDate > testEndDate)
                            startDateTextBox.datepicker('setDate', testEndDate);
                    }
                },
                onSelect: function (selectedDateTime) {
                    startDateTextBox.datepicker('option', 'maxDate', endDateTextBox.datepicker(
                        'getDate'));
                }
            });

        });
        // <!-- จบปฏิทิน -->

    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid" style="margin-right:100px;margin-left:100px">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home">Rong Bom</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index_in">การจัดการโรงบ่มและอุปกรณ์</a></li>
                    <li><a href="pro">การจัดการกระบวนการบ่ม</a></li>
                    <li><a href="graph">กราฟสรุปข้อมูล</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <?php 
    if(isset($_SESSION['status'])=='เจ้าของ'){
                            ?>
                     <li class="nav-item dropdown d-none d-xl-inline-block">
                        <a class="dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                            aria-expanded="false">
                            <span class="glyphicon glyphicon-user hidden-xs"> <?php echo $_SESSION['name_user'];?></span>  </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                aria-labelledby="UserDropdown"  ><br>
                                    <div class="d-flex border-bottom w-100 justify-content-center" style="width:250px;height:160px;text-indent:1.5em;">
                                        <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                            <p class="mdi mdi-bookmark-plus-outline mr-0 text-gray">NAME : <?php echo $_SESSION['name_user'];?></p>
                                        </div>
                                        <div
                                            class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                                            <p class="mdi mdi-account-outline mr-0 text-gray">ID FARMER : <?php echo $_SESSION['id_farmer'];?></p>
                                        </div>
                                        <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                            <p class="mdi mdi-alarm-check mr-0 text-gray">STATUS : <?php echo $_SESSION['status'];?></p>
                                        </div>
                                        <hr class="my-4">
                                        <form action="regis_em">
                                        <div class="pull-left">
                                                  <button type="submit"
                                        class="btn btn-default btn_flat">Register Employee</button>
                                            </div> 
                                        </form>                                           
                                    </div>
                            </div>
                    </li>


                    <?php }
                            // ลูกจ้าง
                            else if(isset($_SESSION['status'])=='ลูกจ้าง'){
                            ?>
                    <li class="nav-item dropdown d-none d-xl-inline-block">
                        <a class="dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                            aria-expanded="false">
                            <span class="glyphicon glyphicon-user hidden-xs">
                                <?php echo $_SESSION['name_emp'];?></span> </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <br>
                            <div class="d-flex border-bottom w-100 justify-content-center"
                                style="width:250px;height:160px;text-indent:1.5em;">
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                    <p class="mdi mdi-bookmark-plus-outline mr-0 text-gray">NAME :
                                        <?php echo $_SESSION['name_emp'];?></p>
                                </div>
                               
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                    <p class="mdi mdi-alarm-check mr-0 text-gray">STATUS :
                                        <?php echo $_SESSION['status'];?></p>
                                </div>
                                <hr class="my-4">
                               
                            </div>
                        </div>
                    </li>

                    <?php } ?>
                    <li><a href="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav><br>

    <h3 style="text-align: center;">โรงบ่ม</h3><br>
    <?php 
    if(isset($_SESSION['status'])=='เจ้าของ'){
                            ?>

    <div class="container" style="width:500px;height:100px;text-align: center;">
        <div class="panel panel-default">
            <div class="panel-heading">ชื่อผู้ใช้</div>
            <div class="panel-body"><?php echo $_SESSION['name_user'];?></div>
        </div>
    </div>
    <?php } ?>
    <!-- end -->
    <br>

    <div class="container">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><span
                class='glyphicon glyphicon-plus' aria-hidden='true'></span>
            เพิ่มข้อมูล
        </button> <br> <br>

        <table id="example" class="table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr class="bg-danger">
                    <th scope="col" style="text-align: center;">NUM</th>
                    <th scope="col" style="text-align: center;">ID DEVICE</th>
                    <th scope="col" style="text-align: center;">KEY</th>
                    <th scope="col" style="text-align: center;">KEY</th>
                    <th scope="col" style="text-align: center;">KEY</th>
                    <th scope="col" style="text-align: center;">KEY</th>
                    <th scope="col" style="text-align: center;">KEY</th>


                    <th scope="col" style="text-align: center;">action</th>
                </tr>
            </thead>
            <tfoot>
                <tr class="bg-danger">
                    <th scope="col" style="text-align: center;">NUM</th>
                    <th scope="col" style="text-align: center;">ID DEVICE</th>
                    <th scope="col" style="text-align: center;">KEY</th>
                    <th scope="col" style="text-align: center;">KEY</th>
                    <th scope="col" style="text-align: center;">KEY</th>
                    <th scope="col" style="text-align: center;">KEY</th>
                    <th scope="col" style="text-align: center;">KEY</th>

                    <th scope="col" style="text-align: center;">action</th>
                </tr>
            </tfoot>

            <tbody>
                <?php 
             $farmer = (isset($_SESSION['id_farmer'])) ? $_SESSION['id_farmer'] : '';
             $sql = "SELECT * FROM pprocessb,users where pprocessb.id_farmer=users.id_farmer and pprocessb.id_farmer='$farmer' ";
              $result = $conn->query($sql) ;
              while($row = $result->fetch_assoc()) {
                      $no_pro = $row['no_pro'];
                      $id_pro = $row['id_pro'];
                      $name_pro = $row['name_pro'];
                      $rbom = $row['rbom'];
                      $stap_1 = $row['stap_1'];
                      $sdate_1 = $row['sdate_1'];
                      $edate_1 = $row['edate_1'];
                      $stap_2 = $row['stap_2'];
                      $sdate_2 = $row['sdate_2'];
                      $edate_2 = $row['edate_2'];
                      $stap_3 = $row['stap_3'];
                      $sdate_3 = $row['sdate_3'];
                      $edate_3 = $row['edate_3'];
                      $stap_4 = $row['stap_4'];
                      $sdate_4 = $row['sdate_4'];
                      $edate_4 = $row['edate_4'];
                      $id_farmer = $row['id_farmer'];    
                ?>

                <tr>
                    <td style="text-align: center;">
                        <?php echo $no_pro  ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo $id_pro ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo $name_pro; ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo $name_pro; ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo $name_pro; ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo $name_pro; ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo $name_pro; ?>
                    </td>

                    <td style="text-align: center;">
                        <a href="#edit<?php echo $no_pro; ?>" data-toggle="modal">
                            <button type='button' class='btn btn-warning btn-sm' title='แก้ไขข้อมูล'><span
                                    class='glyphicon glyphicon-edit' aria-hidden='true'></span></button>
                        </a>
                        <a href="#delete<?php echo $no_pro; ?>" data-toggle="modal">
                            <button type='button' class='btn btn-danger btn-sm' title='ลบข้อมูล'><span
                                    class='glyphicon glyphicon-trash' aria-hidden='true'></span></button>
                        </a>
                    </td>


                    <!-- edit Modal -->
                    <div class="modal fade" id="edit<?php echo $no_pro; ?>" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">แก้ไขข้อมูล</h4>
                                </div>

                                <div class="modal-body">

                                    <form>

                                    <div class="form-group row">
                            <div class="col-xs-4">
                                <label>ID กระบวนการบ่ม:</label>
                                <input class="form-control" id="id_pro" value="<?php echo $id_pro ?>"
                                name="id_pro">
                            </div>

                            <div class="col-xs-4">
                                <label>ชื่อการบ่ม</label>
                                <input class="form-control" id="name_pro" name="name_pro" value="<?php echo $name_pro ?>"
                                    type="text">
                            </div>

                            <div class="col-xs-4">
                                <label>โรงบ่ม</label>
                                <input class="form-control" id="rbom" name="rbom" value="<?php echo $rbom ?>"
                                    type="text">
                            </div><br><br><br><br>

                            <div class="col-xs-4">
                                <label>การบ่มช่วงแรก</label>
                                <select class="form-control" name="stap_1" id="stap_1" >
                                    <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                                    <option value="ช่วงทำสี">ช่วงทำสี</option>
                                    <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                                    <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                                    <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                                </select>
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่เริ่มการบ่ม</label>
                                <input class="form-control" name="sdate_1" value="<?php echo $sdate_1 ?>" type="text">
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่สิ้นสุดการบ่ม</label>
                                <input class="form-control" name="edate_1"
                                value="<?php echo $edate_1 ?>" type="text">
                            </div><br><br><br><br>

                            <div class="col-xs-4">
                                <label>การบ่มช่วงที่ 2:</label>
                                <select class="form-control" name="stap_2" id="stap_2" >
                                    <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                                    <option value="ช่วงทำสี">ช่วงทำสี</option>
                                    <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                                    <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                                    <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                                </select>
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่เริ่มการบ่ม:</label>
                                <input class="form-control" name="sdate_2"
                                value="<?php echo $sdate_2 ?>" type="text">
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่สิ้นสุดการบ่ม:</label>
                                <input class="form-control" id="edate_2" name="edate_2"
                                value="<?php echo $edate_2 ?>" type="text">
                            </div><br><br><br><br>

                            <div class="col-xs-4">
                                <label>การบ่มช่วงที่ 3:</label>
                                <select class="form-control" name="stap_3" id="stap_3" >
                                    <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                                    <option value="ช่วงทำสี">ช่วงทำสี</option>
                                    <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                                    <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                                    <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                                </select>
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่เริ่มการบ่ม:</label>
                                <input class="form-control" name="sdate_3"
                                value="<?php echo $sdate_3 ?>"type="text">
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่สิ้นสุดการบ่ม:</label>
                                <input class="form-control" name="edate_3"
                                value="<?php echo $edate_3 ?>"  type="text">
                            </div><br><br><br><br>

                            <div class="col-xs-4">
                                <label>การบ่มช่วงที่ 4:</label>
                                <select class="form-control" name="stap_4" id="stap_4">
                                    <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                                    <option value="ช่วงทำสี">ช่วงทำสี</option>
                                    <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                                    <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                                    <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                                </select>
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่เริ่มการบ่ม:</label>
                                <input class="form-control" id="sdate_4" name="sdate_4"
                                value="<?php echo $sdate_4 ?>" type="text">
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่สิ้นสุดการบ่ม:</label>
                                <input class="form-control" id="edate_4" name="edate_4"
                                value="<?php echo $edate_4 ?>"type="text">
                            </div>

                                    </form>
                                </div>



                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary" name="edit" data-target="#edit">
                                        Update data </button>
                                </div>

                            </div>
                        </div>
                    </div>
    </div>




    <!-- delete Modal -->
    <div class="modal fade" id="delete<?php echo $no_pro; ?>" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">ลบข้อมูลอุปกรณ์</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="" method="GET">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="delete_id" value="<?php echo $no_pro ; ?>">
                            <div class="alert alert-danger">คุณต้องการลบ <strong>
                                    <?php echo $name_pro; ?> </strong> หรือไม่?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="delete"
                                    data-target="#delete">ลบ</button>
                            </div>
                </form>

            </div>
        </div>
    </div>

    </tr>


    <?php
                    }
                     //Add Item        
                     if(isset($_GET['save'])){
                        $id_pro = $_GET['id_pro'];
                        $name_pro = $_GET['name_pro'];
                        $rbom = $_GET['rbom'];
                        $stap_1 = $_GET['stap_1'];
                        $sdate_1 = $_GET['sdate_1'];
                        $edate_1 = $_GET['edate_1'];
                        $stap_2 = $_GET['stap_2'];
                        $sdate_2 = $_GET['sdate_2'];
                        $edate_2 = $_GET['edate_2'];
                        $stap_3 = $_GET['stap_3'];
                        $sdate_3 = $_GET['sdate_3'];
                        $edate_3 = $_GET['edate_3'];
                        $stap_4 = $_GET['stap_4'];
                        $sdate_4 = $_GET['sdate_4'];
                        $edate_4 = $_GET['edate_4'];
                     
                        $farmer = (isset($_SESSION['id_farmer'])) ? $_SESSION['id_farmer'] : '';
                        $sql = "INSERT INTO pprocessb (id_pro,name_pro,rbom,stap_1,sdate_1,edate_1,stap_2,sdate_2,edate_2,stap_3,sdate_3,edate_3,stap_4,sdate_4,edate_4,id_farmer)  
                        VALUES ('$id_pro','$name_pro','$rbom','$stap_1','$sdate_1','$edate_1','$stap_2','$sdate_2','$edate_2','$stap_3','$sdate_3','$edate_3','$stap_4','$sdate_4','$edate_4','$farmer') ";
                        if ($conn->query($sql) === TRUE) {
                            if ($conn) {
                                echo  $alert = "<div class='alert alert-succes'>
                     
                                </div>";
                                echo '<script>window.location.href="pro"</script>';
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                     }

                 //Update Items
                 if(isset($_GET['edit'])){
                    $no_pro = $_GET['no_pro'];
                    $id_pro = $_GET['id_pro'];
                    $name_pro = $_GET['name_pro'];
                    $rbom = $_GET['rbom'];
                    $stap_1 = $_GET['stap_1'];
                    $sdate_1 = $_GET['sdate_1'];
                    $edate_1 = $_GET['edate_1'];
                    $stap_2 = $_GET['stap_2'];
                    $sdate_2 = $_GET['sdate_2'];
                    $edate_2 = $_GET['edate_2'];
                    $stap_3 = $_GET['stap_3'];
                    $sdate_3 = $_GET['sdate_3'];
                    $edate_3 = $_GET['edate_3'];
                    $stap_4 = $_GET['stap_4'];
                    $sdate_4 = $_GET['sdate_4'];
                    $edate_4 = $_GET['edate_4'];
                    
                  
                    $sql = "UPDATE  pprocessb 
                            SET  id_pro='$id_pro',
                            id_pro='$id_pro',
                            name_pro='$name_pro',
                            rbom='$rbom',
                            stap_1='$stap_1',
                            sdate_1='$sdate_1',
                            edate_1='$edate_1',
                            stap_2='$stap_2',
                            sdate_2='$sdate_2',
                            edate_2='$edate_2',
                            stap_3='$stap_3',
                            sdate_3='$sdate_3',
                            edate_3='$edate_3',
                            stap_4='$stap_4',
                            sdate_4='$sdate_4',
                            edate_4='$edate_4'
                            WHERE no_pro=$no_pro";
                    if ($conn->query($sql) === TRUE) {
                        echo '<script>window.location.href="pro"</script>';
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }
                }

                // Delete
                if(isset($_GET['delete'])){
                    // sql to delete a record
                    $delete_id = $_GET['delete_id'];
                    $sql = "DELETE FROM devices WHERE no_devi   ='$delete_id' ";
                    if ($conn->query($sql) === TRUE) {
                        $sql = "DELETE FROM devices WHERE no_devi  ='$delete_id' ";
                        if ($conn->query($sql) === TRUE) {
                            $sql = "DELETE FROM devices WHERE no_devi ='$delete_id' ";
                            echo '<script>window.location.href="index_de"</script>';
                        } else {
                            echo "Error deleting record: " . $conn->error;
                        }
                    } else {
                        echo "Error deleting record: " . $conn->error;
                    }
                }
                
?>
    </tbody>
    </table>

    </div>

    <!--Add Item Modal -->
   
    <div class="modal fade" id="exampleModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">กระบวนการบ่ม</h4>
                </div>

                <div class="modal-body">

                    <form>

                        <div class="form-group row">
                            <div class="col-xs-4">
                                <label>ID กระบวนการบ่ม:</label>
                                <input class="form-control" id="id_pro" name="id_pro" type="text"
                                    placeholder="ID กระบวนการบ่ม">
                            </div>

                            <div class="col-xs-4">
                                <label>ชื่อการบ่ม</label>
                                <input class="form-control" id="name_pro" name="name_pro" placeholder="ชื่อการบ่ม"
                                    type="text">
                            </div>

                            <div class="col-xs-4">
                                <label>เลือกโรงบ่ม</label>
                                <select class="form-control" name="rbom" id="rbom" >
                                <option value="" disabled selected>เลือกโรงบ่ม</option>
                                <?php
                            $farmer = (isset($_SESSION['id_farmer'])) ? $_SESSION['id_farmer'] : '';
                            $sql = "SELECT * FROM incubs,users where incubs.id_farmer=users.id_farmer and incubs.id_farmer='$farmer'";
                             $result = $conn->query($sql);
                                 while($row = $result->fetch_assoc()) {
                                   $name_in = $row['name_in'];
                            ?>
                                    <option value='<?php echo $name_in ?>'><?php echo $name_in?></option>
                                    <?php } ?>
                                </select>
                            </div><br><br><br><br>

                            <div class="col-xs-4">
                                <label>การบ่มช่วงแรก</label>
                                <select class="form-control" name="stap_1" id="stap_1" >
                                    <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                                    <option value="ช่วงทำสี">ช่วงทำสี</option>
                                    <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                                    <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                                    <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                                </select>
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่เริ่มการบ่ม</label>
                                <input class="form-control" id="sdate_1" name="sdate_1"
                                    placeholder="คลิ๊กเพื่อเลือกวันที่เริ่มกระบวนการบ่ม" type="text">
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่สิ้นสุดการบ่ม</label>
                                <input class="form-control" id="edate_1" name="edate_1"
                                    placeholder="คลิ๊กเพื่อเลือกวันที่สิ้นสุดกระบวนการการบ่ม" type="text">
                            </div><br><br><br><br>

                            <div class="col-xs-4">
                                <label>การบ่มช่วงที่ 2:</label>
                                <select class="form-control" name="stap_2" id="stap_2" >
                                    <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                                    <option value="ช่วงทำสี">ช่วงทำสี</option>
                                    <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                                    <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                                    <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                                </select>
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่เริ่มการบ่ม:</label>
                                <input class="form-control" id="sdate_2" name="sdate_2"
                                    placeholder="คลิ๊กเพื่อเลือกวันที่เริ่มกระบวนการบ่ม" type="text">
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่สิ้นสุดการบ่ม:</label>
                                <input class="form-control" id="edate_2" name="edate_2"
                                    placeholder="คลิ๊กเพื่อเลือกวันที่สิ้นสุดกระบวนการการบ่ม"type="text">
                            </div><br><br><br><br>

                            <div class="col-xs-4">
                                <label>การบ่มช่วงที่ 3:</label>
                                <select class="form-control" name="stap_3" id="stap_3" >
                                    <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                                    <option value="ช่วงทำสี">ช่วงทำสี</option>
                                    <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                                    <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                                    <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                                </select>
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่เริ่มการบ่ม:</label>
                                <input class="form-control" id="sdate_3" name="sdate_3"
                                    placeholder="คลิ๊กเพื่อเลือกวันที่เริ่มกระบวนการบ่ม" type="text">
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่สิ้นสุดการบ่ม:</label>
                                <input class="form-control" id="edate_3" name="edate_3"
                                    placeholder="คลิ๊กเพื่อเลือกวันที่สิ้นสุดกระบวนการการบ่ม"  type="text">
                            </div><br><br><br><br>

                            <div class="col-xs-4">
                                <label>การบ่มช่วงที่ 4:</label>
                                <select class="form-control" name="stap_4" id="stap_4" >
                                    <option value="" disabled selected>เลือกช่วงการบ่ม</option>
                                    <option value="ช่วงทำสี">ช่วงทำสี</option>
                                    <option value="ช่วงตรึงสี">ช่วงตรึงสี</option>
                                    <option value="ช่วงทำใบแห้ง">ช่วงทำใบแห้ง</option>
                                    <option value="ช่วงทำก้านแห้ง">ช่วงทำก้านแห้ง</option>
                                </select>
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่เริ่มการบ่ม:</label>
                                <input class="form-control" id="sdate_4" name="sdate_4"
                                    placeholder="คลิ๊กเพื่อเลือกวันที่เริ่มกระบวนการบ่ม" type="text">
                            </div>

                            <div class="col-xs-4">
                                <label>วันที่สิ้นสุดการบ่ม:</label>
                                <input class="form-control" id="edate_4" name="edate_4"
                                    placeholder="คลิ๊กเพื่อเลือกวันที่สิ้นสุดกระบวนการการบ่ม" type="text">
                            </div>

                    </form>
                </div>



                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="save" data-target="#save">
                            บันทึกข้อมูล </button>
                </div>

            </div>
        </div>
    </div>
    </div>





</body>

</html>
