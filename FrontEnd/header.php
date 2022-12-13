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
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>See the Seas Italian Vacation</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
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
<style>
.main_header_area{
    background: #162241;
}

</style>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- header starts -->
    <header class="main_header_area">
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
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Popular Locations <i class="icon-arrow-down" aria-hidden="true"></i></a> 
                                    <ul class="dropdown-menu">
                                        <li><a href="Rome.php">Rome</a></li> <!---HTML link & File -->
                                        <li><a href="Venice.php">Venice</a></li> <!---HTML link & File -->
                                        <li><a href="Tuscany.php">Tuscany</a></li> <!---HTML link & File -->
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