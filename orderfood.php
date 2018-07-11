<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SWIZATO</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="css/mobile-menu.css" rel="stylesheet">
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="css/style.css" rel="stylesheet">
    
</head>
<body>
<div id="main-wrapper">

<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>


<div class="uc-mobile-menu-pusher">

<div class="content-wrapper">
<nav class="navbar m-menu navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="img/logo.pn" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="#navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li class="active"><a href="orderfood.html">Order Food</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="single-page-title">
    <div class="container text-center">
        <h2>ORDER FOOD</h2>
    </div>
</section>
<section class="service-icon-style ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>Best Restaurants For You</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>

    <div class="container text-center">
        <div class="row">

        	<?php 
				session_start();
				include("db.php");
				$res = mysqli_query($conn,"SELECT * FROM restaurants");
                $rc = 1;
				while ($row = mysqli_fetch_row($res)) {
					$id = $row[0];
                    if ($rc == 4) {
                        echo "<div class='row'>";
                    }
					echo "
					<div class='col-sm-6 col-md-3'>
                        <a href='fooditems.php/?id=$id'><img src='uploads/$row[4]' style='text-transform: uppercase; width:200px;height:150px;' ></img></a>
                        <a href='fooditems.php/?id=$id'><h3 style='text-transform: uppercase; padding-top:20px;'>$row[1]</h3></a>
                        <p style='text-transform: uppercase;'>$row[8]</p>
                    </div>
					";
                    if ($rc == 4) {
                        echo "</div>";
                        $rc = 0 ;
                    }
                    $rc = $rc + 1 ;
                }
        	?>
        </div>
    </div>
</section>

<footer class="footer">

    <div class="footer-widget-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-4 footer-block">
                    <div class="footer-widget widget_text">
                        <div class="footer-logo">
                            <a href="#"><img src="img/logo.pn" alt=""></a>
                        </div>
                        <p>Continually matrix cross functional opportunities whereas ethical information. Compellingly streamline enabled human capital before resource-leveling internal or "organic".</p>

                    </div>
                </div>

                <div class="col-sm-4 footer-block">
                    <div class="footer-widget widget_text">
                        <h3>We work for your satisfaction</h3>
                        <p>We're always looking for great folks to join us on our mission. If you want to be a part of our story, we'd love to chat. Explore our careers section to see if there's a role that excites you. If there isn't one and we like each other, we'll create one for you.</p>
                    </div>
                </div>

                <div class="col-sm-4 footer-block last">
                    <div class="footer-widget widget_text">
                        <h3>Contact Us Today</h3>
                        <address>
                            Call Us 0123456789<br>
                            Send an Email on <a href="mailto:#">help@swizato.com</a><br>
                            Visit Us Madhapur<br>
                            Hyderabad<br>
                        </address>

                        <ul class="list-inline social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><

    <div class="copyright-section">
        <div class="container clearfix">
                <span class="copytext">Copyright &copy; 2018 | <a href="">Swizato</a> Designed And Developed By: <strong style="color: #31aae2;"">Team SWIZATO</strong></span>

            <ul class="list-inline pull-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Order Food</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </div><!-- .container -->
    </div>
</footer>

</div>
</div>

<div class="uc-mobile-menu uc-mobile-menu-effect">
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
            id="uc-mobile-menu-close-btn">&times;</button>
    <div>
        <div>
            <ul id="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="orderfood.html">Order Food</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </div>
    </div>
</div>
</div>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/mobile-menu.js"></script>
<script src="js/flexSlider/jquery.flexslider-min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>