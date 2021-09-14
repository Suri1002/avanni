
<?php
error_reporting(0);
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
    <meta name="description" content="Farmi - Organic Farm Agriculture Template">

    <!-- ========== Page Title ========== -->
    <title>Avanni - Organic Farm Agriculture</title>

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
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <style type="text/css">
         .btn-grad {background-image: linear-gradient(to right, #314755 0%, #26a0da  51%, #314755  100%);}
  .btn-grad {letter-spacing: 1px; transition: 0.5s;background-size: 200% auto;color: white;box-shadow: 0 0 20px #eee;border-radius: 40px;display: block;width: 130%;}

.btn-grad:hover {
      background-position: right center;
      color: #fff;
      text-decoration: none;
    }
    </style>
</head>

<body >

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

<?php include('header.php');?>
    <!-- Start Product 
            Start Product 
    ============================================= -->
    <div class="our-product-area text-center default-padding pt-4 bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-2">
                    <div class="site-heading text-center">
                        
                        <h2 style="background: linear-gradient(to bottom right, #A22FCE, #FF7000); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Fresh & Organic Products</h2>
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


                <section class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">    
                        <div class="container">
                            <div class="card">
                                <div class="imgBx">
                                    <img src="Admin/assets/images/products/<?php echo $pimage; ?>" alt="Product_Image" width="100%" height="200px" style="position: relative;justify-content: flex-start;align-items: flex-start;">
                                    <h2 style="background: linear-gradient(to bottom right, #A22FCE, #FF7000); -webkit-background-clip: text; -webkit-text-fill-color: transparent;text-transform: uppercase;font-size: 20px;font-weight: bold;"><?php echo $pname;?></h2>
                                </div>
                                <div class="content">
                                    <div class="size" style="color: green;">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <div class="color">

                                        <i class="fas fa-rupee-sign" style="font-size: 15px;"></i><?php echo " $pprice" ?>
                                    </div>
                                    <a href="view-product.php?id=<?php echo $id; ?>" class="btn-grad btn-block p-2 mt-4">View Product</a>
                                </div>
                            </div>
                        </div>
                </section>

                <?php  
                        }
                ?>

            </div>
        </div>
    </div>
    <!-- End Product Area -->

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