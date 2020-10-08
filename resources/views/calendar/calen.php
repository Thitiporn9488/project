<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">

  <div class="panel panel-default">
    <div class="panel-heading"  style="background-color: #c97b63;">Panel Heading
    
    
    </div>
    <div class="panel-body" style="background-color: #c97b63;">Panel Content</div>
    <div class="panel-footer" style="background-color: #c97b63;">Panel Footer</div>
  </div>

</div>

</body>
</html>


<div class="panel panel-default" >
                 <div class="panel-heading" >
                     <h5 class="panel-heading" style="background-color: #c97b63;">

                     <form>
                     <div class="form-group row"><br>

                     <div class="col-xs-3" style="margin-left:60px">
                         <label>ID กระบวนการบ่ม:</label><br><br>
                         <input style="background-color: #ffddc1; " class="form-control" id="id_pro" name="id_pro" type="text" 
                          value="'.$row['id_pro'].'"'.$row['id_pro'].' readonly>
                     </div>

                     <div class="col-xs-3">
                         <label>ชื่อการบ่ม:</label><br><br>
                         <input style="background-color: #ffddc1; " class="form-control" id="name_pro" name="name_pro" type="text" value="'.$row['name_pro'].'"'.$row['name_pro'].' readonly>
                     </div>

                     <div class="col-xs-3">
                         <label>โรงบ่ม:</label><br><br>
                         <input class="form-control" id="rbom" name="rbom" type="text" value="'.$row['rbom'].'"'.$row['rbom'].' readonly>
                     </div>

                     <a href="#edit'.$row['no_pro'].'"'.$row['no_pro'].'" data-toggle="modal" style="margin-left:100px">
                            <button type="button" class="btn btn-info btn-sm" title="แก้ไขข้อมูล"><span
                                    class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                        </a>

                 <a href="#delete'.$row['no_pro'].'"'.$row['no_pro'].'" data-toggle="modal" tyle="text-align:right;">
                     <button type="button" class="btn btn-danger btn-sm" title="ลบข้อมูล"><span
                             class="glyphicon glyphicon-trash" ></span></button>
                 </a>

                     </div><br>
                   

                            
                         </form>
                     </h5>
                 </div>
                 
                 <div class="panel-body" style="background-color: #ffab91;">
     
                     <form class="form-inline" action="">
                         <div class="form-group" >
                             <label style="margin-left:25px">การบ่มช่วงแรก:</label>
                             <input type="text" class="form-control"  name="stap_1" value="'.$row['stap_1'].'"'.$row['stap_1'].'  readonly>  
                      
                             <label  style="margin-left:60px">วันที่เริ่มการบ่ม:</label>
                             <input type="text" class="form-control"   name="sdate_1" value="'.$row['sdate_1'].'"'.$row['sdate_1'].'  readonly>
                     
                             <label for="edate_1" style="margin-left:60px">วันที่สิ้นสุดการบ่ม:</label>
                             <input type="text" class="form-control" name="edate_1" value="'.$row['edate_1'].'"'.$row['edate_1'].'  readonly> 
                        <br><br>

                            <label style="margin-left:330px">อุณหภูมิต่ำกว่าที่กำหนด:</label>
                            <input type="text" class="form-control" name="edate_1" value="'.$row['edate_1'].'"'.$row['edate_1'].'  readonly> 

                            <label for="edate_1"  style="margin-left:18px">อุณหภูมิสูงกว่าที่กำหนด:</label>
                            <input type="text" class="form-control" name="edate_1" value="'.$row['edate_1'].'"'.$row['edate_1'].'  readonly> 
                        <br><br>

                            <label style="margin-left:328px">ความชื้นต่ำกว่าที่กำหนด:</label>
                            <input type="text" class="form-control" name="edate_1" value="'.$row['edate_1'].'"'.$row['edate_1'].'  readonly> 

                            <label for="edate_1"  style="margin-left:17px">ความชื้นสูงกว่าที่กำหนด:</label>
                            <input type="text" class="form-control" name="edate_1" value="'.$row['edate_1'].'"'.$row['edate_1'].'  readonly> 
                        </div><br><br>

                     </form>
     
                     <form class="form-inline" action="">
                         <div class="form-group">
                             <label  style="margin-left:29px">การบ่มช่วงที่ 2:</label>
                             <input type="text" class="form-control" name="stap_2" value="'.$row['stap_2'].'"'.$row['stap_2'].'  readonly>
                        
                             <label style="margin-left:60px">วันที่เริ่มการบ่ม:</label>
                             <input type="text" class="form-control"name="sdate_2" value="'.$row['sdate_2'].'"'.$row['sdate_2'].'  readonly>
                        
                             <label style="margin-left:60px">วันที่สิ้นสุดการบ่ม:</label>
                             <input type="text" class="form-control" name="edate_2" value="'.$row['edate_2'].'"'.$row['edate_2'].'  readonly>
                         </div><br><br>

                         <div class="form-group" >
                            <label style="margin-left:330px">อุณหภูมิต่ำกว่าที่กำหนด:</label>
                            <input type="text" class="form-control" name="edate_1" value="'.$row['edate_1'].'"'.$row['edate_1'].'  readonly> 

                            <label for="edate_1"  style="margin-left:18px">อุณหภูมิสูงกว่าที่กำหนด:</label>
                            <input type="text" class="form-control" name="edate_1" value="'.$row['edate_1'].'"'.$row['edate_1'].'  readonly> 
                        </div><br><br>

                     
                        <div class="form-group" >
                            <label style="margin-left:328px">ความชื้นต่ำกว่าที่กำหนด:</label>
                            <input type="text" class="form-control" name="edate_1" value="'.$row['edate_1'].'"'.$row['edate_1'].'  readonly> 

                            <label for="edate_1"  style="margin-left:17px">ความชื้นสูงกว่าที่กำหนด:</label>
                            <input type="text" class="form-control" name="edate_1" value="'.$row['edate_1'].'"'.$row['edate_1'].'  readonly> 
                        </div><br><br>
                     </form>
     
                     <form class="form-inline" action="">

                         <div class="form-group">
                             <label  style="margin-left:29px">การบ่มช่วงที่ 3:</label>
                             <input type="text" class="form-control"name="stap_3" value="'.$row['stap_3'].'"'.$row['stap_3'].'  readonly>
                        
                             <label  style="margin-left:60px">วันที่เริ่มการบ่ม:</label>
                             <input type="text" class="form-control" name="sdate_3" value="'.$row['sdate_3'].'"'.$row['sdate_3'].' readonly>
                         
                             <label  style="margin-left:60px">วันที่สิ้นสุดการบ่ม:</label>
                             <input type="text" class="form-control"  name="edate_3" value="'.$row['edate_3'].'"'.$row['edate_3'].'  readonly>
                         </div><br><br>

                         <div class="form-group" >
                            <label style="margin-left:330px">อุณหภูมิต่ำกว่าที่กำหนด:</label>
                            <input type="text" class="form-control" name="edate_1" value="'.$row['edate_1'].'"'.$row['edate_1'].'  readonly> 

                            <label for="edate_1"  style="margin-left:18px">อุณหภูมิสูงกว่าที่กำหนด:</label>
                            <input type="text" class="form-control" name="edate_1" value="'.$row['edate_1'].'"'.$row['edate_1'].'  readonly> 
                         </div><br><br>

                     
                         <div class="form-group" >
                            <label style="margin-left:328px">ความชื้นต่ำกว่าที่กำหนด:</label>
                            <input type="text" class="form-control" name="edate_1" value="'.$row['edate_1'].'"'.$row['edate_1'].'  readonly> 

                            <label style="margin-left:17px">ความชื้นสูงกว่าที่กำหนด:</label>
                            <input type="text" class="form-control" name="edate_1" value="'.$row['edate_1'].'"'.$row['edate_1'].'  readonly> 
                         </div><br><br>

                     </form>
     
                     <form class="form-inline" action="">
                         <div class="form-group">
                             <label  style="margin-left:29px">การบ่มช่วงที่ 4:</label>
                             <input type="text" class="form-control" name="stap_4" value="'.$row['stap_4'].'"'.$row['stap_4'].'  readonly>
                        
                             <label  style="margin-left:60px">วันที่เริ่มการบ่ม:</label>
                             <input type="text" class="form-control" name="sdate_4" value="'.$row['sdate_4'].'"'.$row['sdate_4'].'  readonly>
                        
                             <label  style="margin-left:60px">วันที่สิ้นสุดการบ่ม:</label>
                             <input type="text" class="form-control" name="edate_4" value="'.$row['edate_4'].'"'.$row['edate_4'].'  readonly>
                         </div><br><br>
                         
                         <div class="form-group">
                            <label  style="margin-left:330px">อุณหภูมิต่ำกว่าที่กำหนด:</label>
                            <input type="text" class="form-control" name="edate_1" value="'.$row['edate_1'].'"'.$row['edate_1'].'  readonly> 

                            <label style="margin-left:18px">อุณหภูมิสูงกว่าที่กำหนด:</label>
                            <input type="text" class="form-control" name="edate_1" value="'.$row['edate_1'].'"'.$row['edate_1'].'  readonly> 
                         </div><br><br>

                     
                        <div class="form-group" >
                            <label style="margin-left:328px">ความชื้นต่ำกว่าที่กำหนด:</label>
                            <input type="text" class="form-control" name="edate_1" value="'.$row['edate_1'].'"'.$row['edate_1'].'  readonly> 

                            <label  style="margin-left:17px">ความชื้นสูงกว่าที่กำหนด:</label>
                            <input type="text" class="form-control" name="edate_1" value="'.$row['edate_1'].'"'.$row['edate_1'].'  readonly> 
                        </div><br><br><br>
                         
                     </form>
                 </div>
                 <div class="panel-footer" style="background-color: #c97b63;">
                 </div>
             </div><br>