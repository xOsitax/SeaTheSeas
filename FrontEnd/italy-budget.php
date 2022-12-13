<?php
include "header.php"
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">


    <!-- BreadCrumb Starts -->  
    <div class="breadcrumb-main pb-0" style="background-image: url(images/bg/bg8.jpg);">
        <div class="breadcrumb-outer pt-10">
            <div class="container">
                <div class="breadcrumb-content bread-content text-center pt-10">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Popular Itineraries</li>
                        </ul>
                    </nav>
                    <h2 class="mb-0 white text-uppercase">Italy On A Budget</h2>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </div>
    <!-- BreadCrumb Ends -->  

    <div class="tabs-navbar1 bg-white sticky1 p-4">
        <div class="row">
            <div class="col-md-12">
                <ul id="tabs" class="nav nav-tabs bordernone">
                    <li class="active"><a data-toggle="tab" href="#description">Highlight</a></li>
                    <li><a data-toggle="tab" href="#iternary">Itinerary</a></li>
                    <li><a data-toggle="tab" href="#single-map">Map</a></li>
                    <li><a data-toggle="tab" href="#single-review">Reviews</a></li>
                    <li><a data-toggle="tab" href="#single-comments">Comments</a></li>
                    <li><a data-toggle="tab" href="#single-add-review" class="bordernone">Add Reviews</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- blog starts -->
    <section class="blog trending destination-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <div class="description-images mb-4">
                            <div class="thumbnail-images">
                                <div class="slider-store">
                                    <div>
                                       <img src="images/ItalyPhotos/Rome/stpeters.png" alt="1">
                                    </div>
                                    <div>
                                        <img src="images/ItalyPhotos/Milan/gallvitteman.png" alt="1">
                                    </div>
                                    <div>
                                        <img src="images/ItalyPhotos/Amalfi Coast/cimbronegardens.png" alt="1">
                                    </div>
                                    <div>
                                        <img src="images/ItalyPhotos/Tuscany/pistoia.png" alt="1">
                                    </div>
                                    <div>
                                        <img src="images/ItalyPhotos/Positano/fornillo.png" alt="1">
                                    </div> 
                                    <div>
                                        <img src="images/ItalyPhotos/Sicily/antsalreg.png" alt="1">
                                    </div>   
                                </div>
                                <div class="slider-thumbs">
                                    <div>
                                       <img src="images/ItalyPhotos/Rome/stpeters.png" alt="1">
                                    </div>
                                    <div>
                                        <img src="images/ItalyPhotos/Milan/gallvitteman.png" alt="1">
                                    </div>
                                    <div>
                                        <img src="images/ItalyPhotos/Amalfi Coast/cimbronegardens.png" alt="1">
                                    </div>
                                    <div>
                                        <img src="images/ItalyPhotos/Tuscany/pistoia.png" alt="1">
                                    </div>
                                    <div>
                                        <img src="images/ItalyPhotos/Positano/fornillo.png" alt="1">
                                    </div>  
                                    <div>
                                        <img src="images/ItalyPhotos/Sicily/antsalreg.png" alt="1">
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div class="description" id="description">
                            <div class="single-full-title border-b mb-2 pb-2">
                                <div class="single-title">
                                    <h3 class="mb-1">Rome-Milan-Tuscany-Amf</h3>
                                    <div class="rating-main d-sm-flex align-items-center">
                                        <p class="mb-0 mr-2"><i class="flaticon-location-pin"></i> Italy</p>
                                        <div class="rating mr-2">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span>(1,186 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="description-inner mb-2">
                                <h4>Highlight</h4>
                                <p>The "Italy on a Budget" locations shown above include St. Peters Basilica in Rome, the Galleria Vittorio Emanuele II in Milan, Villa Cimbrone Gardens along the Amalfi Coast, Zoo of Pistoia in Tuscany, Via Fornilla in Positano, and Antonio Salinas Regional Archeological Museum in Sicily.</p>
                                <p class="mb-0"></p>
                            </div>
                            <div class="description-inner mb-4">
                                <h4>What to Expect</h4>
                                <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
                                <p class="mb-0">The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>               
                            </div>
                        </div>

                        <div class="accrodion-grp faq-accrodion mb-4" id="iternary" data-grp-name="faq-accrodion">
                            <h4>Iternary</h4>
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h5 class="mb-0"><span>Itinerary 1</span> -Explore Venice</h5>
                                </div>
                                <div class="accrodion-content" style="display: block;">
                                    <div class="inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion ">
                                <div class="accrodion-title">
                                    <h5 class="mb-0"><span>Itinerary 2</span> - Wander Rome</h5>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h5 class="mb-0"><span>Itinerary 3</span> -Tour Pompeii</h5>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion ">
                                <div class="accrodion-title">
                                    <h5 class="mb-0"><span>Itinerary 4</span> - Eat in Sicily</h5>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>

                        <div class="single-map mb-4" id="single-map">
                            <h4>Map</h4>
                            <div class="map">
                                <div style="width: 100%">
                                    <iframe height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6146980.894973746!2d8.222489642715058!3d41.2118428319275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d4fe82448dd203%3A0xe22cf55c24635e6f!2sItaly!5e0!3m2!1sen!2sus!4v1670938262389!5m2!1sen!2sus"></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="single-review mb-4" id="single-review">
                            <h4>Average Reviews</h4>
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-4 col-md-4">
                                    <div class="review-box bg-pink text-center pb-4 pt-4">
                                        <h2 class="mb-1 white"><span>4.9</span>/5</h2>
                                        <h4 class="white mb-1">"Exploring Italy in Luxury"</h4>
                                        <p class="mb-0 white font-italic">From 40 Reviews</p>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="review-progress">
                                        <div class="progress-item">
                                            <p>Safety</p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                                    <span class="sr-only">75% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <p>Food</p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                                    <span class="sr-only">95% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <p>Value for money</p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <p>Overall</p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                                    <span class="sr-only">90% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- blog comment list -->
                        <div class="single-comments single-box mb-4" id="single-comments">
                            <h5 class="border-b pb-2 mb-2">Showing verified guest comments</h5>
                            <div class="comment-box">
                                <div class="comment-image">
                                    <img src="images/reviewer/1.jpg" alt="image">
                                </div>
                                <div class="comment-content">
                                    <h5 class="mb-1">Helena</h5>
                                    <p class="comment-date">April 25, 2019 at 10:46 am</p>
                                    <div class="comment-rate">
                                        <div class="rating mar-right-15">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="comment-title">LIFE CHANGING!</span>
                                    </div>    
                                    
                                    <p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
                                    <div class="comment-like">
                                        <div class="like-title">
                                            <a href="#" class="nir-btn">Reply</a>
                                        </div>
                                        <div class="like-btn pull-right">
                                            <a href="#" class="like"><i class="fa fa-thumbs-up"></i> Like</a>
                                            <a href="#" class="disike"><i class="fa fa-thumbs-down"></i> Dislike</a>
                                            <a href="#" class="love"><i class="flaticon-like"></i> Love</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-box">
                                <div class="comment-image">
                                    <img src="images/reviewer/2.jpg" alt="image">
                                </div>
                                <div class="comment-content">
                                    <h5 class="mb-1">Helena</h5>
                                    <p class="comment-date">April 25, 2019 at 10:46 am</p>
                                    <div class="comment-rate">
                                        <div class="rating mar-right-15">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="comment-title">Best Vacation</span>
                                    </div> 
                                    
                                    <p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
                                    <div class="comment-like">
                                        <div class="like-title">
                                            <a href="#" class="nir-btn">Reply</a>
                                        </div>
                                        <div class="like-btn pull-right">
                                            <a href="#" class="like"><i class="fa fa-thumbs-up"></i> Like</a>
                                            <a href="#" class="disike"><i class="fa fa-thumbs-down"></i> Dislike</a>
                                            <a href="#" class="love"><i class="flaticon-like"></i> Love</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- blog review -->
                        <div class="single-add-review" id="single-add-review">
                            <h4>Write a Review</h4>
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea>Comment</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-btn">
                                            <a href="#" class="nir-btn">Submit Review</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog Ends -->  

    <!-- footer starts -->
    <footer style="background-image:url(images/bg/bg3.jpg);" class="pt-10">
        <div class="footer-upper pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-4">
                        <div class="footer-links">
                            <img src="images/STSLogo/logotext-tan.png" alt="">
                            <p class="mt-3">
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
                            <h4 class="white">Company</h4>
                            <ul>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Customer Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4">
                        <div class="footer-links">
                            <h4 class="white">Services</h4>
                            <ul>
                                <li><a href="#">Feedback</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Our Service</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-4">
                        <div class="footer-links">
                            <h4 class="white">Newsletter</h4>
                            <p>Want to be notified?. Just sign up and we'll send you a notification by email.</p>
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
        <div class="footer-copyright pt-2 pb-2">
            <div class="container">
                <div class="copyright-inner d-md-flex align-items-center justify-content-between">
                    <div class="copyright-text">
                        <p class="m-0 white">2022 See the Seas. All rights reserved.</p>
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
    <!-- *Scripts* -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
    <script src="js/custom-nav.js"></script>
    <script src="js/custom-accordian.js"></script>
    <script src="js/custom-navscroll.js"></script>
</body>
</html>