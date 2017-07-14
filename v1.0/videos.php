<?php
    require("dbconnect.php");
    require("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Videos | Association of T-11 Surveyors</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><h3><img src="images/logo.png" class="visible-lg visible-md visible-sm" alt="logo" width="600px"></h3></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="gallery.php">Photos</a></li>
                            <li class="active"><a href="videos.php">Videos</a></li>
                        </ul>
                    </li>
                    <li><a href="members.php">Members</a></li>
                    <?php
                        if(!isset($_SESSION["usr"])){
                          echo '<li><a href="login.php">Login</a></li>';
                        } 
                        else {
                          echo '<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Member Area <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="docs.php">Documents</a></li>
                            <li><a href="notices.php">Notices</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>';  
                        } 
                    ?>
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Videos</h1>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Videos</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section id="about-us" class="container">
        <div class="row">
            <div class="col-sm-6">
                <a href="36.php"><h4>36th Anniversary and Opening Ceromomy</h4></a>
                
            </div><!--/.col-sm-6-->
            <div class="col-sm-6">
               
            </div><!--/.col-sm-6-->
        </div><!--/.row-->

        
    </section><!--/#about-us-->

    <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-10">
                    <h4>Latest Blog</h4>
                    <div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="images/blog/thumb1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="docs/Purawasibawaya.pdf">Puravasibawaya</a></span>
                                <small class="muted">Posted 02 Jan 2016</small>
                            </div>
                        </div>
                        
                    </div>  
                </div><!--/.col-md-3-->
                <div class="col-md-4 col-sm-8">
                    <a href="http://www.hotelsunrich.com/"><img src="images/sunrich.jpg" width="700"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-16"></div>
                <div class="col-md-1 col-sm-2">
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a>  
                </div> <!--/.col-md-3-->
                <div class="col-md-1 col-sm-2">
                    <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> 
                </div>
                <div class="col-md-1 col-sm-2">
                    <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a>
                </div>
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; t11online.org  2015  All Rights Reserved.<br/><small>Designed by Nandun Bandara for NTB Media inc.</small>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="members.php">Our Members</a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.validate.min.js"></script>

</body>
</html>