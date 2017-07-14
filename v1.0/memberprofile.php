<?php
    require("dbconnect.php");
    require("session.php");
?>
<!DOCTYPE html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Association of T-11 Surveyors of Institute of Surveying and Mapping Sri Lanka">
    <meta name="author" content="T-11 Surveyors">
    <title>Profile | Association of T-11 Surveyors</title>
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

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
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
                            <li><a href="videos.php">Videos</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="members.php">Members</a></li>
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
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="members.php">Members</a></li>
                        <li class="active">Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title--> 
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      
    </div>
  </div>
</div>
    <div class="container">
        <section class="well">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <?php
                            $key = $_SERVER["QUERY_STRING"];
                            $queryString = "select * from user_details where uid = '$key'";
                            $result = mysqli_query($conn,$queryString);
                            $row = mysqli_fetch_assoc($result);
                            $queryString2 = "select * from user_con where uid='$key'";
                            $queryString3 = "select * from user_depd where uid='$key'";
                            $result2 = mysqli_query($conn, $queryString2);
                            $result3 = mysqli_query($conn, $queryString3);
                            $result4 = mysqli_query($conn, $queryString3);
                            $row2 = mysqli_fetch_assoc($result2);
                            
                        ?>
                        <?php
                            echo '<img src="images/members/'; if($row["img"]=="") echo"m.jpg"; else echo $row["img"]; echo'" class="image-responsive" alt="Thumbnail Image 1">';
                        ?>
                    </div>
                    <div class="col-md-7">
                        <table class="table table-responsive table-hover">
                            <tr>
                                <th colspan="2"><center><h4>Personal Details</h4></center></th>
                            </tr>
                            <tr>
                                <td><b>Name</b></td>
                                <td><?php echo $row["initials"]; echo" "; echo $row["surname"];?></td>
                            </tr>
                            <tr>
                                <td><b>Job Title</b></td>
                                <td><?php echo $row["job_title"];?></td>
                            </tr>
                            <tr>
                                <td><b>Address</b></td>
                                <td><?php echo $row["address"]; ?></td>
                            </tr>
                            <tr>
                                <td><b>Phone</b></td>
                                <td><?php
                                        while($row2=mysqli_fetch_array($result2)){
                                            echo $row2["phone_no"];
                                            echo "<br/>";
                                        }
                                    ?></td>
                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td></td>
                            </tr>
                            <?php 
                                if(!empty($row["sp_name"])) echo '<tr>
                                <th colspan="2"><center><h4>Family Details</h4></center></th>
                            </tr>
                            <tr>
                                <td><b>Spouce</b></td>';
                            ?>
                                <td><?php if(empty($row["sp_link"])) echo $row["sp_name"]; else {echo '<a href="memberprofile.php?';echo $row["sp_link"]; echo '">';echo $row["sp_name"]; echo'</a>';}?>
                                <?php
                                        if(!empty($row["sp_occupation"])){
                                            echo "  :<i>&nbsp&nbsp&nbsp&nbsp ";
                                            echo $row["sp_occupation"];
                                            echo "</i>";   
                                        }
                                    ?></td>
                            </tr>
                            <?php
                                $row3 = mysqli_fetch_assoc($result3); //result3: children
                        
                                if(!empty($row3["name"])) echo '<tr>
                                <td colspan="2"><b>Children</b></td></tr>';
                                while($row4 = mysqli_fetch_assoc($result4)){ //result4 : children
                                        echo '<tr>';
                                        echo '<td>';
                                        echo $row4["name"];
                                        echo '</td>';
                                        echo '<td>';
                                        if(empty($row4["school"])) echo $row4["occupation"];
                                        else echo $row4["school"];
                                        echo '</td>';
                                        echo '</tr>';   
                                }
                        ?>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
<hr>
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
