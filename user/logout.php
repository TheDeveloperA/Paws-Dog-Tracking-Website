<?php

    include ("includes/config.php");
    session_start();

    if(session_destroy()) {

        header("Location: ../index.php");
    }