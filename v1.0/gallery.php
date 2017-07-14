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
    <title>Gallery | Association of T-11 Surveyors</title>
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
                            <li class="active"><a href="gallery.php">Photos</a></li>
                            <li><a href="videos.php">Videos</a></li>
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
                    <h1>Gallery</h1>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title--> 

    <section id="portfolio" class="container">
        <ul class="portfolio-filter">
            <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".old">Old Memories</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".35">35th Anniversary</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".36">36th Anniversary and Opening Ceromony</a></li>
        </ul><!--/#portfolio-filter-->

        <ul class="portfolio-items col-5">
            <!--1-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_1.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(1).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--2-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_2.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(2).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--3-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_3.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(3).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--4-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_4.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(4).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--5-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_5.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(5).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--6-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_6.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(6).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--7-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_7.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(7).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--8-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_8.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(8).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--9-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_9.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(9).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--10-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_10.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(10).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--11-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_11.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(11).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--12-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_12.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(12).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--13-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_13.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(13).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--14-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_14.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(14).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--15-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_15.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(15).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--16-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_16.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(16).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--17-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_17.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(17).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--18-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_18.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(18).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--19-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_19.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(19).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--20-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_20.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(20).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--21-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_21.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(21).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--22-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_22.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(22).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--23-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_23.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(23).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--24-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_24.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(24).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--25-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_25.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(25).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--26-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_26.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(26).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--27-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_27.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(27).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--28-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_28.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(28).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--29-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_29.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(29).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--30-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_30.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(30).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--31-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_31.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(31).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--32-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_32.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(32).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--33-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_33.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(33).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--34-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_34.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(34).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--35-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_35.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(35).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--36-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_36.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(36).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--37-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_37.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(37).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--38-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_38.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(38).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--39-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_39.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(39).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--40-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_40.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(40).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--41-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_41.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(41).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--42-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_42.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(42).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--43-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_43.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(43).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--44-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_44.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(44).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--45-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_45.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(45).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--46-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_46.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(46).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--47-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_47.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(47).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--48-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_48.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(48).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--49-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_49.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(49).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <!--50-->
            <li class="portfolio-item 36">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/36_50.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/36_%20(50).jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            
            <li class="portfolio-item old">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/item1.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item joomla old">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/item2.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/item2.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>              
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item bootstrap old">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/item3.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/item3.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>        
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item joomla wordpress 35">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/item4.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/item4.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>          
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item joomla 35">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/item5.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/item5.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>          
                    </div>    
                </div>       
            </li><!--/.portfolio-item-->
            <li class="portfolio-item wordpress 35">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/item6.jpg" alt="">
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/item6.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>           
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
        </ul>
    </section><!--/#portfolio-->

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
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
