<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
 
 <script type="text/javascript">
     $(document).ready(function(){

$('#itemslider').carousel({ interval: 3000 });

$('.carousel-showmanymoveone .item').each(function(){
var itemToClone = $(this);

for (var i=1;i<6;i++) {
itemToClone = itemToClone.next();

if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}

itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
});

 </script>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
        
    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style CSS ======-->
   

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
   
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header class="header-area">
        <div class="navbar-area headroom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/images/png_color_white_hat_transparent.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#Features">Features </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#Partners">Partners</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#Success">Success</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a href="#blog">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#contact">Contact</a>
                                    </li> -->
                                    <li class="navbar-btn d-none d-sm-inline-block">
                                        <a class="main-btn" data-scroll-nav="0" href="#pricing">Dashboard</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            
                            
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
        <div id="home" class="header-hero bg_cover d-lg-flex align-items-center" style="background-image: url(assets/images/back-image.png)">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="header-hero-content">
                            <h1 class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><b>Mami's Kitchen</b></h1>
                            <p class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">A culinary school to teach <br>resellers how to become<br> real chefs.</p>
                            <div class="header-singup wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                                <!-- <input type="text" placeholder="username@yourdomain.com"> -->
                                <button class="main-btn">Sign Up</button>
                                <p>$45/month</p>
                            </div>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-hero-image d-flex align-items-center wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="1.1s">
                <!-- <div class="image">
                    <img src="assets/images/hero-image.png" alt="Hero Image">
                </div> -->
            </div> <!-- header hero image -->
        </div> <!-- header hero -->
    </header>
    
    <!--====== HEADER PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->
    
    <section id="Features" class="about-area pt-115">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12 feature_sec">
                    <div class="feature_sec_1">    
                        <div class="feature_one">
                            <div class="feature_support">
                                <div class="feature_support_icon">
                                    <img src="./assets/images/Group_35.png">
                                </div>
                                <div class="feature_support_heading">
                                    <p><b>1 on 1 <br>Support</b></p>
                                </div>
                                <div class="feature_support_text">
                                    <p>Have a question? We have the answer. Extremely helpful staff that is always here for you.</p>

                                </div>
                            </div>
                            <div class="feature_community">
                                <div class="feature_community_icon">
                                    <img src="./assets/images/Group_ 41.png">
                                </div>
                                <div class="feature_community_heading">
                                    <p><b>Community</b></p>
                                </div>
                                <div class="feature_community_text">
                                    <p>We are equipped with the fastest monitors in the game from shopify to twitter, we wont ever miss a restock. </p>
                                </div>
                            </div>
                        </div>
                        <div class="feature_two">
                            <div class="feature_monitors">
                                <div class="feature_monitors_icon">
                                    <img src="./assets/images/Group_36.png">
                                </div>
                                <div class="feature_monitors_heading">
                                    <p><b>Fast Monitors</b></p>
                                </div>
                                <div class="feature_monitors_text">
                                    <p>Have a question? We have the answer. Extremely helpful staff that is always here for you.</p>
                                    
                                </div>
                            </div>
                            <div class="feature_Detailed">
                                <div class="feature_Detailed_icon">
                                    <img src="./assets/images/Group_37.png">
                                </div>
                                <div class="feature_Detailed_heading">
                                    <p><b>Detailed Guides</b></p>
                                </div>
                                <div class="feature_Detailed_text">
                                    <p>We are equipped with the fastest monitors in the game from shopify to twitter, we wont ever miss a restock. </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feature_sec_2" >
                        <div class="feature_heading about-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <h6 class="welcome">Our Features</h6>
                            <p class="feature_title">We are continuously investing into finding the top of the line information and resources to excel your skills.</p>
                        </div>    
                        <div class="feature_three">
                            
                            <div class="feature_Flips">
                                <div class="feature_Flips_icon">
                                    <img src="./assets/images/Group_40.png">
                                </div>
                                <div class="feature_Flips_heading">
                                    <p><b>Bot Flips</b></p>
                                </div>
                                <div class="feature_Flips_text">
                                    <p>We are equipped with the fastest monitors in the game from shopify to twitter, we wont ever miss a restock. </p>
                                </div>
                            </div>


                            <div class="feature_And_more">
                                <div class="feature_And_more_icon">
                                    <img src="./assets/images/Group_39.png">
                                </div>
                                <div class="feature_And_more_heading">
                                    <p><b>And more.</b></p>
                                </div>
                                <!-- <div class="feature_And_more_text">
                                    <p>We are equipped with the fastest monitors in the game from shopify to twitter, we wont ever miss a restock. </p>
                                </div> -->
                            </div>
                        </div>
                        <div class="feature_four">
                            <!-- <div class="feature_support">
                                <div class="feature_support_icon">
                                    <img src="./assets/images/Group_38.png">
                                </div>
                                <div class="feature_support_heading">
                                    <p><b>1 on 1 <br>Support</b></p>
                                </div>
                                <div class="feature_support_text">
                                    <p>Have a question? We have the answer. Extremely helpful staff that is always here for you.</p>
                                    
                                </div>
                            </div> -->
                            <div class="feature_Lowkey">
                                <div class="feature_Lowkey_icon">
                                    <img src="./assets/images/Group_38.png">
                                </div>
                                <div class="feature_Lowkey_heading">
                                    <p><b>Lowkey Flips</b></p>
                                </div>
                                <div class="feature_Lowkey_text">
                                    <p>We are equipped with the fastest  monitors in the game from shopify to twitter, we wont ever miss a restock.  </p>
                                </div>
                            </div>
                        </div>    
                    </div>
                    
                    
                </div>
            </div> 
        </div> <!-- container -->
    </section>
    
    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== OUR SERVICE PART START ======-->
    
    <section id="Partners" class="our-services-area pt-115">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="partners_sec section-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h4 class="sub-title">Exclusive Partnerships</h4>
                        <h6 class="title1">We’re proud to be partnerted with some of the greatest companies in the game.</h6>
                        <h6 class="title2">These partnerships ensure our users get the most out of their membership and gives me a advantage against all others.</h6>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="partners_1">
                    <div class="icon-text">
                        <div class="partners_1_icon"><img src="./assets/images/Image_19.png"></div>
                        <div class="partners_1_text">
                            Flip Tracker has great features like
this and that and this and blah 
blah blah, great for members
                        </div>
                    </div>
                    <div class="heading-text">
                        <h4>Flip Tracker</h4>
                    </div>
                </div>
                <div class="partners_2">
                    <div class="icon-text">
                        <div class="partners_1_icon"><img src="./assets/images/Image_7.png"></div>
                        <div class="partners_1_text">
                            AYCD has great features like
this and that and this and blah 
blah blah, great for members

                        </div>
                    </div>
                    <div class="heading-text">
                        <h4>AYCD</h4>
                    </div>
                </div>
                <div class="partners_3">
                    <div class="icon-text">
                        <div class="partners_1_icon"><img src="./assets/images/Image_11.png"></div>
                        <div class="partners_1_text">
                            Oculus has great features like
this and that and this and blah 
blah blah, great for members

                        </div>
                    </div>
                    <div class="heading-text">
                        <h4>Oculus Proxies</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="partners_1">
                    <div class="icon-text">
                        <div class="partners_1_icon"><img src="./assets/images/Image_20.png"></div>
                        <div class="partners_1_text">
                           Leaf Proxies has great features like
this and that and this and blah 
blah blah, great for members

                        </div>
                    </div>
                    <div class="heading-text">
                        <h4>Leaf Proxies</h4>
                    </div>
                </div>
                <div class="partners_2">
                    <div class="icon-text">
                        <div class="partners_1_icon"><img src="./assets/images/Image_6.png"></div>
                        <div class="partners_1_text">
                            MRKT has great features like
this and that and this and blah 
blah blah, great for members

                        </div>
                    </div>
                    <div class="heading-text">
                        <h4>MRKT</h4>
                    </div>
                </div>
                <div class="partners_3">
                    <div class="icon-text">
                        <div class="partners_1_icon"><img src="./assets/images/Image_8.png"></div>
                        <div class="partners_1_text">
                            Scout has great features like
this and that and this and blah 
blah blah, great for members

                        </div>
                    </div>
                    <div class="heading-text">
                        <h4>Scout</h4>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </section>
    
    <!--====== OUR SERVICE PART ENDS ======-->
    
    <!--====== Consistent Success ======-->

    <section id="Success" class="project-masonry-area pt-115">
        <div class="container-fluid">
            <div class="row">
                <div class="success_sec col-md-6 section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h4 class="sub-title">Consistent Success</h4>
                        <h6 class="title">We care in making sure all of our members have equal opportunities to hitting multiple pairs of sneaker per release, here's some of our members success.</h6>
                    </div> 
            </div>

        </div> <!-- container -->
    </section>
    <!-- TESTIMONIALS -->
<div class="container-fluid">

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
        <div class="carousel-inner">

          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="./assets/images/Image 23.png" class="img-responsive center-block"></a>

            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="./assets/images/Image 25.png" class="img-responsive center-block"></a>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="./assets/images/Image 27.png" class="img-responsive center-block"></a>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="./assets/images/Image 29.png" class="img-responsive center-block"></a>

            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="./assets/images/Image 23.png" class="img-responsive center-block"></a>

            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="./assets/images/Image 25.png" class="img-responsive center-block"></a>
            </div>
          </div>

        </div>

        <div id="slider-control">
        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="./assets/images/left.png" alt="Left" class="img-responsive"></a>
        <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="./assets/images/right.png" alt="Right" class="img-responsive"></a>
      </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
        <div class="testimonials_text">
            <p>More success on our Twitter <img src="./assets/images/Icon awesome-twitter.png"></p>
        </div>
    </div>
  </div>
</div>
    <!-- END OF TESTIMONIALS -->



    <!--====== PROJECT GALLERY PART ENDS ======-->
    
    <!--====== FOOTER PART START ======-->
    
    <footer id="footer" class="footer-area">
        <div class="container-fluid">
            <div class="footer-widget pt-30 pb-30">
                <div class="row">
                    <div class="col-lg-3 col-sm-12">
                        <div class="footer-about ">
                            <a href="#" style="display: flex;">
                                <img src="assets/images/footerlogo.png" alt="Logo">
                            </a>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="footer-link pt-30">
                            <div class="footer-title">
                                <h5 class="title">Mami's Kitchen. All Rights Reserved. © 2020</h5>
                                <p class="text">View Our Terms & Services</p>
                            </div>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="footer-link pt-20">
                            <div class="footer-title footer-twitter">
                                <h5 class="title"><img width="62px" src="assets/images/twitter.png"></h5>
                            </div>
                            
                        </div> <!-- footer link -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
        </div> <!-- container -->
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->  
<script type="text/javascript">
  
</script>


    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>
    
    <!--====== Isotope js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    
    <!--====== Circles js ======-->
    <script src="assets/js/circles.min.js"></script>
    
    <!--====== Appear js ======-->
    <script src="assets/js/jquery.appear.min.js"></script>
    
    <!--====== WOW js ======-->
    <script src="assets/js/wow.min.js"></script>
    
    <!--====== Headroom js ======-->
    <script src="assets/js/headroom.min.js"></script>
    
    <!--====== Jquery Nav js ======-->
    <script src="assets/js/jquery.nav.js"></script>
    
    <!--====== Scroll It js ======-->
    <script src="assets/js/scrollIt.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

    <!--====== Done js ======-->
    
</body>

</html>