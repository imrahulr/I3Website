<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>IEEE VJTI</title>
    <meta name="description" content="IEEE VJTI website">
    <meta name="author" content="rsrade">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href="css/blog.css">  
   <link rel="stylesheet" href="css/main.css">  
    
   <!-- script
   ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>
    <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script> 

    <!-- favicons
     ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myweb";

    $conn = mysqli_connect($server, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

    if (mysqli_connect_errno())
    {
        printf("Connection failed: %s\n", mysqli_connect_error()); exit();
    }

    $id = $_GET['id'];

?>

<body id="top">

<!-- header
================================================== -->
<header>

    <div class="header-logo">
        <!-- <a href="index.html">IEEE VJTI</a> -->
       <img class="img-circle" src="images/logo.png"> 
    </div>

    <a id="header-menu-trigger" href="#0">
        <span class="header-menu-text">Menu</span>
        <span class="header-menu-icon"></span>
    </a>

    <nav id="menu-nav-wrap">

        <a href="#0" class="close-button" title="close"><span>Close</span></a>

        <h3>IEEE VJTI</h3>

        <ul class="nav-list">
            <li><a href="index.html" title="Home">Home</a></li>
            <li><a href="index.html#about" title="">About</a></li>
            <li class="current"><a href="" title="Blogs">Blogs</a></li>
            <li><a href="event.html" title="Events">Events</a></li>
            <li><a href="library.html" title="Library">Library</a></li>
            <li><a class="smoothscroll" href="Projects" title="">Projects</a></li>
            <li><a href="team.html" title="">Our Team</a></li>
            <li><a href="contact.html" title="">Contact Us</a></li>
        </ul>

        <!--p class="sponsor-text">
            Looking for an awesome and reliable projects? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">DreamHost</a>.
            Get <span>$50 off</span> when you sign up with the promocode <span>styleshout</span>.
            < Simply type	the promocode in the box labeled “Promo Code” when placing your order.>
        </p-->

        <ul class="header-social-list">
            <li>
                <a href="#"><i class="fa fa-facebook-square"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-behance"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-dribbble"></i></a>
            </li>
        </ul>

    </nav>  <!-- end #menu-nav-wrap -->

</header> <!-- end header -->


<!-- home
================================================== -->
<section id="home">

    <div class="overlay"></div>

    <div class="home-content-table">
        <div class="home-content-tablecell">
            <div class="row">
                <div class="col-twelve">

                    <h1 class="animate-intro">
                        IEEE VJTI
                    </h1>
                    <h3 class="animate-intro">We Are Best.</h3>

                    <div class="more animate-intro">
                        <a class="smoothscroll button stroke" href="#about">
                            Learn More
                        </a>
                    </div>

                </div> <!-- end col-twelve -->
            </div> <!-- end row -->
        </div> <!-- end home-content-tablecell -->
    </div> <!-- end home-content-table -->

    <ul class="home-social-list">
        <li class="animate-intro">
            <a href="#"><i class="fa fa-facebook-square"></i></a>
        </li>
        <li class="animate-intro">
            <a href="#"><i class="fa fa-twitter"></i></a>
        </li>
        <li class="animate-intro">
            <a href="#"><i class="fa fa-instagram"></i></a>
        </li>
        <li class="animate-intro">
            <a href="#"><i class="fa fa-behance"></i></a>
        </li>
        <li class="animate-intro">
            <a href="#"><i class="fa fa-dribbble"></i></a>
        </li>
    </ul> <!-- end home-social-list -->

    <div class="scrolldown">
        <a href="#about" class="scroll-icon smoothscroll">
            Scroll Down
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
        </a>
    </div>

</section> <!-- end home -->


<section id="content">

    <?php
    	$sql = "SELECT * FROM `posts` WHERE id='".$id."'";
        $queryRecords = mysqli_query($conn, $sql) or die("error fetching data");
        $res = mysqli_fetch_assoc($queryRecords); 
    ?>

    <h5><a href="blog.php">Blogs</a>><?php echo $res['title']; ?></h5>

    <div class="rows about-wrap" id="full">
        <div class="col-full blogContent">

            <div class="about-profile-bg"></div>

            <div class="intro">

                <h4 class="animate-this" id="section-title"><?php echo $res['title']; ?></h4>
                </a>

                <p class="details animate-this">Author: <?php echo $res['author']; ?>
                    <br>Published on <?php echo $res['date']; ?>
                </p>
                <p class="lead animate-this"><?php echo $res['content']; ?>
                </p>
            </div>

        </div> <!-- end col-full  -->
    </div> <!-- end about-wrap  -->
    
</section> <!-- end about -->

<!-- footer
================================================== -->
<footer>
    <div class="footer-main">

        <div class="row">

            <div class="col-five tab-full footer-about">

                <h4 class="h05">IEEE VJTI</h4>

                <p>A committee of enthusiastic electrical and electronics engineering students under the world's largest technical professional organization for advancement of technology,  Institute of Electrical and Electronics Engineers (IEEE).</p>

            </div> <!-- end footer-about -->

            <div class="col-three tab-full footer-social">

                <h4 class="h05">Follow Us.</h4>

                <ul class="list-links">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Behance</a></li>
                    <li><a href="#">Dribble</a></li>
                </ul>

            </div> <!-- end footer-social -->

            <div class="col-four tab-full footer-subscribe end">

                <h4 class="h05">Get Notified.</h4>

                <p>Notifications about upcoming events, newsletters,  seminars and workshops.</p>

                <div class="subscribe-form">

                    <form id="mc-form" class="group" novalidate="true">

                            <!-- <input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="type email" required="">  -->
                            <a href="#"><h2 class="email">SUBSCRIBE</h2>
            
                        <!-- <input type="submit" name="subscribe" > -->
                        <button><i class="icon-mail"></i></button></a>
            
                        <label for="mc-email" class="subscribe-message"></label>                        
                    </form>


                </div>

            </div> <!-- end footer-subscribe -->

        </div> <!-- end row -->

    </div> <!-- end footer-main -->

    <div class="footer-bottom">

        <div class="row">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright IEEE VJTI 2017.</span>
                </div>
            </div>

        </div>

    </div> <!-- end footer-bottom -->

    <div id="go-top">
        <a class="smoothscroll" title="Back to Top" href="#top">
            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
        </a>
    </div>
</footer>

<div id="preloader">
    <div id="loader"></div>
</div>

<!-- Java Script
================================================== -->
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>
</body>

</html>