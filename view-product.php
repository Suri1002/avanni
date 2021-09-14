
<?php
error_reporting(0);
session_start();
include("db_connection.php");
$email = $_SESSION['email'];

$customer = $conn->prepare("select * from customer where email = ?");
$customer->bind_param("s", $email);
$customer ->execute();
$result = $customer->get_result();
$customerresult = $result->fetch_assoc();
$cust_id = $customerresult['cust_id'];

$id = htmlspecialchars($_GET['id']);

$sql = $conn->prepare("select * from products where id = ? ");
$sql->bind_param("i", $id);
$sql ->execute();
$result1 = $sql->get_result();
$result2 = $result1->fetch_assoc();

$Pid = $result2['id'];
$name = $result2['Name'];
$price = $result2['Price'];
$description = $result2['Description'];
$image = $result2['Image'];

// Add to cart Module

if (isset($_POST['addToCart'])) {
    # code...
    if (strlen($_SESSION['email']) == 0) {
    ?>
   <script type="text/javascript">
        alert("Please login your account");
        setTimeout(function(){
            window.location.href = "customer_login.php";
        },0);
    </script>
    <?php
 }
 else
 {
    $itemCheck = $conn->prepare("SELECT * FROM `add-cart` WHERE  cust_id = ? AND product_id = ? ");
    $itemCheck->bind_param("ii", $cust_id, $id);
    $itemCheck->execute();
    $result3 = $itemCheck->get_result();
    $row = $result3->fetch_assoc();

    if(count($row) >= 1){ echo "<script>alert('Item already in cart');</script>";}
    else{
    $sql = $conn->prepare("INSERT INTO `add-cart`(`cust_id`, `product_id`) VALUES (?, ?)");
    $sql->bind_param("ii", $cust_id, $id);
    $sql ->execute();
    if ($sql) {
        # code...
        echo "<script>alert('Added to cart');</script>";
    }
    else echo "Error with adding into cart";
    }
 } 
}

// Buy Product Module

if (isset($_POST['buy_product'])) {
    # code...
    $_SESSION['Pid'] = htmlspecialchars($Pid);
    $_SESSION['product_name'] = htmlspecialchars($name);
    $_SESSION['product_image'] = htmlspecialchars($image);
    $_SESSION['product_price'] = htmlspecialchars($price);
    header('location:customer_address_info.php');
}
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
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <style type="text/css">
         
         .btn-grad {background-image: linear-gradient(to right, #ee0979 0%, #ff6a00  51%, #ee0979  100%)}
         .btn-grad,.btn-grad1 {
            letter-spacing: 1px;
            padding: 5px;
            text-align: center;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }

         .btn-grad1 {background-image: linear-gradient(to right, #fc00ff 0%, #00dbde  51%, #fc00ff  100%)}
          .btn-grad1:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
         
        @media only screen and (max-width: 691px)
        {
            .productDetails{text-align: center;}
        }

    </style>
</head>

<body >

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

<?php include('header.php');?>
  
  <div class="p-5 container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12" align="center" style="height: 280px;">
            <img src="Admin/assets/images/products/<?php echo $image; ?>" width='280px' height='100%'>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-4 productDetails" align="left">
            <h3 class="ml-4" style="text-transform: uppercase;letter-spacing: 1px;font-weight: bold;background: linear-gradient(to bottom right, #A22FCE, #FF7000); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo "$name";?></h3>
             <div class="ml-4 product-rating text-success" style="font-size: 14px;">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="mt-3 ml-4">
               <?php echo "$description"; ?>
            </div>
            <div class="mt-3 ml-4">
                <h5 class="mt-3 price"><i class="fas fa-rupee-sign" style="font-size: 15px;"></i><?php echo " $price" ?></h5>
            </div>
            <div class="mt-4 ml-4 pt-4">
                <form action="" method="post">
                    <button type="submit" class="btn-grad btn-block" name="addToCart"><i class="fas fa-cart-plus"></i> Add to cart</button>
                </form>
            </div>
            <div class="mt-4 ml-4">
                <form action="" method="post">
                    <button type="submit" name="buy_product" class="btn-grad1 btn-block">Buy Now</button>
                </form>
            </div>
        </div>  
      </div>
  </div>
   

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