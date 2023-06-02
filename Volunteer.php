<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="single-page elements-page">
     <header class="site-header">
        <div class="top-header-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">
                            MAIL: <a href="#">mohan202145@gmail.com</a>
                        </div><!-- .header-bar-email -->

                        <div class="header-bar-text">
                            <p>PHONE: <span>+91 7505621164/9058843284</span></p>
                        </div><!-- .header-bar-text -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        <div class="donate-btn">
                            <a href="login.php">Admin Login</a>
                        </div><!-- .donate-btn -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-header-bar -->

        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="index.php" rel="home"><img class="d-block" src="images/logo.png" alt="logo"></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                <li class="current-menu-item"><a href="index.php">Home</a></li>
                                <li><a href="about.php">About us</a></li>
                                <li><a href="Volunteer.php">Volunteer</a></li>
								 <li><a href="donate.php">Donate</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="news.php">News</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Elements</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="container">
      
        <div class="row elements-wrap">
            <div class="col-12">
                <header class="entry-header elements-heading">
                    <h2 class="entry-title">Become A Volunteer</h2>
                </header>

                <div class="entry-content elements-container">
                    <div class="row">
					 <div class="col-12 col-md-6" style="margin-top:-10%">
                           <form class="contact-form" method="post" action="codes/vcode.php" enctype="multipart/form-data">
                        <input type="text" name="name" placeholder="Name" required>
						Gender <input type="radio" name="gen" value="Male"/>Male 
						 <input type="radio" name="gen" value="Female"/>Female 
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="text" name="mob" placeholder="Mobile Number" required>
                        <input type="file" name="file"  class="form-control" required /><br/>
                        <textarea rows="9" name="addr" cols="6" placeholder="Address" required></textarea>

                        <span>
                            <input class="btn gradient-bg" type="submit" value="submit">
                        </span>
                    </form><!-- .contact-form -->
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="accordion-wrap type-accordion">
                                <h3 class="entry-title d-flex justify-content-between align-items-center active">Curabitur venenatis efficitur lotrem sed tempor<span class="arrow-r"></span></h3>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                </div>

                                <h3 class="entry-title d-flex justify-content-between align-items-center">Nullam vestibulum convallis risus vel condimentum<span class="arrow-r"></span></h3>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                </div>

                                <h3 class="entry-title d-flex justify-content-between align-items-center">Vestibulum convallis risus vel condimentum<span class="arrow-r"></span></h3>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                </div>
                            </div>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>

        <div class="row elements-wrap">
            <div class="col-12">
                <header class="entry-header elements-heading">
                    <h2 class="entry-title">Milestones</h2>
                </header>

                <div class="milestones">
                    <div class="row flex flex-wrap justify-content-between">
                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/teamwork.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="120" data-speed="2000"></div>
                                    <div class="counter-k">K</div>
                                </div>

                                <h3 class="entry-title">Children helped</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/donation.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="79" data-speed="2000"></div>
                                </div>

                                <h3 class="entry-title">Water wells</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/dove.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="253" data-speed="2000"></div>
                                </div>

                                <h3 class="entry-title">Volunteeres</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/olive.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="174" data-speed="2000"></div>
                                </div>

                                <h3 class="entry-title">Causes Solved</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row elements-wrap">
            <div class="col-12">
                <header class="entry-header elements-heading">
                    <h2 class="entry-title">Loaders</h2>
                </header>

                <div class="entry-content elements-container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="circular-progress-bar">
                                <div class="circle" id="loader_1">
                                    <strong class="d-flex justify-content-center"></strong>
                                </div>

                                <h3 class="entry-title">Hard Work</h3>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="circular-progress-bar">
                                <div class="circle" id="loader_2">
                                    <strong class="d-flex justify-content-center"></strong>
                                </div>

                                <h3 class="entry-title">Pure Love</h3>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="circular-progress-bar">
                                <div class="circle" id="loader_3">
                                    <strong class="d-flex justify-content-center"></strong>
                                </div>

                                <h3 class="entry-title">Smart Ideas</h3>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="circular-progress-bar">
                                <div class="circle" id="loader_4">
                                    <strong class="d-flex justify-content-center"></strong>
                                </div>

                                <h3 class="entry-title">Good Decisions</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row elements-wrap">
            <div class="col-12">
                <header class="entry-header elements-heading">
                    <h2 class="entry-title">Icon Boxes</h2>
                </header>

                <div class="entry-content elements-container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                            <div class="icon-box active">
                                <figure class="d-flex justify-content-center">
                                    <img src="images/hands-gray.png" alt="">
                                    <img src="images/hands-white.png" alt="">
                                </figure>

                                <header class="entry-header">
                                    <h3 class="entry-title">Become a Volunteer</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                            <div class="icon-box">
                                <figure class="d-flex justify-content-center">
                                    <img src="images/donation-gray.png" alt="">
                                    <img src="images/donation-white.png" alt="">
                                </figure>

                                <header class="entry-header">
                                    <h3 class="entry-title">Dance & Music</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                            <div class="icon-box">
                                <figure class="d-flex justify-content-center">
                                    <img src="images/charity-gray.png" alt="">
                                    <img src="images/charity-white.png" alt="">
                                </figure>

                                <header class="entry-header">
                                    <h3 class="entry-title">Online Conference</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="height: 96px"></div>
	
 <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                            <h2><a class="foot-logo" href="#"><img src="images/foot-logo.png" alt=""></a></h2>

                            <p>
Charity is the act of giving help to those in need of it. It is a humanitarian act. ... Poor, sick or injured people are generally considered the proper people to whom charity should be given. </p>

                            <ul class="d-flex flex-wrap align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <h2>Useful Links</h2>

                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="Volunteer.php">Become  a Volunteer</a></li>
                            <li><a href="donate.php">Donate</a></li>
                           
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="portfolio.php">Gallery</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="about.php">About Us</a></li>
							<li><a href="login.php">Login</a></li>
                        </ul>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-latest-news">
                            <h2>Latest News</h2>

                            <ul>
                                <li>
                                    <h3><a href="#">A new cause to help</a></h3>
                                    <div class="posted-date">MArch 12, 2020</div>
                                </li>

                                <li>
                                    <h3><a href="#">We love to help people</a></h3>
                                    <div class="posted-date">April 12, 2019</div>
                                </li>

                                <li>
                                    <h3><a href="#">The new ideas for helping</a></h3>
                                    <div class="posted-date">May 21, 2020</div>
                                </li>
                            </ul>
                        </div><!-- .foot-latest-news -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>

                            <ul>
                                <li><i class="fa fa-phone"></i><span>+91 75056211647/9058843284</span></li>
                                <li><i class="fa fa-envelope"></i><span>mohan202145@gmail.com</span></li>
                                <li><i class="fa fa-map-marker"></i><span>Ahamadpur /Mathura road Aligarh</span></li>
                            </ul>
                        </div><!-- .foot-contact -->

                        <div class="subscribe-form">
                            <form class="d-flex flex-wrap align-items-center">
                                <input type="email" placeholder="Your email">
                                <input type="submit" value="send">
                            </form><!-- .flex -->
                        </div><!-- .search-widget -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | MahaMaya Polytecknic for Information and technology <i class="fa fa-heart-o" aria-hidden="true"></i> <a href="https://mmitaligarh.org" target="_blank">gov collage Aligarh</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

</body>
</html>