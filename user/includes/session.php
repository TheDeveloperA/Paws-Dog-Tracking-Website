<?php

    include('config.php');

    session_start();
    $user_check = $_SESSION['login_user'];

    $ses_sql = mysqli_query($db,"select users_email from users where users_email = '$user_check' ");

    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

    $login_session = $row['users_email'];

    if(!isset($_SESSION['login_user']) && !empty($_SESSION['login_user'])) {
        header("location:login.php");

    }
