<!DOCTYPE html>
<html lang="en">


<head>

    <title>Charity</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" type="image/x-icon" href="letter.png">
    
    <!-- CSS files -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Telex&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="default.css">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" class="color-changing" href="color.css">
    <link rel="stylesheet" href="responsive.css">
    <!-- End CSS files -->
</head>

<body >

    <!-- The search Modal start -->
    <div class="search-popup modal" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group relative">
                            <input type="text" class="form-control input-search" id="search" placeholder="Search here..."> <i class="fas fa-search yellow transform-v-center"></i>
                        </div>
                    </form>
                </div>
            </div>
        </div> <i class="fas fa-times close-search-modal" data-dismiss="modal" aria-label="Close"></i>
    </div>
    <!-- The search Modal end -->

    <!-- Banner start -->
    <section class="#slider-3 #relative">
        <div class="#owl-carousel #owl-theme #main-slider">
            <div class="#item">
                        
                <div class="each-slider flex_center" style="background-image: url('images/community.png');" data-overlay="3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 text-left">
                                <div class="banner-text-left white z-5">
                                    <h1 class="black slab mb-15" style="color:#e6ffe6;">
                                        COMMUNITY DONATION PAGE
                                    </h1>
                                    <a href="#" class="btn btn-shade-green">
                                        <span class="z-5 relative" style="color:whitesmoke">Read More</span>
                                    </a>
                                    <a href="#" class="btn btn-shade-yellow ml-30 ml-xs-10">
                                        <span class="z-5 relative" style="color:whitesmoke">Contact Us</span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <!-- Banner ends here -->
    
    <!-- donate form starts here -->
    <section class="donate-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="donate-form-main bg-lines" data-overlay="9">
                        <div class="z-5">
                            <h1 class="fs-42 slab mb-20  wow fadeInDown" style="color:#e6ffe6;" >DONATE HERE</h1>
                            <form action="#" class=" wow fadeInUp">
                                <div class="d-flex flex-column flex-lg-row justify-content-center">
                                    <div class="dn-toggle">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options"> ONLY ONCE
                                            </label>
                                            <label class="btn btn-primary active">
                                                <input type="radio" name="options" checked> MONTHLY
                                            </label>
                                        </div>
                                    </div>
                                    <div class="dn-amount">
                                        <div class="form-group mr-30 relative mb-0 mr-sm-00">
                                            <input type="text" class="form-control input-white" id="amount" placeholder="Amount">
                                            <i class="fas fa-dollar-sign transform-v-center"></i>
                                        </div>
                                    </div>
                                    <div class="dn-name">
                                        <div class="form-group mr-30 relative mb-0 mr-sm-00">
                                            <input type="text" class="form-control input-white" id="name" placeholder="Name">
                                            <i class="fas fa-user transform-v-center"></i>
                                        </div>
                                    </div>
                                    <div class="dn-email">
                                        <div class="form-group mr-30 relative mb-0 mr-sm-00">
                                            <input type="text" class="form-control input-white" id="email" placeholder="Email">
                                            <i class="fas fa-envelope transform-v-center"></i>
                                        </div>
                                    </div>
                                    <div class="dn-button">
                                        <a href="#" class="btn btn-black" style="color:white;">DONATE</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- donate form ends here -->

    <!-- Things you can do section starts here-->

    <section class="find-cases bg-light-white pt-90 pb-60 relative ">
        <div class="container">
            <div class="row align-items-end mb-30">
                <div class="col-lg-8 text-center text-lg-left">
                    <img src="line.png" alt="" class="line mb-15">
                    <h1 class="fs-42 slab f-800 mb-md-20"></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="each-case bg-lines " data-overlay="9">
                        <div class="z-5">
                            <img src="case1.png" alt="">
                            <h3><a href="" class="slab">DONATE SUPPLIES</a></h3>
                            <a href="" data-toggle="modal" data-target="#volunteerModal" class="btn btn-shade-yellow ml-30 ml-xs-10">
                                <span class="z-5 relative" style="color:whitesmoke">HERE</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="each-case bg-lines" data-overlay="9">
                        <div class="z-5">
                            <img src="case3.png" alt="">
                            <h3><a href="#" class="slab">DONATE FOOD</a></h3>
                            <a href="#" data-toggle="modal" data-target="#foodModal" class="btn btn-shade-yellow ml-30 ml-xs-10">
                                <span class="z-5 relative" style="color:whitesmoke">HERE</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="each-case bg-lines" data-overlay="9">
                        <div class="z-5">
                            <img src="case2.png" alt="">
                            <h3><a href="payment.php" class="slab">DONATE MONEY</a></h3>
                            <a href="payment.php" data-toggle="modal" data-target="#moneyModal" class="btn btn-shade-yellow ml-30 ml-xs-10">
                                <span class="z-5 relative" style="color:whitesmoke">HERE</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="dot-circle.png" class="find-c-bg" alt="">
    </section>
    <!-- Things you can do section ends here -->


    <!-- The Process section starts here -->

    <section class="bg-light-white pt-90 pb-90 pb-md-50">
        <div class="container">
            
            <div class="row align-items-end mb-30">
                <div class="col-lg-8 text-center text-lg-left">
                    <img src="line.png" alt="" class="line mb-15">
                    <h1 class="fs-42 slab f-800 mb-md-20"></h1>
                </div>
            </div>

            <div class="row">

                <div class="col-sm-1" style="margin-top: 30px;"></div>

                <div class="col-sm-2">
                    <div class="#card bg-light-white" style="width: 18rem;">
                        <img class="#card-img-top" src="images/food.png" style="width: 70px;" alt="Card image cap">
                        <div class="#card-body">
                          <h5 class="#card-title" style="margin-top: 5px;">DONATE   
                        </h5>
                        </div>
                      </div>
                </div>
                
                
                <div class="col-sm-1" style="margin-top: 30px;">
                    <i class="fas fa-chevron-right" style="font-size: x-large;"></i>
                </div>
                

                <div class="col-sm-2">
                    <div class="#card" style="width: 18rem;">
                        
                        <img class="#card-img-top" src="images/storing.png" style="width: 70px;" alt="Card image cap">
                        
                        <div class="#card-body">
                          <h5 class="#card-title">SORTING</h5>
                        </div>
                      </div>
                </div>
                
                
                <div class="col-sm-1" style="margin-top: 30px;">
                    <i class="fas fa-chevron-right" style="font-size: x-large;"></i>
                </div>
                

                <div class="col-sm-2">
                    <div class="#card" style="width: 18rem;">
                        <img class="#card-img-top" src="images/shipping.png" style="width: 70px;" alt="Card image cap">
                        <div class="#card-body">
                          <h5 class="#card-title">DELIVERY</h5>
                        </div>
                      </div>
                </div>
                
                
                <div class="col-sm-1" style="margin-top: 30px;">
                    <i class="fas fa-chevron-right" style="font-size: x-large;"></i>
                </div>
                

                <div class="col-sm-2">
                    <div class="#card" style="width: 18rem;">
                        <img class="#card-img-top" src="images/mother.png" style="width: 70px;" alt="Card image cap">
                        <div class="#card-body">
                          <h5 class="#card-title" style="margin-top: 5px;">GIVING</h5>
                        </div>
                      </div>
                </div>
                

            </div>
        </div>
    </section>
    <!-- The Process section ends here -->
    
    <!-- location png file here with padding -->

    <section class="location bg-light-white pt-90 pb-90 pb-md-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img src="line.png" alt="" class="line mb-15">
                    <h1 class="fs-42 slab f-800">OPERATIONS</h1>
                    <p class="location-mp">Based in India, we have extented our reach by pairing up with various charities and organizations all over the world to help impacted regions during these difficult times </p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="location-map">
                        <img src="images/map.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <ul class="location-list">
                        <li>
                            <a href="#af">ZIMBABWE</a>
                        </li>
                        <li>
                            <a href="#india">DELHI</a>
                        </li>
                        <li>
                            <a href="#ru">MOSCOW</a>
                        </li>
                        <li>
                            <a href="#b">SYRIA</a>
                        </li>
                        <li>
                            <a href="#af">BRAZIL</a>
                        </li>
                        <li>
                            <a href="#sudan">VANCOUVER</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- locations and pinned tops ends here -->

       
          
    
    <!-- footer starts here -->
    <footer class="bg-black footer-a pb-30" data-overlay="1" style="background-image: url('ftr.jpg');">
        <div class="container z-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-newsletter bg-yellow">
                        <div class="row align-items-center">
                            <div class="col-lg-6 text-center text-lg-left">
                                <h2 class="fs-35 f-600 slab">OUR NEWSLETTER</h2>
                                <p class="mb-0 mb-md-10" style="color:white" >Get updates for your community and how our services have impacted lives around the world. </p>
                            </div>
                            <div class="col-lg-6 text-center text-lg-right">
                                <form action="#">
                                    <div class="callback-footer-2 d-flex flex-column flex-sm-row">
                                        <input type="text" class="form-control input-white shadow-2" placeholder="Your email address">
                                        <button class="btn btn-black ml-20 ml-xs-00 mt-xs-15" style="color:white;">SUBSCRIBE </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container z-5">
            <div class="row mt-15">
                <div class="col-lg-4 col-sm-6 mb-md-30">
                    <div class="abot-ftr">
                       
                        <p>We promise to ensure all donations made through this page rightfully fulfill their intended purpose. </p>
                        <a href="#">Terms and Conditions</a>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 pl-10 pl-md-15 mb-md-30">
                    <h4 class="fs-18 f-700 slab yellow opacity-8">About Us</h4>
                    <ul class="footer-links">
                        <li><a href="#">VISION</a></li>
                        <li><a href="#">MISSION</a></li>
                        <li><a href="#">OUR VALUES</a></li>
                        <li><a href="#">FOUNDER</a></li>
                        
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6 pl-20 pl-md-15 mb-md-30">
                    <h4 class="fs-18 f-700 slab yellow opacity-8">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="##">ABOUT</a></li>
                        <li><a href="community.php">COMMUNITY</a></li>
                        <li><a href="recipe.php">RECIPES</a></li>
                        <li><a href="login.php">LOGIN</a></li>
                    </ul>
                </div>
                
                <div class="col-12">
                    <div class="hr-2 bg-light-white mt-60 mb-30 opacity-1"></div>
                </div>
            </div>
            <div class="row copy-footer">
                <div class="col-sm-6 text-center text-sm-left">
                                </div>
                <div class="col-sm-6 text-center text-sm-right">
                    <ul class="social-icons team-social footer-social">
                        <li> <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li> <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li> <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <a href="#" class="scroll-btn bg-blue opacity-0"><i class="fas fa-arrow-up"></i></a>
    </footer>
    <!-- footer end -->


    <!-- JS Files/Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script src="js/modernizr-3.5.0.min.js"></script>
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="style.js" ></script>
    <script src="https://kit.fontawesome.com/81b4ce2477.js" crossorigin="anonymous"></script>


    <!-- JS Scripts section ends here -->

</body>

</html>
