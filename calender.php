<?php
    session_start();


    $got = array_keys($_POST);      //한자리숫자 + 날짜[날] 형식으로 값을 받는다
    $a = substr($got[0], 0, 1);
    $b = substr($got[0], 1);


    /* 숫자가 10보닺 작으면 앞에 0을 붙임 */
    if ($b < 10) {
        $b = "0".$b;
    }


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


    $_SESSION['set_day'] = $b;
    header("Location:index.html");
?>