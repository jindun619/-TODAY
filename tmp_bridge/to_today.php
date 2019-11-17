<?php
    session_start();


    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $dow = date("l");


    $_SESSION['set_year'] = $year;
    $_SESSION['set_month'] = $month;
    $_SESSION['set_day'] = $day;
    $_SESSION['set_dow'] = $dow;

    header("Location:../index.html");
?>