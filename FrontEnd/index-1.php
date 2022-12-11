<!DOCTYPE html>
<?php

session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head> 

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>See the Seas Website</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon2.png">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="css/plugin.css" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="fonts/flaticon.css" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <link rel="stylesheet" href="fonts/line-icons.css" type="text/css">
</head>
<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- header starts -->
    <header class="main_header_area headerstye-1">
        <div class="header-content">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="links">
                    <ul>
                        <li><a href="#" class="white"><i class="fa fa-phone"></i> (123) 456-789</a></li>
                        <li><a href="#" class="white"><i class="fa fa-support"></i> info@SeetheSeas.com</a></li>
                        <li><a href="#" class="white"><i class="fa fa-map-marker"></i> Mon-Fri 12am - 12pm</a></li>
                    </ul>
                </div>
                <div class="links float-right">
                    <ul>  
                        <li><a href="#"><i class="fab fa-facebook white" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter white" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram white" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin white" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Navigation Bar Starts Here-->
        <div class="header_menu" id="header_menu">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-2 pt-2">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index-1.php">
                                <img src="images/STSLogo/logotext-tan.png" alt="text logo"> <!--Image next to Navigation Bar: Logo as Text-->
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li class="dropdown submenu active">
                                <li><a href="about.php">About Us</a></li>
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Regions <i class="icon-arrow-down" aria-hidden="true"></i></a> 
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-north.php">North</a></li>  <!---HTML link & File for North region and popular North Cities-->
                                        <li><a href="blog-central.php">Central</a></li> <!---HTML link & File for Central region and popular Central Cities-->
                                        <li><a href="blog-south.php">South</a></li> <!---HTML link & File for South region and popular South Cities-->
                                    </ul> 
                                </li>

                                <li class="submenu dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Popular Cities <i class="icon-arrow-down" aria-hidden="true"></i></a> 
                                    <ul class="dropdown-menu">
                                        <li><a href="Rome.php">Rome</a></li> <!---HTML link & File -->
                                        <li><a href="Venice.php">Venice</a></li> <!---HTML link & File -->
                                        <li><a href="Florence.php">Florence</a></li> <!---HTML link & File -->
                                        <li><a href="Milan.php">Milan</a></li> <!---HTML link & File -->
                                     </ul> 
                                  
                                     <li class="submenu dropdown">
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Popular Itineraries <i class="icon-arrow-down" aria-hidden="true"></i></a> 
                                        <ul class="dropdown-menu">
                                        <li><a href="child-friendly.php">Child Friendly</a></li> <!---HTML link & File -->
                                        <li><a href="accessibility-friendly.php">Accessiblity Friendly</a></li> <!---HTML link & File -->
                                        <li><a href="rome's-top.php">Rome's Top Destinations</a></li> <!---HTML link & File -->
                                        <li><a href="italy-budget.php">Italy On a Budget</a></li> <!---HTML link & File -->
                                         </ul> 
                                <li><a href="contact.php">Contact Us</a></li> <!-- Contact HTML FILE AND LINK GOES HERE-->
                                <?php if (isset($user)): ?>

                                    <li><font color="white"> Hello <?= htmlspecialchars($user["name"]) ?></font></p>  </li>

                                    <p><a href="logout.php" ><font color="white">Log out</font> </a></p>

                                    <?php else: ?>

                                    <li>

                                    <a href="login.php">Log in</a> or <a href="signup.html">sign up</a></li>

                                <?php endif; ?>
                            </ul>
                            <div class="header_sidemenu">
                                <div class="mhead">
                                </div>
                            </div>
                        </div><!-- /.navbar-collapse --> 
                        <div class="register-login">
                            <a href="#" class="mr-2" data-toggle="modal" data-target="#register"><i class=""></i> </a>
                            <a href="#" data-toggle="modal" data-target="#login"><i class=""></i> </a>
                        </div>    
                        <div id="slicknav-mobile"></div>
                    </div>
                </div><!-- /.container-fluid --> 
            </nav>
        </div>
        <!-- Navigation Bar Ends -->
    </header>
    <!-- header ends -->

    <!-- banner starts -->
    <section class="banner overflow-hidden">
        <div class="slider video-slider">
            <div class="banner-outer">
                <div class="video-banner">
                    <video autoplay muted loop id="vid">
                        <source src="images/Italian Landscapes.mp4" type="video/mp4">
                    </video>
                    <div class="overlay"></div>
                </div>
                <div class="swiper-content">
                    <h4 class="white">Amazing Places</h4>
                    <h1 class="white mb-4">Explore Italy Like Never Before</h1>
                    <a href="destination-left.php" class="per-btn">
                      <span class="white">Discover</span>
                    <i class="fa fa-arrow-right white"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- banner ends -->
    <!-- Form and Quiz Section Starts Here -->
    <section class="about-us p-0">
        <div class="container">
            <div class="about-image-box">
                <div class="row">
                    <div class="col-lg-7 col-sm-12">
                        <div class="about-content pt-9">
                            <h4 class="mb-1 blue font-weight-normal">About See The Seas</h4>
                            <h2>We're Truly Dedicated To Make Your Travel Experience in Italy As Simple And Fun As Possible.</h2>
                            <p class="mb-0">The goal of See the Seas is to provide all future Italian travelers with an opportunity to navigate and organize the plethora of sites and tours into one convent document that can be shared with friends and family. From spectacular cities to ancient ruins and even soaring mountains and seas, Italy is an amazing destination. Oh, we could NOT forget about food either!</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12">
                        <!-- Quiz Form Starts here -->
                        <div class="form-main">
                            <div class="form-content w-100 p-0"> 
                                <h3 class="form-title text-center m-0 p-3 white"> Take a Quiz to Find your next Adventure </h3>
                                <div class="form-content-inner p-4">
                                    <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <i class="fa fa-map-marker"></i>
                                                <select class="niceSelect">
                                                    <option value="1">Your Destination of Interest</option>
                                                    <option value="2">Amalfi Coast</option>
                                                    <option value="3">Milan</option>
                                                    <option value="4">Positano</option>
                                                    <option value="5">Rome</option>
                                                    <option value="6">Sicily</option>
                                                    <option value="7">Tuscany</option>
                                                    <option value="8">Venice</option>
                                                    <option value="9">Verona</option>
                                                </select>
                                            </div>                            
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <i class="fa fa-running"></i>
                                                <select class="niceSelect">
                                                    <option value="0">Preferred Activity Level</option>
                                                    <option value="0">Relaxing Vacation</option>
                                                    <option value="1">Scenic Explorer</option>
                                                    <option value="2">Outgoing Adventurous</option>
                                                </select>
                                            </div>                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <i class="fa fa-user"></i>
                                                <select class="niceSelect">
                                                    <option value="1"># of Adults</option>
                                                    <option value="2">0</option>
                                                    <option value="3">1</option>
                                                    <option value="4">2</option>
                                                    <option value="5">3</option>
                                                    <option value="6">4</option>
                                                    <option value="7">5</option>
                                                </select>
                                            </div>                             
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <i class="fa fa-user"></i>
                                                <select class="niceSelect">
                                                    <option value="1"># of Children</option>
                                                    <option value="2">0</option>
                                                    <option value="3">1</option>
                                                    <option value="4">2</option>
                                                    <option value="5">3</option>
                                                    <option value="6">4</option>
                                                    <option value="7">5</option>
                                                </select>
                                            </div>                             
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <i class="fa fa-dollar-sign"></i>
                                                <select class="niceSelect">
                                                    <option value="1">Select Per Person Budget</option>
                                                    <option value="2">Less than $50/event</option>
                                                    <option value="3">Less than $100/event</option>
                                                    <option value="3">No Specific Budget</option>
                                                </select>
                                            </div>                             
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <i class="fa fa-wheelchair"></i>
                                                <select class="niceSelect">
                                                    <option value="0">Include Accessible Destinations</option>
                                                    <option value="0">Yes</option>
                                                    <option value="1">No</option>
                                                    <option value="2">Not Sure</option>
                                                </select>
                                            </div>                            
                                        </div>
                                    <div class="col-lg-12">
                                        <div class="form-group m-0 w-100 text-center">
                                            <a href="#" class="nir-btn"> Submit</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- form main ends -->
                    </div>
                </div>
            </div>

            <!-- Counter -->
            <div class="counter-main pt-6">
                <div class="counter text-center">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="counter-item bg-navy">
                                <i class="fa fa-home white mb-1"></i>
                                <h3 class="value mb-0 white d-inline ml-2">20</h3>
                                <h4 class="m-0 white">Regions</h4>
                            </div>    
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="counter-item bg-navy">
                                <i class="fa fa-mountain white mb-1"></i>
                                <h3 class="value mb-0 white d-inline ml-2">25</h3>
                                <h4 class="m-0 white">National Parks </h4>
                            </div>    
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="counter-item bg-navy">
                                <i class="fa fa-landmark white mb-1"></i>
                                <h3 class="value mb-0 white d-inline ml-2">55</h3>
                                <h4 class="m-0 white">Historical Monuments</h4>
                            </div>    
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="counter-item bg-navy">
                                <i class="fa fa-smile white mb-1"></i>
                                <h3 class="value mb-0 white d-inline ml-2">0</h3>
                                <h4 class="m-0 white">Stress </h4>
                            </div>    
                        </div>

                    </div>
                </div> 
            </div>
            <!-- End Counter -->
            
        </div>
    </section>
    <!-- form ends -->

    <!-- Fav destination Starts -->
    <section class="trending destination pb-6 pt-5" >
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0">Find Your Next <span> Adventure </span></h2>
                <p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div>  
            <div class="trend-box">
                <div class="price-navtab text-center mb-4">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#historical">Historical</a></li>
                        <li><a data-toggle="tab" href="#weekend">Family Friendly</a></li>
                        <li><a data-toggle="tab" href="#holidays">Seasonal</a></li>
                        <li><a data-toggle="tab" href="#special">Accessiblity Friendly</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="historical" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/destination/historical/basilica.png" alt="an image of the Basilica of San Zeno Maggiore">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">178 Reviews</span>
                                            </div>
                                            <h4><a href="#">Basilica of San Zeno Maggiore</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 852 Visiting <i class="fa fa-map-marker mr-1 ml-3"></i> Verona</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">This large Romanesque basilica, with cloisters and a separate bell tower, was part of a Benedictine monastery that often housed the German Roman emperors.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"> Price: £3/person</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/destination/historical/valleytemple.png" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">Valley of the Temples</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 1615 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> Silicy</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A large complex of temples and tombs in Agrigento, dating back to 500 BCE. </p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center">Ticket Price: £10/Person</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/destination/historical/duomo.png" alt="image of Duomo">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">256 Reviews</span>
                                            </div>
                                            <h4><a href="#">Duomo di Milano</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 926 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> Milan</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">This iconic architecture is constructed with pink-hued white marble that was brought from the quarries LakeMaggiore. It was built in 1386 and is the biggest cathedral in Italy.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"> Cathedral Tickets: £3/Person</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="weekend" class="tab-pane fade">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/destination/familyfriendly/pinocchio.png" alt="image of Pinnochio Park in Tuscany">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">The Pinnochio Park</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 852 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> Tuscany</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">Pinocchio Park of Collodi is based on the book, The Adventures of Pinocchio, which was written in 1883. It is an ideal vacation for children where you can enter the magic of the fairy tale about Pinocchio.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/destination/familyfriendly/gladiator.png" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">The Gladiator School of Rome Museum</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 615 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i>Rome</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">2 hour kid friendly classes are held to teach children about gladiator from dresssing up in gladiator costumes, learning how to use weapons, Roman history while playing fun games.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img src="images/reviewer/2.jpg" class="d-author mr-2" alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/destination/familyfriendly/sancarlino.png" alt="image of San Carlino Theatre">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">25 Reviews</span>
                                            </div>
                                            <h4><a href="#">San Carlino Theatre</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 926 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> America.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A puppet theater featuring family friendly performances that use puppets, actors, muscians, and clowns providing all with fun and comedic experience. There are also workshops for children to build their own puppet as well.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img src="images/reviewer/1.jpg" class="d-author mr-2" alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="holidays" class="tab-pane fade">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/trending/trending2.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">Pasta Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 852 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> Florence</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderfuls little cottage right on the seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img src="images/reviewer/1.jpg" class="d-author mr-2" alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/trending/trending3.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">Its a me Mario</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 615 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> Mushroom Kingdom</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para"> The princess is in another caslte</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img src="images/reviewer/2.jpg" class="d-author mr-2" alt=""> Bowser</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/trending/trending4.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">25 Reviews</span>
                                            </div>
                                            <h4><a href="#">NULL</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 926 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> NULL</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img src="images/reviewer/1.jpg" class="d-author mr-2" alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="special" class="tab-pane fade">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/ItalyPhotos/Venice/stmark.png" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#"> The Grand Canal</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 852 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> Venice</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">The Grand Canal is the main waterway of Venice. The Canal is lined with palaces and spanned by the Rialto Bridge.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center">Price: £30/adult</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/ItalyPhotos/Verona/arena.png" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#"> The Arena</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 615 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> Verona</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">This is a Roman amphitheatre in Piazza Bra, built in 30 AD. It is still in use and known world wide for the huge opera performances given there.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center">Price: £10/person</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/ItalyPhotos/Milan/gallvitteman.png" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">25 Reviews</span>
                                            </div>
                                            <h4><a href="#">Galleria Vittorio Emanuele II</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 926 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> Milan</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">It was constructed during the late 1800s, and is one of the oldest enclosed shopping malls in the world.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center">Price: Free</p> <!--<p class="price white mb-0">From <span>$350.00</span></p>-->
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </section>
    <!-- Fav destination Ends -->

    <!-- top destination starts -->
    <section class="top-destination overflow-hidden bg-navy pt-9">
        <div class="container">
            <div class="section-title section-title-w text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0 white"> Italy Is<span> Gorgeous</span></h2>
                <p class="mb-0 white">Travel gives us time to separate ourselves from our regular activies as well as letting us celebrate the things that we many not get the chance to.</p>
            </div>  
            <div class="desti-inner">
            <div class="row d-flex align-items-center">
                <div class="col-lg-4 col-md-6 p-1">
                    <div class="desti-image">
                        <img src="images/destination/SocialBlock/rome-general.png" alt="desti">
                        <div class="desti-content">
                            <div class="rating mb-1">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h4 class="white mb-0">Rome</h4>
                        </div>
                        <div class="desti-overlay">
                            <a href="#" class="nir-btn">
                              <span class="white">Info</span>
                                <i class="fa fa-arrow-right white pl-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-1">
                    <div class="desti-image">
                        <img src="images/destination/SocialBlock/venice-general.png" alt="desti">
                        <div class="desti-content">
                            <div class="rating mb-1">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h4 class="white mb-0">Venice</h4>
                        </div>
                        <div class="desti-overlay">
                            <a href="#" class="nir-btn">
                              <span class="white">Info</span>
                                <i class="fa fa-arrow-right white pl-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-1">
                    <div class="desti-image">
                        <img src="images/destination/SocialBlock/florence-general.png" alt="desti">
                        <div class="desti-content">
                            <div class="rating mb-1">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h4 class="white mb-0">Florence</h4>
                        </div>
                        <div class="desti-overlay">
                            <a href="#" class="nir-btn">
                              <span class="white">Info</span>
                                <i class="fa fa-arrow-right white pl-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 p-1">
                    <div class="desti-image">
                        <img src="images/destination/SocialBlock/alps-general.png" alt="desti">
                        <div class="desti-content">
                            <div class="rating mb-1">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h4 class="white mb-0">Alps</h4>
                        </div>
                        <div class="desti-overlay">
                            <a href="#" class="nir-btn">
                              <span class="white">Info</span>
                                <i class="fa fa-arrow-right white pl-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 p-1">
                    <div class="desti-image">
                        <img src="images/destination/SocialBlock/vatican-general.png" alt="desti">
                        <div class="desti-content">
                            <div class="rating mb-1">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h4 class="white mb-0">Vatican</h4>
                        </div>
                         <div class="desti-overlay">
                            <a href="#" class="nir-btn">
                              <span class="white">Info</span>
                                <i class="fa fa-arrow-right white pl-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 p-1">
                    <div class="desti-image">
                        <img src="images/destination/SocialBlock/positano_general.png" alt="desti">
                        <div class="desti-content">
                            <div class="rating mb-1">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h4 class="white mb-0">Positano</h4>
                        </div>
                        <div class="desti-overlay">
                            <a href="#" class="nir-btn">
                              <span class="white">Info</span>
                                <i class="fa fa-arrow-right white pl-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 p-1">
                    <div class="desti-image">
                        <img src="images/destination/SocialBlock/amalfi-general.png" alt="desti">
                        <div class="desti-content">
                            <div class="rating mb-1">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h4 class="white mb-0">Amalfi Coast</h4>
                        </div>
                        <div class="desti-overlay">
                            <a href="#" class="nir-btn">
                              <span class="white">Info</span>
                                <i class="fa fa-arrow-right white pl-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>   
        <div id="particles-js"></div> 
    </section>
    <!-- top destination ends -->

    <!-- Trending Starts -->
    <section class="trending destination-b pb-6 pt-9">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0">Perfect <span>Itineraries</span></h2>
                <p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div>  
            <div class="trend-box">
                <div class="row team-slider">
                    <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                        <div class="trend-item">
                            <div class="trend-image">
                                <img src="images/Activites/Hiking_Alps.jpg" alt="image">
                                <div class="trend-tags">
                                    <a href="#"><i class="flaticon-like"></i></a>
                                </div>
                            </div>
                            <div class="trend-content-main">
                                <div class="trend-content">
                                    <h6 class="font-weight-normal"><i class="fa fa-map-marker-alt"></i> NULL</h6>
                                    <h4><a href="#">NULL</a></h4>
                                    <div class="rating-main d-flex align-items-center">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="ml-2">38 Reviews</span>
                                    </div>
                                </div>
                                <div class="trend-last-main">
                                    <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                    <div class="trend-last d-flex align-items-center justify-content-between">
                                        <p class="mb-0 white"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
                                        <div class="trend-price">
                                            <p class="price white mb-0">From <span>$350.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                        <div class="trend-item">
                            <div class="trend-image">
                                <img src="images/trending/trending2.jpg" alt="image">
                                <div class="trend-tags">
                                    <a href="#"><i class="flaticon-like"></i></a>
                                </div>
                            </div>
                            <div class="trend-content-main">
                                <div class="trend-content">
                                    <h6 class="font-weight-normal"><i class="fa fa-map-marker-alt"></i> NULL</h6>
                                    <h4><a href="#">NULL</a></h4>
                                    <div class="rating-main d-flex align-items-center">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="ml-2">38 Reviews</span>
                                    </div>
                                </div>
                                <div class="trend-last-main">
                                    <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                    <div class="trend-last d-flex align-items-center justify-content-between">
                                        <p class="mb-0 white"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
                                        <div class="trend-price">
                                            <p class="price white mb-0">From <span>$350.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                        <div class="trend-item">
                            <div class="trend-image">
                                <img src="images/trending/trending3.jpg" alt="image">
                                <div class="trend-tags">
                                    <a href="#"><i class="flaticon-like"></i></a>
                                </div>
                            </div>
                            <div class="trend-content-main">
                                <div class="trend-content">
                                    <h6 class="font-weight-normal"><i class="fa fa-map-marker-alt"></i> NULL</h6>
                                    <h4><a href="#">NULL</a></h4>
                                    <div class="rating-main d-flex align-items-center">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="ml-2">38 Reviews</span>
                                    </div>
                                </div>
                                <div class="trend-last-main">
                                    <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                    <div class="trend-last d-flex align-items-center justify-content-between">
                                        <p class="mb-0 white"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
                                        <div class="trend-price">
                                            <p class="price white mb-0">From <span>$350.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                        <div class="trend-item">
                            <div class="trend-image">
                                <img src="images/trending/trending4.jpg" alt="image">
                                <div class="trend-tags">
                                    <a href="#"><i class="flaticon-like"></i></a>
                                </div>
                            </div>
                            <div class="trend-content-main">
                                <div class="trend-content">
                                    <h6 class="font-weight-normal"><i class="fa fa-map-marker-alt"></i> NULL</h6>
                                    <h4><a href="#">NULL</a></h4>
                                    <div class="rating-main d-flex align-items-center">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="ml-2">38 Reviews</span>
                                    </div>
                                </div>
                                <div class="trend-last-main">
                                    <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                    <div class="trend-last d-flex align-items-center justify-content-between">
                                        <p class="mb-0 white"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
                                        <div class="trend-price">
                                            <p class="price white mb-0">From <span>$350.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </section>
    <!-- Trending Ends -->
    <!-- Call to action starts -->
    <section class="call-to-action pb-8">
        <div class="call-main">
            <div class="container">
            <div class="action-content text-center">
                <h3 class="white mb-0">Find your next Adventure</h3>
                <h2 class="white call-name">EXPLORE ITALY</h2>
            </div> 
            <div class="video-button text-center">
                <img src="images/destination/itlvidimg.jpg" alt="">
                 <div class="call-button text-center">
                    <button type="button" class="play-btn js-video-button" data-video-id="152879427" data-channel="vimeo">
                        <i class="fa fa-play"></i>
                    </button>
                </div>
                <div class="video-figure"></div>
            </div>    
            </div>
        </div>
    </section>
    <!-- call to action Ends -->
    <!-- Reviewers Start Here -->
    <section class="testimonial pt-0 pb-9">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0">What <span>People Say About Us</span></h2>
                <p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div> 
            <div class="row about-slider w-75 mx-auto">
                <div class="col-sm-4 item">
                    <div class="testimonial-item text-center">
                        <div class="details">
                            <i class="fa fa-quote-left mb-2"></i>
                            <p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                        </div>
                        <div class="author-info mt-2">
                            <a href="#"><img src="images/testimonial/img1.jpg" alt=""></a>
                            <div class="author-title">
                                <h4 class="m-0 yellow">Jared Erondu</h4>
                                <span>Solo Traveler</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 item">
                    <div class="testimonial-item text-center">
                        <div class="details">
                            <i class="fa fa-quote-left mb-2"></i>
                            <p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem  Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                        </div>
                        <div class="author-info mt-2">
                            <a href="#"><img src="images/testimonial/img2.jpg" alt=""></a>
                            <div class="author-title">
                                <h4 class="m-0 yellow">Cadic Vegeta</h4>
                                <span>Travel Enthusiast</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 item">
                    <div class="testimonial-item text-center">
                        <div class="details">
                            <i class="fa fa-quote-left mb-2"></i>
                            <p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                        </div>
                        <div class="author-info mt-2">
                            <a href="#"><img src="images/testimonial/img3.jpg" alt=""></a>
                            <div class="author-title">
                                <h4 class="m-0 yellow">Jonathan Beri</h4>
                                <span>Influencer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Reviewers Ends Here--> 
    <!-- footer starts -->
    <footer class="footer1 pt-10 bg-lgrey">
        <div class="footer-upper pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-4">
                        <div class="footer-links">
                            <img src="" alt="">
                            <p class="mt-3 black">
                                When in Rome, do as the Romans do; When elsewhere, live as they live elsewhere.
                            </p>
                            <ul>
                                <li><strong>Mailing Address:</strong> 1000 Morris Ave, Union, NJ 07083, United States of America</li>
                                <li><strong>Email:</strong> info@SeetheSeas.com</li>
                                <li><strong>Website:</strong> www.SeetheSeas.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4">
                        <div class="footer-links">
                            <h4 class="black">Company</h4>
                            <ul>
                                <li><a href="">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Customer Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4">
                        <div class="footer-links">
                            <h4 class="black">Services</h4>
                            <ul>
                                <li><a href="#">Feedback</a></li>
                                <li><a href="contact.php">Contact us</a></li>
                                <li><a href="#">Our Service</a></li>
                                <li><a href="faq.php">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-4">
                        <div class="footer-links">
                            <h4 class="black">Newsletter</h4>
                            <p class="black">Want to be notified when we launch a new itinerary or an udpate? Just sign up and we'll send you a notification by email.</p>
                            <div class="newsletter-form">
                                <form>
                                    <input type="email" placeholder="Enter your email">
                                    <input type="submit" class="nir-btn mt-2 w-100" value="Subscribe">
                                </form>
                            </div> 
                        </div>     
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright pt-2 pb-2 border-t">
            <div class="container">
                <div class="copyright-inner d-md-flex align-items-center justify-content-between">
                    <div class="copyright-text">
                        <p class="m-0 black">2022 Sea the Seas™. All rights reserved.</p>
                    </div>
                    <div class="social-links">
                        <ul>  
                            <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>    
            </div>
        </div>
    </footer>
    <!-- footer ends -->
    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->
    <!-- *Scripts* -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/particlerun.js"></script>
    <script src="js/main.js"></script>
    <script src="js/custom-swiper.js"></script>
    <script src="js/custom-nav.js"></script>
    <script src="js/custom-date.js"></script>
</body>
</html>