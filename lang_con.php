<?php
    session_start();

    
    if ($_SESSION['lang'] == "kor") {
        $_SESSION['lang'] = "cna";
    } else if ($_SESSION['lang'] == "cna") {
        $_SESSION['lang'] = "kor";
    }

    header("Location:index.html");
?>