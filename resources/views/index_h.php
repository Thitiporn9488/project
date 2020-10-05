
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

    <style>
        /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
        .login,
        .image {
            min-height: 100vh;
        }

        .bg-image {
            background-image: url('https://png.pngtree.com/png-vector/20190130/ourlarge/pngtree-hand-painted-green-plants-floating-leaves-plantgreen-leafleavesplant-leavesfloat-png-image_650165.jpg');
            background-size: 400px;
            background-position: center center;
        }

        .row.no-gutters {
            margin-right: 0;
            margin-left: 0;
        }

        .row.no-gutters>[class^="col-"],
        .row.no-gutters>[class*=" col-"] {
            padding-right: 0;
            padding-left: 0;
        }

    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-7 d-none d-md-flex bg-image">

                <h5 class="display-1" style="position:relative;width:100%;left:80px;font-size: 100px; font-weight: 800;"><br><br>
                    <font color="Maroon"> RONG BOM </font>
                </h5>

            </div>


            <!-- The content half -->
            <div class="col-md-5 bg-dark">
                <div class="login d-flex align-items-center py-5">

                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h3 class="display-4">
                                    <font color="red"> LOGIN </font>
                                </h3><br><br>

                                <form action="checklogin">
                                    <div class="form-group mb-3">
                                        <input name="username" id="username" type="text" placeholder="USERNAME"
                                            required="" autofocus=""
                                            class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input name="password" id="password" type="password" placeholder="PASSWORD"
                                            required=""
                                            class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                    </div><br>
                                    <!-- <div class="custom-control custom-checkbox mb-3">
                                        <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                        <label for="customCheck1" class="custom-control-label">Remember password</label>
                                    </div> -->
                                    <button type="submit"
                                        class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">LOGIN</button>
                                    <hr width="100%" size="30" color="red">
                                    <p>
                                </form>
                                <form action="register">
                                    <button type="submit"
                                        class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Register
                                        Farmer</button>
                                    <div class="text-center d-flex justify-content-between mt-4">
                                </form>
                            </div>
                            <div class="text-center d-flex justify-content-between mt-4 ">
                                <p>Register admin<a href="regis_ad" class="font-italic text-muted">
                                        <u>Register admin</u></a></p>
                            </div>

                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
    </div>







</body>

</html>
