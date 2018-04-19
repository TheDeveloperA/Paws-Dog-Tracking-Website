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
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="../vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]><!---->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--    CDN for Charts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
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

                        <div class="login"><a href="dashboard.php" class="login-btn"><i
                                    class="fa fa-user-o"></i><span class="d-none d-md-inline-block">My Account</span></a>
                        </div>

                        <div class="login"><a href="logout.php" class="login-btn"><i class="fa fa-sign-out"></i>
                                <span class="d-none d-md-inline-block">Log Out</span></a></div>

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
    <!-- Navbar Start-->
    <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
            <div class="container"><a href="../index.php" class="navbar-brand home">
                    <img src="../img/paws_banner.png" alt="Universal logo" class="d-none d-md-inline-block">
                    <img src="../img/paws-banner-small.png" alt="Universal logo" class="d-inline-block d-md-none">
                    <span class="sr-only">Universal - go to homepage</span></a>

                <button type="button" data-toggle="collapse" data-target="#navigation"
                        class="navbar-toggler btn-template-outlined">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>

                <div id="navigation" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item"><a href="../index.php" >Home <b class="caret"></b></a></li>
                        <li class="nav-item menu-large"><a href="#">Features <b class="caret"></b></a></li>
                        <li class="nav-item menu-large"><a href="#">Download <b class="caret"></b></a></li>
                        <li class="nav-item menu-large"><a href="#">About Us <b class="caret"></b></a></li>
                        <li class="nav-item"><a href="#">Contact Us<b class="caret"></b></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Navbar End-->

    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row d-flex align-items-center flex-wrap">
                <div class="col-md-7">
                    <h1 class="h2">Minutes Rest</h1>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item active">Minutes Rest</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="content">
        <div class="container">
            <div class="row bar">
                <div id="customer-account" class="col-lg-9 clearfix">

                    <p>Here you can check out how many minutes your dog rests for!
                        You can access legacy information as well as check out the current days progress</p>
                    <br>
                    <canvas id="bar-chart" width="800" height="450"></canvas>
                    <br>
                    <br>
                    <br>
                    <br>

                </div>
                <div class="col-lg-3 mt-4 mt-lg-0">
                    <!-- CUSTOMER MENU -->
                    <div class="panel panel-default sidebar-menu">
                        <div class="panel-heading">
                            <h3 class="h4 panel-title">Customer section</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills flex-column text-sm">
                                <li class="nav-item"><a href="dashboard.php" class="nav-link"><i class="fa fa-list"></i> My Account</a></li>
                                <li class="nav-item"><a href="my_dog.php" class="nav-link"><i class="fa fa-hand-o-up"></i> My Dog</a> </li>
                                <li class="nav-item"><a href="settings.php" class="nav-link"><i class="fa fa-cog"></i> Settings</a></li>
                                <li class="nav-item"><a href="logout.php" class="nav-link"><i class="fa fa-sign-out"></i> Log out</a> </li>
                            </ul>
                        </div>
                        <br>
                        <br>
                        <div class="panel-heading">
                            <h3 class="h4 panel-title">My Dogs Statistics</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills flex-column text-sm">
                                <li class="nav-item"><a href="active_level.php" class="nav-link"><i class="fa fa-pie-chart"></i> Active Level</a></li>
                                <li class="nav-item"><a href="minutes_played.php" class="nav-link"><i class="fa fa-line-chart"></i> Minutes Played</a> </li>
                                <li class="nav-item"><a href="minutes_rest.php" class="nav-link active"><i class="fa fa-bar-chart"></i> Minutes Rest</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<script>
    // Bar chart
    new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
            labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            datasets: [
                {
                    label: "Population (millions)",
                    backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                    data: [2478,5267,734,784,433]
                }
            ]
        },
        options: {
            legend: { display: false },
            title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
            }
        }
    });
</script>

<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/popper.js/umd/popper.min.js"> </script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="../vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
<script src="../vendor/jquery.counterup/jquery.counterup.min.js"> </script>
<script src="../vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="../vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
<script src="../vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="../vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
</body>
</html>