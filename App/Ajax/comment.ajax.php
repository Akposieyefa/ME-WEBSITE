<?php
    include ('../../path.php');
    include(ROOT_PATH. '/bootstrap/bootstrap.php');
    if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment'])) {
        if (empty($_POST['id']) || empty($_POST['email']) || empty($_POST['email']) || empty($_POST['comment'])) {
            echo "All fields are required";
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
                echo "Email address must be valid";
        }else {
            $create = Comment::commentCreate($_POST);
            if ($create){
                echo "Thanks for sending in your comment". " ". $_POST['name'];
            }else {
                echo "Error";
            }
        }

    }