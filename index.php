<?php
session_start();
include("db_connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Avanni - Organic Farm Agriculture Template">

    <!-- ========== Page Title ========== -->
    <title>Avanni Organics</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="styles.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
        <style type="text/css">
         .btn-grad {background-image: linear-gradient(to right, #314755 0%, #26a0da  51%, #314755  100%);}
  .btn-grad {letter-spacing: 1px; transition: 0.5s;background-size: 200% auto;color: white;box-shadow: 0 0 20px #eee;border-radius: 40px;display: block;width: 70%;}
  .btn-grad{display: none;}
.btn-grad:hover {
      background-position: right center;
      color: #fff;
      text-decoration: none;
    }
         
    .function:hover .btn-grad{ display: block;}
    </style>

</head>

<body class="half-bg bg-gradient-green">

   <?php
   include('header.php');
   ?>

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area content-less text-center">
        <div id="bootcarousel" class="carousel large-text text-light slide carousel-fade animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="carousel-item active">
                    <div class="slider-thumb bg-fixed" style="background-image: url(http://avanniorganics.com/static/5bb5496e6c19947009b84780_b40a4370-de33-11e8-9142-859520b784a9final%20image11.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark-hard">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="content">
                                            <h2 data-animation="animated slideInLeft">Handmade Products</h2>
                                            <h3 data-animation="animated slideInRight">Agriculture matter <br>For future</h3>
                                            <div class="button animated fadeInUp">
                                                <a class="btn btn-gradient green circle effect btn-md" href="products.php">Discover More</a>
                                                <a class="popup-youtube relative video-play-button" href="https://www.youtube.com/watch?v=qfWU3SZlcWg">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-fixed" style="background-image: url(http://avanniorganics.com/static/5bb5496e6c19947009b84780_f5ed9800-0985-11e9-9b12-e9243867822b02.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark-hard">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="content">
                                            <h2 data-animation="animated slideInLeft">Handmade Products</h2>
                                            <h3 data-animation="animated slideInRight">Agriculture matter <br>For future</h3>
                                            <div class="button animated fadeInUp">
                                                <a class="btn btn-gradient green circle effect btn-md" href="products.php">Discover More</a>
                                                <a class="popup-youtube relative video-play-button" href="https://www.youtube.com/watch?v=qfWU3SZlcWg">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control shadow light" href="#bootcarousel" data-slide="prev">
                <i class="ti-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control shadow light" href="#bootcarousel" data-slide="next">
                <i class="ti-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->

    <!-- Star About Area
    ============================================= -->
    <div class="about-content-area single-thumb overflow-hidden inc-shape default-padding bg-white">
        
        <!-- Illustration -->
        <div class="container">
            <div class="row"> 
                <div class="col-lg-5 col-md-12 col-sm-12 info text-center">
                    <div class="content col-lg-9 col-md-12 col-sm-12 text-center" id="model">
                        <h5 class="text-white">Welcome To</h5>
                        <h2 class="area-title text-white">AVANNI ORGANICS</h2>
                        <p style="text-align: justify;color: white;">
                            Avanni as an enterprise with a Moto that operates as a healthy platform between the Farmer (Producer) and the end User (Consumer). The fundamental objective of Avanni is to encourage the Farmers for a chemical free (Organic) Production..
                        </p>
                        <!-- <a class="btn circle btn-theme border btn-md half-bg bg-gradient-skyblue" id="arrow" href="#"><span style="color: white;">More About</span></a> -->
                    </div>

                </div>
                <div class="col-lg-7 mt-4" align="center">
                    <h3 class="text-success text-center" style="font-weight: bold;">Good products make your life healthy</h3>
                    <div class="thumb imgscroll">
                        <!-- <img src="" alt="Logo" class="col-lg-7 col-sm-12 col-md-12"> -->
                      <div class="images col-sm-12 col-12 col-md-12 col-lg-12" style="margin-top: -20px;">
                          
                      </div>
                    </div>

                    <div align="center" >
                        <ul class="achivement">
                            <li class="">
                                <div class="fun-fact">
                                    <div class="counter" align="center">
                                        <div class="timer" data-to="600" data-speed="5000"  style="color: blue" >600</div>
                                        <div class="operator" style="color: blue">+</div>
                                    </div>
                                    <span class="medium"  style="color: blue">Tons of harvesta</span>
                                </div>
                            </li>
                            <li class="text-center">
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="100" data-speed="5000"  style="color: blue">100</div>
                                        <div class="operator"  style="color: blue" >%</div>
                                    </div>
                                    <span class="medium"  style="color: blue">Organic Product</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- Start Services 
    ============================================= -->
    <div class="thumb-services-area half-bg bg-gradient-green default-padding bottom-less">
        <div class="container">
            <div class="heading-left text-light">
                <div class="row">
                    <div class="col-lg-5" align="center">
                        <h1 class="text-invisible"  style="color: white"> 
                            Services
                        </h1>
                        <img src="assets/img/logo.png" alt="Logo">
                        <h2 class="mt-4" style="text-shadow: .4em .4em .3em rgba(0, 0, 0, 0.6);">About Avanni</h2>
                    </div>
                    <div class="col-lg-6 offset-lg-1" align="center">
                        <p style="text-align: justify;text-indent: 14px;">
                            In the recent decade, rapid urbanization and change in living style have increased the risk of ill health. Moreover, the use of processed /fast foods allied with higher pollution rates has tremendously shown its effect on human well-being. This results in a shift towards naturally or organically grown foods compared to chemically grown food products.
                        </p>
                        <a class="btn circle btn-md btn-theme effect" href="about-us.php">More About</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-content-box">
            <div class="container">
                <div class="services-items services-carousel owl-carousel owl-theme">
                    <!-- Single Item -->
                    <div class="item services">
                        <div class="thumb">
                            <img src="assets/img/services/strength.png" height="280" alt="Thumb">
                        </div>
                        <div class="content">
                            <div class="icon">
                                <i class="flaticon-fertilizer"></i>
                            </div>
                            <div class="title">
                                <h5>OUR STRENGTHS</h5>
                            </div>
                            <p>
                               Our farm has been growing organically for many years and is proud to deliver quality products. 100% of the products we deliver is organic.
                            </p>
                        </div>
                        <div align="center" class="knowmore">
                            <a class="btn circle border btn-md half-bg btn-outline-primary mb-4" href="about-us.php">Know More</a>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="item  services">
                        <div class="thumb">
                            <img src="assets/img/services/vision1.png" height="280" width="280" alt="Thumb">
                        </div>
                        <div class="content">
                            <div class="icon">
                                <i class="flaticon-vegetable"></i>
                            </div>
                            <div class="title">
                                <h5>OUR VISION</h5>
                            </div>
                            <p>
                                We view organic as an effort and an endeavor to create a sustainable livelihood for farmers, a sustainable lifestyle for consumers and sustainable earth.
                            </p>
                        </div>
                         <div align="center" class="knowmore">
                            <a class="btn circle border btn-md half-bg btn-outline-success mb-4" href="about-us.php">Know More</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item services">
                        <div class="thumb">
                            <img src="assets/img/services/mission1.png" height="280" width="100%" alt="Thumb">
                        </div>
                        <div class="content">
                            <div class="icon">
                                <i class="flaticon-honeycomb"></i>
                            </div>
                            <div class="title">
                                <h5>OUR MISSION</h5>
                            </div>
                            <p>
                               We believe our love and passion for all things organic should result in you enjoying the food and creating for yourself better health.
                            </p>
                        </div>
                         <div align="center" class="knowmore">
                            <a class="btn circle border btn-md half-bg btn-outline-warning mb-4" href="about-us.php">Know More</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                   
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->

    <!-- Start Product 
    ============================================= -->
    <div class="our-product-area text-center default-padding bottom-less bg-white" style="background-color:grey;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 >Our Product</h4>
                        <h2 >Fresh & Organic Product</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                 <?php

                $sql = $conn->prepare("select * from products");
                $sql->execute();
                $result = $sql->get_result();
                while ($row = $result->fetch_assoc()) {
                        
                        $id = $row['id'];
                        $pname = $row['Name'];
                        $pdescription = $row['Description'];
                        $pimage = $row['Image'];
                        $pprice = $row['Price'];

                ?>

                <!-- Single Product -->
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="item bg-white imginc function">
                        <div class="thumb">
                            <img src="Admin/assets/images/products/<?php echo $pimage; ?>" width="100%" height="100%" alt="Product_Image">
                            <a href="view-product.php?id=<?php echo $id; ?>"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                        <div class="info" align="center">
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <h4><a href="view-product.php" style="background: linear-gradient(to bottom right, #A22FCE, #FF7000); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo $pname;?></a></h4>
                            <h5 class="price"><i class="fas fa-rupee-sign" style="font-size: 15px;"></i><?php echo " $pprice" ?></h5>
                            <a href="view-product.php?id=<?php echo $id; ?>" class="btn-grad p-2 mt-4">View Product</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->

                   <?php  
                        }
                ?>
               
            </div>
        </div>
    </div>
    <!-- End Product Area -->

    <!-- Start Testimonials 
    ============================================= -->
    <div class="testimonials-area bg-gradient-green half-bg text-light">
        <div class="container">
            <div class="default-padding">
                <div class="row">
                    <div class="col-lg-4 info">
                        <i class="flaticon-quotation"></i>
                        <h2 class="text-center">Why they love us</h2>
                        <p class="text-center mt-4">What our customres are talking about us</p>
                    </div>
                    <div class="col-lg-7 offset-lg-1 testimonials">
                        <div class="testimonial-items">
                            <div class="carousel slide row" data-ride="carousel" id="testimonial-carousel">
                                            <!-- Carousel Indicators -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <ol class="carousel-indicators">
                                        <li data-target="#testimonial-carousel" data-slide-to="0" class="active">
                                            <img src="assets/img/about/4a.jpg" alt="Thumb">
                                        </li>
                                        <li data-target="#testimonial-carousel" data-slide-to="1">
                                            <img src="assets/img/blog/1.jpg" alt="Thumb">
                                        </li>
                                    </ol>
                                </div>

                                <div class="carousel-inner col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="carousel-item active">
                                        <p>
                                            <h4>Rajesh</h4>
                                        <span>Customer</span>
                                        <i class="fas fa-star ml-4"></i>
                                        <i class="fas fa-star "></i>
                                        <i class="fas fa-star "></i>
                                        <i class="fas fa-star "></i>
                                        <i class="fas fa-star mb-4"></i>
                                        <br>
                                            The team at Avanni Organics is an expert in nutrition and healthcare. They have suggested the right measures that helped me gain strength and get in good shape. I am grateful to them.
                                        </p>
                                       
                                    </div>
                                    <div class="carousel-item">
                                        <p>
                                        <h4>Anupama Raj</h4>
                                        <span>Customer</span>
                                        <i class="fas fa-star ml-4"></i>
                                        <i class="fas fa-star "></i>
                                        <i class="fas fa-star "></i>
                                        <i class="fas fa-star "></i>
                                        <i class="fas fa-star mb-4"></i>
                                        <br>
                                            Because of Avanni Organics, I could keep my Diabetes in check and enjoy a healthy lifestyle like normal people. Their products are very natural and show results within the time.
                                        </p>
                                        
                                    </div>
                                </div>
                                <!-- End Carousel Content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->

    <!-- Start Team 
    ============================================= -->
    <div class="team-area bg-white default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Our Team</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-items text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item team">
                            <div class="thumb">
                                <img src="assets/img/farmers/1.jpg" width="100%" alt="Thumb">
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info">
                                <span>Proprietor</span>
                                <h4>Kommuri Sunanda Kumari</h4>
                            </div><br>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item team">
                            <div class="thumb">
                                <img src="assets/img/farmers/1.jpg" alt="Thumb">
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info">
                                <span>Director</span>
                                <h4>Lalitha</h4>
                            </div><br>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start Specialty 
    ============================================= -->
    <div class="specialty-area half-bg bg-white overflow-hidden">
        <div class="container-full">
            <div class="specialty-items default-padding">
                <!-- Fixed BG -->
                <div class="fixed-bg bg-fixed half-bg bg-gradient-green" >
                    
                </div>
                <!-- End Fixed BG -->
                <div class="row">
                    <div class="col-lg-4 info text-light">
                        <h2>All you need for agriculture hard work & professional</h2>
                        <!-- <a class="btn circle btn-light border btn-md" href="#">View More</a> -->
                    </div>
                    <div class="col-lg-8">
                        <div class="specialty-contents specialty-carousel owl-carousel owl-theme text-center">
                            <div class="item imginc bg-white">
                                <i class="flaticon-menu"></i>
                                <h5>Quality Standards</h5>
                                <p class="btmborder"></p>
                                <p style="text-align: justify;">
                                    Easy mind life fact with see has bore ten. Parish any chatty can elinor direct for former. Up as meant widow equal an share least.
                                </p>
                            </div>
                            <div class="item imginc bg-white">
                                <i class="flaticon-healthy-food"></i>
                                <h5>Healthy Food</h5>
                                <p class="btmborder"></p>
                                <p style="text-align: justify;">
                                    Easy mind life fact with see has bore ten. Parish any chatty can elinor direct for former. Up as meant widow equal an share least.
                                </p>
                            </div>
                            <div class="item imginc bg-white">
                                <i class="flaticon-farmer-1"></i>
                                <h5>Agriculture Leader</h5>
                                <p class="btmborder"></p>
                                <p style="text-align: justify;">
                                    Easy mind life fact with see has bore ten. Parish any chatty can elinor direct for former. Up as meant widow equal an share least.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Specialty Area -->

    <!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-factor-area default-padding">
        <!-- Illustration -->
      
        <!-- End Illustration -->
        <div class="container">
            <div class="fun-fact-items text-center">
                <h2 class="text-invisible">Achivement</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <img src="assets/img/gallery/9a.jpg" style="clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);">
                            <div class="timer" data-to="687" data-speed="5000" style="color: white">687</div>
                            <span class="medium"  style="color: white">Agriculture Products</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <img src="assets/img/team/6.jpg" style="clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);">
                            <div class="timer" data-to="655" data-speed="5000" style="color: white">655</div>
                            <span class="medium"  style="color: white">Expert Farmers</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <img src="assets/img/about/3.jpg" style="clip-path: polygon(50% 0%, 0% 100%, 100% 100%);">
                            <div class="timer" data-to="450" data-speed="5000"  style="color: white">450</div>
                            <span class="medium"  style="color: white">Units of Cattle</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <img src="assets/img/about/2.jpg" style="clip-path: polygon(20% 0%, 80% 0%, 100% 100%, 0% 100%);">
                            <div class="timer" data-to="1200" data-speed="5000"  style="color: white">1200</div>
                            <span class="medium"  style="color: white">Hectares of farm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->

    <!-- Start Blog 
    ============================================= -->
    <div class="blog-area bg-white default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="text-center mb-4">
                        <h4  style="color: black">Our Activities</h4>
                        <h2><span style="color: red;">A</span>vanni <span style="color: green;">F</span>unctions in <span style="color: blue;">F</span>our <span style="color: pink;">P</span>hases</h2>
                        <hr style="width: 200px;position: relative;left: 37%;height: 2px;margin-top: 2em; background-color: green;">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <!-- Single Item -->
                   <div class="single-item col-lg-3 col-md-5 col-sm-12 mt-4 ml-4 mr-4 function imginc">
                       <a href="#">  <div class="item">
                            <div class="thumb mt-2">
                                <img src="assets/img/blog/1.jpg" alt="Thumb" class="imghover">
                            </div>
                            <div class="info">
                                <h4>Production</h4>
                                <p class="btmborder"></p>
                                <p style="text-align: justify;">
                                    Guidance of VRDS organisation. Network of Farmers sanghas. Efficient Training in millet cropping practices for exceptional Yields. Village based seed distribution, seed production, and seed storage.
                                </p>
                            </div>
                        </div></a>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-5 col-sm-12 mt-4 ml-4 mr-4 function imginc">
                       <a href="#">   <div class="item">
                            <div class="thumb mt-2">
                                <img src="assets/img/blog/2.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>Processing</h4>
                                <p class="btmborder"></p>
                                <p style="text-align: justify;">
                                    Adequate supply in millets processing Refining, Grading and De-husking of Grains. Products include all varieties of. Millets : Foxtail Millet (Korralu), Finger Millet (ragulu),Little Millets (Sama,Samalu)
                                </p>
                            </div>
                        </div></a>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-5 col-sm-12 mt-4 ml-4 mr-4 function imginc">
                       <a href="#">   <div class="item">
                            <div class="thumb mt-2">
                                <img src="assets/img/blog/3.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>Propagation</h4>
                                <p class="btmborder"></p>
                                <p style="text-align: justify;">
                                    Awareness programs with farmers and consumer groups. Training in millet recipes for people with the help of volunteers Networking with corresponding entities and public.
                                </p>
                            </div>
                        </div></a>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-5 col-sm-12 mt-4 ml-4 mr-4 function imginc">
                      <a href="#">    <div class="item">
                            <div class="thumb mt-2">
                                <img src="assets/img/blog/4.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>Seed distribution</h4>
                                <p class="btmborder"></p>
                                <p style="text-align: justify;">
                                    Distribution of seeds for free of cost for cultivation. Officially holds a track record in distributing 6000 Kg of seeds for farming for free of cost to Farmers in regions of Andhra and Telangana and also in other parts of India.
                                </p>
                            </div>
                        </div></a>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

        <!-- Submit Feedback -->
    <?php
    
    if (isset($_POST['submit'])) {
        # code...
        $name = $_POST['name'];
        $email = $_POST['email'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $comments = $_POST['comments'];

        $sql = $conn->prepare("INSERT INTO feedback VALUES(?,?,?,?,?)");
        $sql->bind_param("sssss", $name, $email, $state, $country, $comments);
        $sql->execute();
        if ($sql) echo "<script>alert('Thanking for your feedback')</script>";
        else  echo "<script>alert('Error with feedback')</script>";
        
    }

    ?>

    <!-- Start Contact 
    ============================================= -->
    <div class="contact-area default-padding">
        <div class="container-full">
            <div class="contact-items">
                <div class="row align-center">
                    <div class="col-lg-3 contact-info">
                        <ul style="color: white">
                             <li>
                                <h4 style="color: white">Our Location</h4>
                                <span>79/71-5, Plot No:5<br>Sri Raghavendra Township,<br>Near Sakshi Ring Road,<br>Kadapa-516003 YSR District</span>
                            </li>
                            <li>
                                <h4 style="color: white">Phone</h4>
                                <span>+91 9160100057 </span>
                            </li>
                            <li>
                                <h4 style="color: white">Email</h4>
                                <span>avanniorganics@gmail.com</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-content">
                            <h3 class="text-center mb-4">Send your feedback</h3>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email*" type="email" required>
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="state" name="state" placeholder="State" type="text" required>
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="country" name="country" placeholder="Country" type="text" required>
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments" placeholder="Provide your valuable feedback." required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <button  type="submit" name="submit">
                                            Send Now
                                        </button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-md-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981" style="width: 500px;height: 500px;padding-top: 110px;padding-right: 10px;"></iframe>
        </div>
    </div>
    <!-- End Contact Area -->

    <?php include('footer.php');?>

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.html"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>