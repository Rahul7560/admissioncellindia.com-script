<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ACI</title>
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="marg">
    <!-- partial:index.partial.html -->
    <div class="main-bg">
        <div id="a">
            <div class="circle-ripple"></div>
        </div>
        <div class="box-conatiner  ">


            <div class="row">
                <div class="col-md-6   col-sm-6">
                    <div class="logo ">
                        <img src="image/logo.png" alt="" srcset="">
                    </div>
                    <div align="center">
                        <h1 class="heading-left ">Admission Cell India</h1>
                        <h2 class="launch">We are launching soon !</h2>
                    </div>
                </div>
                <!-- main tele and office-->
                <div id="window-login" class="col-sm-6 col-md-6">
                    <div class="wrap-login100">
                        <span class="login100-form-title">
                            Staff Sign In </span>
                        <div class="container" align="center">
                            <?php 
                            error_reporting(0);
                            $x=$_GET['out'];
                            if ( $x == 1)
                            {
                                ?>
                            

 
                    
                            
                            <h6 class=" boo mt-3 text-danger">Wrong username/ Password you entered</h6>
                            <?php } ?>

                        
                            <div class="container-w ">

                                <button class="login100-form-btn shadow" onclick="office()">
                                    Office staff

                                </button>
                                <button class="login100-form-btn mt-4 shadow" onclick="tele()">
                                    tele marketing

                                </button>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- tele staff login-->

                <div id="tele">

                    <div class="col-sm-6 col-md-6">
                        <div class="wrap-login100">
                            <span class="login100-form-title">
                                Tele Marketing
                            </span>
                            <form class="login100-form validate-form p-l-55 p-r-55 p-t-20" method="POST" action="telemarketing/admin.php">

                                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                                    <input class="input100" type="text" name="u" placeholder="Username">
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Please enter password">
                                    <input class="input100" type="password" name="p" placeholder="Password">
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="text-right p-t-13 p-b-23">
                                    <span class="txt1">
                                        Forgot
                                    </span>
                                    <a href="#" class="txt2">
                                        Username / Password?
                                    </a>
                                </div>
                                <div class="container-login100-form-btn">
                                    <button class="login100-form-btn">
                                        Sign in
                                    </button>
                                </div>
                                <div class="text-primary mt-3" align="center">
                                     <a href="create.php" class="text-primary"><strong>Create New Account</strong></a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>





        </div>
        <!-- office staff login-->
        <div id="office">

            <div class="col-sm-6 col-md-6">
                <div class="wrap-login100">
                    <span class="login100-form-title">
                        Office staff
                    </span>
                    <form class="login100-form validate-form p-l-55 p-r-55 p-t-20" method="POST" action="staff/admin.php">

                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                            <input class="input100" type="text" name="u" placeholder="Username">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Please enter password">
                            <input class="input100" type="password" name="p" placeholder="Password">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="text-right p-t-13 p-b-23">
                            <span class="txt1">
                                Forgot
                            </span>
                            <a href="#" class="txt2">
                                Username / Password?
                            </a>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Sign in
                            </button>
                        </div>
                        <div class="flex-col-c p-t-140 p-b-40">
                            <span class="txt1 p-b-9">
                                Don’t have an account?
                            </span>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- mobile version-->
    <div id="window-logins" class="container-sm">
        <div class=" wrap-login100">
            <span class="login100-form-title">
                Staff Sign In </span>
            <div class="container" align="center">
            <?php 
                            if(
                            $x==1)
                            {
                                ?>
                    
                            
                            <h6 class="  mt-3 text-danger">Wrong username/ Password you entered</h6>
                            <?php }
                            ?>
                <div class="container-w ">
                    <button class="login100-form-btn shadow padd" onclick="office()">
                        Office staff

                    </button>
                    <button class="login100-form-btn mt-4 shadow padd " onclick="tele2()">
                        tele marketing

                    </button>
                </div>
            </div>

        </div>
    </div>


    <div id="tele2" align="center">

        <div class="col-sm-6 col-md-6">
            <div class="wrap-login100">
                <span class="login100-form-title">
                    Tele Marketing
                </span>
                <form class="login100-form validate-form p-l-55 p-r-55 p-t-20" method="POST" action="telemarketing/admin.php">

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                        <input class="input100" type="text" name="u" placeholder="Username">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Please enter password">
                        <input class="input100" type="password" name="p" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="text-right p-t-13 p-b-23">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a href="#" class="txt2">
                            Username / Password?
                        </a>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Sign in
                        </button>
                    </div>
                                <div class="text-primary mt-3" align="center">
                                     <a href="create.php" class="text-primary"><strong>Create New Account</strong></a>
                                </div>
                </form>
            </div>
        </div>

    </div>
    </div>
    <div id="a">
        <div class=" flt circle-ripple"></div>
    </div>
    </div>
    <script>
        document.getElementById("tele").style.display = "none";
        document.getElementById("tele2").style.display = "none";

        document.getElementById("office").style.display = "none";

        function tele() {
            document.getElementById("window-login").style.display = "none";
            document.getElementById("window-logins").style.display = "none";

            document.getElementById("tele").style.display = "block";



        }
        function tele2() {
            document.getElementById("window-logins").style.display = "none";

            document.getElementById("tele2").style.display = "block";



        }
        function office() {
            document.getElementById("window-login").style.display = "none";
            document.getElementById("window-logins").style.display = "none";

            document.getElementById("tele").style.display = "none";


            document.getElementById("office").style.display = "block";

        }
    </script>
    <!-- partial -->

</body>

</html>