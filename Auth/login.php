<?php
   include ("../path.php");
   include_once(ROOT_PATH . '/bootstrap/bootstrap.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LOGIN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="../layouts/logo.jpg"/>
        <link rel="stylesheet" type="text/css" href="../layouts/auth/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../layouts/auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../layouts/auth/vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="../layouts/auth/vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="../layouts/auth/vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="../layouts/auth/css/util.css">
        <link rel="stylesheet" type="text/css" href="../layouts/auth/css/main.css">
    </head>
    <body class="bg-light">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="../layouts/logo.jpg" alt="IMG">
                </div>

                <form class="login100-form validate-form" action="" method="post">
                        <span class="login100-form-title">
                            Login
                        </span>
                     <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
                            $cnt = Authentication::loginUser($_POST);
                        }
                        if (isset($cnt)) {
                            echo $cnt ;
                        }
                    ?>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" name="login" class="login100-form-btn">
                            Login
                        </button>
                    </div>


                    <div class="text-center p-t-136">
                        <a class="txt2" href="#">
                            Powered by <strong>BACK-BONE</strong>
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../layouts/auth/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../layouts/auth/vendor/bootstrap/js/popper.js"></script>
    <script src="../layouts/auth/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../layouts/auth/vendor/select2/select2.min.js"></script>
    <script src="../layouts/auth/vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="../layouts/auth/js/main.js"></script>
    </body>
</html