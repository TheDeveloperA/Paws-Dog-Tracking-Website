<?php

    include('config.php');

    session_start();
    $user_check = $_SESSION['login_user'];

    $ses_sql = mysqli_query($db,"select user_id from user where user_id = '$user_check' ");

    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

    $login_session = $row['users_id'];

    if(!isset($_SESSION['login_user']) && !empty($_SESSION['login_user'])) {
        header("location:login.php");

    }
