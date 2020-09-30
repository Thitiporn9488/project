<?php
  $datadb = "testpj";
  $servername = "localhost";
  $username = "root";
  $password = "";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $datadb);
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>
 
 <form id="save"> 
 <p>Date: <input type="text" id="datepicker"></p>
  <button type="submit" id="save">save</button>
  </form>

  <?php

         //Add Item        
         if(isset($_GET['save'])){
            $datepicker = $_GET['datepicker'];

            $sql = "INSERT INTO calen (date)  VALUES ('$date') ";
            if ($conn->query($sql) === TRUE) {
                if ($conn) {
                    echo '<script>
                    swal({
                        title: "สร้างผลงานเรียบร้อย",
                        icon: "success",
                        button: "ตกลง",
                        
                    }); 
</script>';

                    echo '<script>window.location.href="calen"</script>';
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
  
  ?>
 
</body>
</html>