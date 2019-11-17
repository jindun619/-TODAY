<?php
    session_start();
    include "function.php";
    $conn = conn_db();


    unset($_SESSION['error']);


    $id = $_POST['id'];
    $pw = $_POST['pw'];


    /* if ID is empty */
    if (empty($_POST['id'])) {
        $_SESSION['error'] = "empty_id";
        header("Location:login.html");
        exit();
    }
    // if PW is empty
    if (empty($_POST['pw'])) {
        $_SESSION['error'] = "empty_pw";
        header("Location:login.html");
        exit();
    }


    /* getting user datas */
    $query = "SELECT id_num, id, pw FROM users";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
    

    /*  */
    foreach ($users as $key => $value) {
        if ($users[$key]['id'] == $id) {
            if ($users[$key]['pw'] == $pw) {
                $_SESSION['login'] = $users[$key]['id_num'];
                break;
            } else {
                $_SESSION['error'] = "wrong_pw";       //right ID, but wrong PW
                header("Location:login.html");
                exit();
            }
        }
    }
    //no id matched
    if (!isset($_SESSION['login'])) {
        $_SESSION['error'] = "wrong_id";
        header("Location:login.html");
        exit();
    }


    header("Location:".$_SESSION['from']);
?>