<?php

session_start();

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

    <?php
    include ("components/top_bar.php");
    ?>
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
                        <li class="nav-item"><a href="index.php" >Home <b class="caret"></b></a></li>
                        <li class="nav-item menu-large active"><a href="javascript: void(0)">About Us <b class="caret"></b></a></li>
                        <li class="nav-item"><a href="contact_us.php">Contact Us<b class="caret"></b></a></li>
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
                    <h1 class="h2">About Us</h1>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <section class="bar">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="accordion" role="tablist">
                            <div class="card">
                                <div id="headingOne" role="tab" class="card-header">
                                    <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Accordion Item No.1</a></h4>
                                </div>
                                <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" class="collapse show">
                                    <div class="card-body">

                                        <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
                                        <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div id="headingTwo" role="tab" class="card-header">
                                    <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">Accordion Item No.2</a></h4>
                                </div>
                                <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" class="collapse">
                                    <div class="card-body">

                                        <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                                        <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>


                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div id="headingThree" role="tab" class="card-header">
                                    <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">Accordion Item No.3 A little too small</a></h4>
                                </div>
                                <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" class="collapse">
                                    <div class="card-body">
                                        <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>
                                        <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php
    include ("components/footer.php");
    ?>
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
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
<script src="js/front.js"></script>
</body>
</html>