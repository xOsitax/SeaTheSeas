<?php
include "header.php"
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">



    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main pb-2" style="background-image: url(images/bg/bg8.jpg);">
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends --> 

    <!-- Dashboard -->
    <div id="dashboard" class="pt-10 pb-10">
        <div class="container">
            <div class="dashboard-main">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="dashboard-sidebar">
                            <div class="profile-sec">
                                <div class="author-news mb-3">
                                    <div class="author-news-content text-center p-3">
                                        <div class="author-thumb mt-0">
                                            <img src="images/team/img1.jpg" alt="author">
                                        </div>
                                        <div class="author-content pt-2 p-0">
                                            <h3 class="mb-1 white"><a href="#" class="white">Ketty Nelson</a></h3>
                                            <p class="detail"><i class="fa fa-map-marker"></i> 264, Carson Street USA, KY 40539</p>
                                            <p class="detail"><i class="fa fa-phone"></i> +45 8547 9851</p>
                                            <div class="header-social mt-2">
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dot-overlay"></div>
                                </div>
                            </div>
                            <!-- Responsive Navigation Trigger -->
                            <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>  
                            <div class="dashboard-nav">
                                <div class="dashboard-nav-inner">
                                    <ul>
                                        <li><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
                                        <li><a href="dashboard-my-profile.html"><i class="sl sl-icon-user"></i> Profile</a></li>                     
                                        <li><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
                                        <li><a href="dashboard-reviews.html"><i class="sl sl-icon-star"></i> Reviews</a></li>
                                        <li class="active"><a href="dashboard-add-new.html"><i class="sl sl-icon-plus"></i> Add listing</a></li>
                                        <li><a href="dashboard-list.html"><i class="sl sl-icon-layers"></i> Listing</a></li>
                                        <li><a href="dashboard-history.html"><i class="fa fa-list-ul"></i>Booking History</a></li>
                                        <li><a href="login.html"><i class="sl sl-icon-power"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">    
                        <div class="dashboard-content">
                            <div class="add-listing">   
                                <div class="listing-main">
                                    <div class="addlist-inner mb-3">
                                        <div class="addlist-title">
                                            <h4 class="m-0"><i class="fa fa-user pr-2"></i>General Information</h4>
                                        </div>
                                        <div class="addlist-content bg-white">
                                            <form action="/">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="input-box">
                                                                <label class="form-label">Title</label>
                                                                <input type="text" class="" placeholder="Type your title here">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="input-box">
                                                                <label>Tagline</label>
                                                                <input type="text" class="" placeholder="Your Listing Motto or Tagline">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Select Gender</label>
                                                            <div class="input-box">
                                                                <select class="niceSelect">
                                                                    <option>Male</option>
                                                                    <option>Female</option>
                                                                    <option>Other</option>
                                                                </select>
                                                            </div>                             
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="input-box">
                                                                <label>Phone No.</label>
                                                                <input type="text" class="" placeholder="Phone Number">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="input-box">
                                                                <label>Email Address</label>
                                                                <input type="text" class="" placeholder="Email Address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="input-box">
                                                                <label>Website</label>
                                                                <input type="text" class="" placeholder="http://">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                                            <div class="form-group">
                                                            <label>Location</label>
                                                            <div class="input-box">
                                                                <select class="niceSelect">
                                                                    <option>Australia</option>
                                                                    <option>Sydney</option>
                                                                    <option>Newyork</option>
                                                                    <option>Los Angels</option>
                                                                </select>
                                                            </div>                             
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                                            <div class="form-group">
                                                            <div class="input-box">
                                                                <label>Regions</label>
                                                                <input type="text" class="" placeholder="Select your listing region">
                                                            </div>                             
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                                            <div class="form-group mb-0">
                                                            <label>Company Logo</label>
                                                            <div class="input-box">
                                                                <label class="upload-file mb-0">
                                                                    <input type="file">
                                                                    <i class="far fa-image"></i>
                                                                    <span>Click here or drop file to upload</span>
                                                                </label>
                                                            </div>                             
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                                        <div class="form-group mb-0">
                                                            <label>Cover Photo</label>
                                                            <div class="input-box">
                                                                <label class="upload-file mb-0">
                                                                    <input type="file">
                                                                    <i class="far fa-image"></i>
                                                                    <span>Click here or drop file to upload</span>
                                                                </label>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="addlist-inner mb-3">
                                        <div class="addlist-title">
                                            <h4 class="m-0"><i class="fa fa-user pr-2"></i>Detail Information</h4>
                                        </div>
                                        <div class="addlist-content bg-white">
                                            <form action="/">
                                                <div class="row">
                                                     <div class="col-lg-6 col-md-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Select Price Range</label>
                                                            <div class="input-box">
                                                                <select class="niceSelect">
                                                                    <option>Ultra High ($$$$)</option>
                                                                    <option>Expensive ($$$)</option>
                                                                    <option>Moderate ($$)</option>
                                                                    <option>Cheap ($)</option>
                                                                </select>
                                                            </div>                             
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="input-box">
                                                                <label>Custom Date</label>
                                                                <input type="text" class="" id="cdate" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Tags</label>
                                                            <div class="input-box">
                                                                <select class="niceSelect">
                                                                    <option>orange</option>
                                                                    <option>white</option>
                                                                    <option>purple</option>
                                                                </select>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Select Category</label>
                                                            <div class="input-box">
                                                                <select class="niceSelect ">
                                                                    <option>Restaurant</option>
                                                                    <option>&nbsp;&nbsp; Food</option>
                                                                    <option>&nbsp;&nbsp; Lunch Pack</option>
                                                                    <option>Places</option>
                                                                    <option>&nbsp;&nbsp; Travel</option>
                                                                    <option>&nbsp;&nbsp; Booking</option>
                                                                    <option>&nbsp;&nbsp; Hotel</option>
                                                                    <option>&nbsp;&nbsp; Location</option>
                                                                    <option>Shopping</option>
                                                                    <option>&nbsp;&nbsp; Accessories</option>
                                                                    <option>&nbsp;&nbsp; Clothing</option>
                                                                    <option>&nbsp;&nbsp; Gadgets</option>
                                                                </select>
                                                            </div>    
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Social Information</label>
                                                            <div class="row">
                                                                <div class="col-lg-5 col-md-5 col-xs-12">
                                                                    <div class="input-box">
                                                                        <select class="niceSelect">
                                                                            <option value="behance"> Behance</option>
                                                                            <option value="dribbble"> Dribbble</option>
                                                                            <option value="facebook"> Facebook</option>
                                                                            <option value="flickr"> Flickr</option>
                                                                            <option value="github"> Github</option>
                                                                        </select>
                                                                    </div> 
                                                                </div>
                                                                <div class="col-lg-5 col-md-5 col-xs-12">
                                                                    <div class="input-box">
                                                                        <input type="text" class="" placeholder="http://www.example.com/">
                                                                    </div> 
                                                                </div>
                                                                <div class="col-lg-2 col-md-2 col-xs-12">
                                                                    <div class="listing-btn d-flex justify-content-between align-items-center text-right">
                                                                        <a href="#" class="nir-btn"><i class="fa fa-times"></i></a>
                                                                        <a href="#" class="nir-btn-black"><i class="fa fa-expand-arrows-alt"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>    
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <div class="input-box">
                                                                <label>Description</label>
                                                                <textarea id="desc" rows="8" class="" placeholder="Description"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <a href="#" class="nir-btn"><i class="fa fa-plus"></i> Add New</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    
                                    <div class="addlist-inner mb-3">
                                        <div class="addlist-title">
                                            <h4 class="m-0"><i class="fa fa-calendar-check pr-2"></i>Listing FAQs</h4>
                                        </div>
                                        <div class="addlist-content bg-white">
                                            <form action="/">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group m-0">
                                                            <div class="row d-flex align-items-center">
                                                                <div class="col-lg-4 col-md-5 col-xs-12">
                                                                    <div class="input-box">
                                                                        <input type="text" class="" placeholder="Questions">
                                                                    </div> 
                                                                </div>
                                                                <div class="col-lg-4 col-md-5 col-xs-12">
                                                                    <div class="input-box">
                                                                        <input type="text" class="" placeholder="Answers">
                                                                    </div> 
                                                                </div>
                                                                <div class="col-lg-4 col-md-2 col-xs-12">
                                                                    <div class="listing-btn d-flex justify-content-between align-items-center text-right">
                                                                        <a href="#" class="nir-btn mr-2"><i class="fa fa-times"></i></a>
                                                                        <a href="#" class="nir-btn-black"><i class="fa fa-expand-arrows-alt"></i></a>
                                                                        <a href="#" class="nir-btn"><i class="fa fa-plus"></i> Add New</a>
                                                                    </div>
                                                                </div>
                                                            </div>    
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="term-conds mb-3">
                                        <div class="pretty p-default p-thick p-pulse">
                                            <input type="checkbox" />
                                            <div class="state d-flex align-items-center p-warning-o">
                                                <label>I Agree with all <a href="#">Terms &amp; Conditions</a></label>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="#" class="nir-btn">Submit Listing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>    
            <!-- Content / End -->
        </div>
    </div>
    <!-- Dashboard / End -->

    <!-- footer starts -->
    <footer style="background-image:url(images/bg/bg3.jpg);" class="pt-10 ">
        <div class="footer-upper pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-4">
                        <div class="footer-links">
                            <img src="images/logo-white.png" alt="">
                            <p class="mt-3">
                                In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna
                            </p>
                            <ul>
                                <li><strong>PO Box:</strong> +47-252-254-2542</li>
                                <li><strong>Location:</strong> Collins Street, sydney, Australia</li>
                                <li><strong>Email:</strong> info@Yatriiworld.com</li>
                                <li><strong>Website:</strong> www.Yatriiworld.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4">
                        <div class="footer-links">
                            <h4 class="white">Company</h4>
                            <ul>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4">
                        <div class="footer-links">
                            <h4 class="white">Services</h4>
                            <ul>
                                <li><a href="#">Payment</a></li>
                                <li><a href="#">Feedback</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Our Service</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Site map</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-4">
                        <div class="footer-links">
                            <h4 class="white">Newsletter</h4>
                            <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
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
        <div class="footer-payment">
            <div class="container">
                <div class="footer-pay d-md-flex align-items-center justify-content-between pt-2 pb-2">
                    <div class="footer-payment-nav">
                        <ul class="d-md-flex align-items-center">
                            <li class="mr-2">We Support:</li>
                            <li class="mr-2"><i class="fab fa-cc-mastercard"></i></li>
                            <li class="mr-2"><i class="fab fa-cc-paypal"></i></li>
                            <li class="mr-2"><i class="fab fa-cc-stripe"></i></li>
                            <li class="mr-2"><i class="fab fa-cc-visa"></i></li>
                            <li class="mr-2"><i class="fab fa-cc-discover"></i></li>
                        </ul>
                    </div>
                    <div class="footer-payment-nav mb-0">
                        <ul>
                            <li>
                                <select>
                                    <option>English (United States)</option>
                                    <option>English (United States)</option>                                
                                    <option>English (United States)</option>
                                    <option>English (United States)</option>
                                    <option>English (United States)</option>
                                </select>
                            </li>
                            <li>
                                <select>
                                    <option>$ USD</option>
                                    <option>$ USD</option>
                                    <option>$ USD</option>
                                    <option>$ USD</option>
                                    <option>$ USD</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>    
            </div>
        </div>
        <div class="footer-copyright pt-2 pb-2">
            <div class="container">
                <div class="copyright-inner d-md-flex align-items-center justify-content-between">
                    <div class="copyright-text">
                        <p class="m-0 white">2020 Yatriiworld. All rights reserved.</p>
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
        <div class="overlay"></div>
    </footer>
    <!-- footer ends -->
    
    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <div class="header_sidemenu">
        <div class="header_sidemenu_in">
            <div class="menu">
                <div class="close-menu">
                    <i class="fa fa-times white"></i>
                </div>
                 <div class="m-contentmain">
                    <div class="cart-main">
                        <div class="cart-box">
                            <div class="popup-container">
                                <h5 class="p-3 mb-0 bg-pink white text-caps">My Carts(3 Items)</h5>
                                <div class="cart-entry d-flex align-items-center p-3">
                                    <a href="#" class="image">
                                        <img src="images/shop/shop1.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <a href="#" class="title font-weight-bold">Pullover Batwing</a>
                                        <p class="quantity m-0">Quantity: 3</p>
                                        <span class="price">$45.00</span>
                                    </div>
                                    <div class="button-x">
                                        <i class="icon-close"></i>
                                    </div>
                                </div>
                                <div class="cart-entry d-flex align-items-center p-3">
                                    <a href="#" class="image">
                                        <img src="images/shop/shop2.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <a href="#" class="title font-weight-bold">Pullover Batwing</a>
                                        <p class="quantity m-0">Quantity: 3</p>
                                        <span class="price">$90.00</span>
                                    </div>
                                    <div class="button-x">
                                        <i class="icon-close"></i>
                                    </div>
                                </div>
                                <div class="cart-entry d-flex align-items-center p-3">
                                    <a href="#" class="image">
                                        <img src="images/shop/shop6.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <a href="#" class="title font-weight-bold">Pullover Batwing</a>
                                        <p class="quantity m-0">Quantity: 3</p>
                                        <span class="price">$90.00</span>
                                    </div>
                                    <div class="button-x">
                                        <i class="icon-close"></i>
                                    </div>
                                </div>
                                <div class="summary-total">
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Delivery Charge</div>
                                        <div class="price-s">$10</div>
                                    </div>
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Sub Total</div>
                                        <div class="price-s">$200</div>
                                    </div>
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Discount</div>
                                        <div class="price-s">$2</div>
                                    </div>
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Total</div>
                                        <div class="price-s">$208</div>
                                    </div>
                                </div>
                                <div class="cart-buttons d-flex align-items-center justify-content-between">
                                    <a href="#" class="nir-btn">View Cart</a>
                                    <a href="#" class="nir-btn-black">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="overlay hide"></div>
        </div>
    </div>

    <!-- *Scripts* -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
    <script src="js/custom-nav.js"></script>
    <script src="js/jpanelmenu.min.js"></script>
    <script src="js/dashboard-custom.js"></script>

</body>
</html>
