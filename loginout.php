<?php
    session_start();


    if (isset($_SESSION['login'])) {
        unset($_SESSION['login']);
        header("Location:index.html");
        exit();
    } else {
        $_SESSION['from'] = "index.html";
        header("Location:login.html");
        exit();
    }
?>