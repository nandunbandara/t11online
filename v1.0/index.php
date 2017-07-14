<?php
    require("dbconnect.php");
    require("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Association of T-11 Surveyors of Institute of Surveying and Mapping Sri Lanka : The T-11 batch which marked its inauguration on the 2nd of January, 1980 comprised 100 novice surveyors who were ready to pass-out as professionals from the renowned institution, The Institute of Surveying and Mapping, Diyathlawa. 25 of these 100 members were being ladies; our batch became the first batch to have novice lady surveyors in it. This intake of ladies was done on an idea of Hon. Gamini Diassanayake, who was the Minister of lands at that time.">
    <meta name="author" content="T-11 Surveyors">
    <title>Home | Association of T-11 Surveyors</title>
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
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="gallery.php">Photos</a></li>
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
    <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h1 class="boxed animation animated-item-1"><b>Welcome to t11online.org</b></h1>
                                    <h4 class="animation animated-item-2" style="margin-top:0">The Official Website of the Association of T-11 Surveyors</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="boxed animation animated-item-1">The Association of T-11 Surveyors</h2>
                                    <p class="boxed animation animated-item-2">With the close bond of friendship of our members since we met in 1980, it was everyone's will and desire to take this bond to a lifetime.</p>
                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="about-us.php">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <h5 class="boxed">
                                    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>ඉන්දීය සයුරේ මුතු ඇටයයිනම් විරුදාවලි ලද්දු<br/>
ලක්මවු තුරුලේ වැජඹෙන සිප්හල අයි.එස්.එම්. නම් වූ<br/>
අසූව එකසිය වසරක්ගෙවූ දා සියක් දෙනෙක් එක් වූ<br/>
මිනින්දෝරුවන අප කණ්ඩායම T-11 නම් වූ ... <a data-toggle="modal" data-target="#theme">Read More</a>
<br/><br/><br/><br/><br/>
<br/><br/><br/><br/>Vocals: Vishardh. Nandun Thilina Bandara, Kalpani Weerasekara<br/>Lyrics: L/S S.A.D.B. Anistast<br/>Music: Visharadh. Nandun Thilina Bandara<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

                                </h5>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="centered">
                                    <div class="embed-container">
                                        <iframe width="420" height="315" src="https://www.youtube.com/embed/YbtENVKUQYI" frameborder="10" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->
    <section id="notices">
        <div class="container">
            <div class="row">
                <div class="col-mid-8">
                    <div class="container">
                        <!--notices-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="recent-works">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Latest Gallery Updates</h3>
                    <div class="btn-group">
                        <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
                        <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
                    </div>
                    <p class="gap"></p>
                </div>
                <div class="col-md-9">
                    <div id="scroller" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/portfolio/recent/item1.png" alt="">
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" href="images/portfolio/full/item2.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.row-->
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/portfolio/recent/item1.png" alt="">
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.item-->
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
    </section><!--/#recent-works-->

    <section id="testimonial" class="alizarin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-4">
                            <center>
                                <img class="image-thumbnail" src="images/secret.jpg">
                            </center>
                            <div class="gap"></div>
                            <blockquote>
                                <p>This is another significant milestone in the 36 years old history of our batch.
<a class="btn btn-link" data-toggle="modal" data-target="#secretary">Read More</a></p>
                                <small><cite title="Source Title"><b>W.M.S.G.Dharmaratne
</b></cite><br/>&nbsp;&nbsp;&nbsp;&nbsp;Hon. Secretary</small>
                            </blockquote>
                        </div>
                        <div class="col-md-4">
                            <center>
                                <img class="image-thumbnail" src="images/presi.jpg">
                            </center>
                            <div class="gap"></div>
                            <blockquote>
                                <p>I hope this website will help us alot in sharing knowledge, technical skills, and even in finding solutions for problems we come across.<a class="btn btn-link" data-toggle="modal" data-target="#president">Read More</a></p>
                                <small><cite title="Source Title"><b>B.A. Thilakarathne</b></cite><br/>&nbsp;&nbsp;&nbsp;&nbsp;Hon. President</small>
                            </blockquote>
                        </div>
                        <div class="col-md-4">
                            <center>
                                <img class="image-thumbnail" src="images/treasurer.jpg">
                            </center>
                            <div class="gap"></div>
                            <blockquote>
                                <p>We never hesitated in catching up the highway with the growing global technology.<a class="btn btn-link" data-toggle="modal" data-target="#treasurer">Read More</a></p>
                                <small><cite title="Source Title"><b>A.J.J. Bandara</b></cite><br/>&nbsp;&nbsp;&nbsp;&nbsp;Hon. Treasurer</small>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#testimonial-->
    <!--ThemeSong-->
    <div id="theme" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-4">
                        <div class="container">
                            
                        </div>
                    </div>
                    <div class="col-sm-16 col-md-8">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-24 col-md-12">
                        <div class="container">
                            <p> <br/>ඉන්දීය සයුරේ මුතු ඇටයයිනම් විරුදාවලි ලද්දු<br/>
ලක්මවු තුරුලේ වැජඹෙන සිප්හල අයි.එස්.එම්. නම් වූ<br/>
අසූව එකසිය වසරක්ගෙවූ දා සියක් දෙනෙක් එක් වූ<br/>
මිනින්දෝරුවන අප කණ්ඩායම T-11 නම් වූ<br/><br/>

සීතල කඳුගැට අතරින් පෙනෙනා සුන්දර බිම් පෙදෙසේ<br/>
ශිල්ප හදාලෙමු දෙනුම වදාලෙමු අපි සැම සිත් සතොසේ<br/>
වසරක් ගතවිය කාලය නිමවිය විසිර යායුතුවේ<br/>
සිරිලක සැමතැන විසිර ගියෙමු අපි සේවය කරන ලෙසේ<br/><br/>

වගවලසුන් පිරි මහගන කාලයක <br/>
තෙරක් නොපෙනෙනා වනතුරු වදුලක<br/>
සියොත් රැහැයි නද පමණක් කැටිකළ<br/>
තනිවුයෙමු අපි යොවුන් මිතුරුකැල<br/><br/>

මහවැලි ගඟබඩ ඉවුරු දෙපැත්තේ සිත්සතොසින් අපි කඳවුරු බැන්දේ<br/>
ගඟ දිය හරවා සිරිලක උතුරට මංපෙත් විවර කරන්නී රට සරු කෙරුමට <br/>
එදා සැදු මග දිය රැළි නංවයි දැය අපගේ අද හඬගා කියවයි<br/>
තවත් කුමටදෝ සතුටක් අපහට මතකය පුබුදාලයි<br/><br/>

කරදර පොදි බැඳ ජීවන ගමනේ දහදිය අපි හෙළුවේ<br/>
රට දැය නැගුමට වීරිය අරගෙන අපි සේම කැප වුයේ<br/>
සෙනෙහස පොදි බැඳ  අදටත් අපි සැම ඒ ගමනම යන්නේ<br/>
සතුට නිමක් නෙත ගතට වෙහෙස නැත ඉදිරියටම යන්නේ<br/><br/>

රාජ්‍ය සේවයේ විරාමයට අපි ටික ටික ලන්වුව<br/>
නැහැ අපි නැවතී බහ අපි නැවතී ඉදිරියටම යන්නා<br/>
තිස් හය වසරක මහඟු අතීතය මෙලෙසින් සමරන්නා<br/>
මිතුරු මිතුරුයේ සොයුරු සොයුරියේ යමු අපි ඉදිරියටා<br/><br/></p>
                        </div>
                    </div>
                </div>
            </div>                        
          </div>
        </div>
    </div>
</div><!--ThemeSong-->
    <!--Message from the Secretary-->
    <div id="secretary" class="modal fade" role="dialog">
      <div class="modal-dialog">
    <!--Secretary Modal-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-4">
                        <div class="container">
                            <img width="100px" src="images/secret.jpg">
                        </div>
                    </div>
                    <div class="col-sm-16 col-md-8">
                        <h2>Message from the Secretary</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-24 col-md-12">
                        <div class="container">
                            <p><br/>It is with great pleasure that we present you the official web site of the   T-11 surveyors’ batch which predicates a remarkable journey of a renowned group of surveyors. This is another significant milestone in the 36 years old history of our batch.<br/><br>
The T-11 batch which marked its inauguration on the 2nd of January, 1980 comprised 100 novice surveyors who were ready to pass-out as professionals from the renowned institution, The Institute of Surveying and Mapping, Diyathlawa. 25 of these 100 members were being ladies; our batch became the first batch to have novice lady surveyors in it. This intake of ladies was done on an idea of Hon. Gamini Diassanayake, who was the Minister of lands at that time.<br/><br>
The welfare society of the T-11 batch was inaugurated in the year 2003. Offering the members an utmost support when they are in need, our welfare society has always been a helping hand to our batch members. The anniversary celebrations which started in the year 2004 are still continued, proving the strength of our unity. It is with all my heart that I wish the best of luck for our society to succeed in all the endeavors in future.
<br/><br/>I wish you.<br/><br/><br/><b>W.M.S.G.Dharmaratne
</b><br/>Hon. Secretary</p>
                        </div>
                    </div>
                </div>
            </div>                        
          </div>
        </div>
      </div>
    </div><!--Secretary Modal-->
    
    <!--Message from the President-->
    <div id="president" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!--President Modal-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-4">
                        <div class="container">
                            <img width="100px" src="images/presi.jpg">
                        </div>
                    </div>
                    <div class="col-sm-16 col-md-8">
                        <h2>Message from the President</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-24 col-md-12">
                        <div class="container">
                            <p><br/>I am privileged to present this message to the special event of exposing this website in simultaneously the 36th Anniversary of our T-11 Surveyors' Association.<br/><br/> We all met at I.S.M. in good old days of 1980's and learned together the noble profession of Surveying and now we have reached to th 3th M.P. of our career or otherwise we have spent 36 years, the best part of our life.<br/></br/>At the beginning we were in conventional method and we thought that was the end of Technology, but now it has become to the Total Station, digital data, satellite ...etc. We all are proud to be members of the rapidly improving technology of Surveying.<br/><br/>Do you remember those days we were eagerly waiting for a letter from our parents or our friends, even when telephone were not plenteous. Now communication is very easy in may ways and even you can talk to a person who is far way with face to fac through new technology.<br/><br/>So, I think we as professionals to get use of the modern communication techniques to upgrade and enhance our knowledge and I hope this website will help us alot to shaering knowledge, technical skills, finding solutions even like fund raising and easy correspondence of our association.<br/><br/>Not only in professional side but also in our fammily affiars, special events, global news, anything you like to share with others can upload to this website and you can make it beautiful and attractive.<br/><br/>Last but not least my sincere thanks go to behind the scene to make this grateful effort a success, especially to L/S Mr. and Mrs. A.J.J. Bandara (Hon. treasurer of the Association of T-11 Surveyors) and their family for their dedication and valuable time to make this website a reality. I hope and wish that you will be able to distribute and contribute to this website forever.<br/><br/>I wish you.<br/><br/><br/><b>B.A. Thilakaratne</b><br/>Hon. President</p>
                        </div>
                    </div>
                </div>
            </div>                        
          </div>
        </div>
    </div>
</div><!--President Modal-->
 <!--Message from the Treasurer-->
    <div id="treasurer" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-4">
                        <div class="container">
                            <img width="100px" src="images/treasurer.jpg">
                        </div>
                    </div>
                    <div class="col-sm-16 col-md-8">
                        <h2>Message from the Treasurer</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-24 col-md-12">
                        <div class="container">
                            <p><br/>The Department of Surveys is the oldest department in Sri Lanka, established in 1800 to support the development of Sri Lanka.Since then, a well-defined network of surveys has started to grow with proper use of trending technologies.<br/><br/>We never hesitated in catching up the highway with the growing global technology and were always up-to-date especially the precise surveys carried out trying to blend with it.<br/></br>The year 1980, is one bright landmark in the history of Surveying in Sri Lanka when the first batch of female surveyors join. They along with their brother surveyors was called the T-11. Since then these females contributed alot to uplift the image and expectations of the department.<br/><br/>We, the T-11s with the intention of opening ourselfs to the world, the Official Website of our Association is now online since 02nd of January 2016. This website would surely perform some very important part in our journey.<br/><br/>I wish you all for your success from the bottom of my heart.<br/><br/><br/><b>A.J.J. Bandara</b><br/>Hon. Treasurer</p>
                        </div>
                    </div>
                </div>
            </div>                        
          </div>
        </div>
    </div>
</div><!--Treasurer Modal-->
    
    
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
                    <a href="http://www.hotelsunrich.com/"><img class="image-responsive" src="images/sunrich.jpg" width="100%"></a>
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