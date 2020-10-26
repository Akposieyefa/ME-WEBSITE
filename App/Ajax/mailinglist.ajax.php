<?php
    include ('../../path.php');
    include(ROOT_PATH. '/bootstrap/bootstrap.php');
    if (isset($_POST['email'])) {
        if (empty($_POST['email'])) {
            echo "Email fields are required";
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
            echo "Email address must be valid";
        }else {
            $create = Mailing::mailingListCreate($_POST);
            if ($create){
                echo "Thanks for subscribing to our news letter". " ". $_POST['email'];
            }else {
                echo "Error";
            }
        }
    }