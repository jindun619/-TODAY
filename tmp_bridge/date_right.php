<?php
    session_start();
    include "../months_lib.php";


    /* minusing month */
    if ($_SESSION['set_month'] == 12) {
        $_SESSION['set_year']++;
        $_SESSION['set_month'] = 1;
    } else {
        $_SESSION['set_month']++;
    }
    $_SESSION['set_day'] = "01";


    /* add 0 to the day if <10 */
    if ($_SESSION['set_month'] < 10) {
        $_SESSION['set_month'] = "0".$_SESSION['set_month'];
    }


    $a = $months_lib[$_SESSION['set_year']][$_SESSION['set_month']]['first_day'];
    /* 1->Saturday, 2->Monday ... */
    if ($a == 1) {
        $_SESSION['set_dow'] = "Sunday";
    } else if ($a == 2) {
        $_SESSION['set_dow'] = "Monday";
    } else if ($a == 3) {
        $_SESSION['set_dow'] = "Tuesday";
    } else if ($a == 4) {
        $_SESSION['set_dow'] = "Wednesday";
    } else if ($a == 5) {
        $_SESSION['set_dow'] = "Thursday";
    } else if ($a == 6) {
        $_SESSION['set_dow'] = "Friday";
    } else if ($a == 7) {
        $_SESSION['set_dow'] = "Saturday";
    }


    header("Location:../index.html");
?>