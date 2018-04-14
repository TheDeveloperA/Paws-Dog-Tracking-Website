<?php

//Creates login script
    include("user/includes/config.php");

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
            $_SESSION['login_user'] = $emailAddress;

            header("location: index.php");
//            header("location: user/dashboard.php");
        }else{

            header("location: user/login.php");
        }

    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Universal - All In 1 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]><![endif]-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body>

    <div id="all">
        <!-- Top bar-->
        <div class="top-bar">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <!--The below is intentionally left blank to add a space-->
                    <div class="col-md-6 d-md-block d-none"></div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-md-end justify-content-between">
                            <?php
                                if (empty($_SESSION['login_user'])){
                                    echo '<div class="login"><a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Sign In</span></a></div>';
                                }else{
                                    echo '<div class="login"><a href="user/logout.php"class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Log Out</span></a></div>';
                                }
                            ?>
                            <ul class="social-custom list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar end-->
        <!--This used to provide the popup when login button is pressed-->
        <!-- Login Modal-->
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="login-modalLabel" class="modal-title">Customer Login</h4>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>

                    <div class="modal-body">
                        <form method="post">
                            <div class="form-group">
                                <input id="email_modal" type="email" placeholder="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <input id="password_modal" type="password" placeholder="password" class="form-control" name="pass">
                            </div>
                            <p class="text-center">
                                <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Login modal end-->
        <!-- Navbar Start-->
        <header class="nav-holder make-sticky">
            <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
                <div class="container"><a href="index.php" class="navbar-brand home"><img src="img/paws_banner.png" alt="Universal logo" class="d-none d-md-inline-block"><img src="img/paws-banner-small.png" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">Universal - go to homepage</span></a>
                    <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
                    <div id="navigation" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active"><a href="javascript: void(0)" >Home <b class="caret"></b></a></li>
                            <li class="nav-item menu-large"><a href="#">Features <b class="caret"></b></a></li>
                            <li class="nav-item menu-large"><a href="#">Download <b class="caret"></b></a></li>
                            <li class="nav-item menu-large"><a href="#">About Us <b class="caret"></b></a></li>
                            <li class="nav-item"><a href="javascript: void(0)">Contact Us<b class="caret"></b></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- Navbar End-->
        <section class="no-mb relative-positioned">
            <!--*** JUMBOTRON ***-->

            <div class="jumbotron relative-positioned color-white text-md-center">
                <div class="dark-mask mask-primary"></div>
                <div class="container">
                    <div class="row mb-small">
                        <div class="col-md-12 text-center">
                            <h1 class="text-uppercase">Paws - Dog Tracking</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center-sm">
                            <p class="text-uppercase text-bold">Clean. Simple. Intelligent.<br>Track your dogs wellbeing.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- *** JUMBOTRON END ***-->
        </section>

        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5">
                            <img class="img-fluid rounded-circle" src="img/02.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">We salute you!</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <img class="img-fluid rounded-circle" src="img/03.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="text-uppercase">Monitor your dogs health</h2>
                            <p class="lead mb-small">A healthy dog is a happy dog.</p>
                            <p class="mb-small">With the use of the FitBark device, the Paws application can monitor the activity levels of your dog, whilst also logging in its meals. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5">
                            <img class="img-fluid rounded-circle" src="img/sunset_dog.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Completely Free!</h2>
                            <p class="lead mb-small">No strings attached.</p>
                            <p class="mb-small"><strong>Our app is free for personal use.</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- GET IT-->
        <div class="get-it">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 text-center p-3">
                        <h3>Download our App now on the Play Store!</h3>
                    </div>
                    <div class="col-lg-4 text-center p-3">   <a href="#" class="btn btn-template-outlined-white">Open Play Store</a></div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <footer class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 text-center-md">
                        <p>&copy; 2018. Your company / name goes here</p>
                    </div>

                    <div class="col-lg-8 text-right text-center-md">
                        <p>With the help of <a href="https://bootstrapious.com/free-templates">Bootstrapious Templates </a></p>
                        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Javascript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>

</body>
</html>
