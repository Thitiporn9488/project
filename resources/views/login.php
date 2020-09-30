<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<style>
#login{
    width: 350px;
    margin: auto;
    margin-top: 160px;
    background-color: whitesmoke;   
}
#body {
    background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://www.cigna.co.th/sites/default/files/pictures/travel-nature-place-family-1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 110%;
  }

</style>

<body id="body" >


    <form action="checklogin" method="GET">
        <div class="card" id="login"><br>
            <h style="text-align: center;">LOGIN</h>
            <div  class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input name="username"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <button type="submit" value ="login" name="login" class="btn btn-primary form-control">Login</button>
            </form>
                <form action="register" method="GET" >
                    <button type="submit" value ="register" name="send" class="btn btn-primary form-control" style="margin-top:3px;" >Register Farmer</button>
                </form>
            </div>
        </div>
</body>


</html>