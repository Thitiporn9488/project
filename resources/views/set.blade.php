<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

$users = DB::table('users')->get();
//select * from `users`

foreach ($users as $user) {
    echo $user->name;
}

?>


</body>
</html>