<?php

if (isset($_POST['send_message'])) {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];


    if (empty($name) || empty($email) || empty($msg)) {
        header('location:index.php?error');
    } else {
        $to = "nickbenz@gmail.com";
        if (mail($to, $email, $msg)) {
            header("location:index.php?success");
        }
    }
} else {
    header("location:index.php");
}
