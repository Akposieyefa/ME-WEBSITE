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
    <link rel="stylesheet" type="text/css" href="../layouts/auth/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="../layouts/auth/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../layouts/auth/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../layouts/auth/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="../layouts/auth/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../layouts/auth/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="../layouts/auth/css/util.css">
    <link rel="stylesheet" type="text/css" href="../layouts/auth/css/main.css">
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-landscape"></i>
                    </span>
            <span class="login100-form-title p-b-34 p-t-27">
                            Log in
                    </span>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
                $cnt = Authentication::loginUser($_POST);
            }
            if (isset($cnt)) {
            }
                echo $cnt ;
            ?>
            <form class="" action="" method="post">

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Enter new password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Confirm new password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn"  type="submit" name="login">
                        Reset Password
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>
<script src="../layouts/auth/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="../layouts/auth/vendor/animsition/js/animsition.min.js"></script>
<script src="../layouts/auth/vendor/bootstrap/js/popper.js"></script>
<script src="../layouts/auth/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../layouts/auth/vendor/select2/select2.min.js"></script>
<script src="../layouts/auth/vendor/daterangepicker/moment.min.js"></script>
<script src="../layouts/auth/vendor/daterangepicker/daterangepicker.js"></script>
<script src="../layouts/auth/vendor/countdowntime/countdowntime.js"></script>
<script src="../layouts/auth/js/main.js"></script>

</body>
</html>