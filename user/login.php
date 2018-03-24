<?php
    include ("includes/Config.php");

    /*Creates a session, which is just a way to store data for individual users*/
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $emailAddress = mysqli_real_escape_string($db,$_POST['email']);
        $password = mysqli_real_escape_string($db,$_POST["pass"]);

        $sql_query = "SELECT users_id FROM users WHERE users_email = '$emailAddress' AND users_pass = '$password'";
        $result = mysqli_query($db,$sql_query);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];

        $count = mysqli_num_rows($result);

//        If login information is correct and user has registered, then it will return 1;

        if ($count == 1){
           $_SESSION['login_user'] = "emailAddress";

           header("location: welcome.php");
        }else{

            echo "Email or Password not recognised!";
            $error = "Email or Password not recognised!";
        }

    }



?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign in</title>

    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../user/styles/signin.css" rel="stylesheet">
</head>

<body class="text-center">
<form class="form-signin" method="post">
    <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="pass">
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
</form>
</body>
</html>

