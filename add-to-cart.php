
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

// Remove Item from cart
 if (isset($_POST['removeCart'])) {
     # code...
    $id = $_POST['removeItem'];

    $sql = $conn->prepare("DELETE FROM `add-cart` WHERE  cust_id = ? AND product_id = ?");
    $sql->bind_param("ii", $cust_id, $id);
    $sql ->execute();
    if($sql) echo "<script>alert('Item removed from cart');</script>";
    else echo "<center>error with delete</center>";
 }

//  Product session
 if (isset($_POST['buy_product'])) {
    # code...
    $p_id = $_POST['place_order'];

    $sql = $conn->prepare("select * from products where id = ? ");
    $sql->bind_param("i", $p_id);
    $sql ->execute();
    $result = $sql->get_result();
    $row = $result->fetch_assoc();
    
    $Pid = $row['id'];
    $name = $row['Name'];
    $price = $row['Price'];
    $image = $row['Image'];

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
        .btn-grad1,.btn-grad {
            letter-spacing: 1px;
            text-align: center;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }
         .btn-grad1 {background-image: linear-gradient(to right, #fc00ff 0%, #00dbde  51%, #fc00ff  100%)}
          .btn-grad1:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
         .cart{font-size: 20px;color: red;}
         
         .btn-grad {background-image: linear-gradient(to right, #FF512F 0%, #DD2476  51%, #FF512F  100%)}
          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
         
    </style>
</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

<?php include('header.php');?>
  
  <div class="container">
                    <?php

                    // Empty cart display start

                     $sql1 = mysqli_query($conn, "SELECT count(cust_id) as cust_id FROM `add-cart` WHERE cust_id = '$cust_id' ");
                    $resultsql1 = mysqli_fetch_array($sql1);
                    $count = $resultsql1['cust_id'];
                    if ($count < 1) {
                        # code...
                        echo "<div class='row default-padding'>";
                        echo "<div class='col-lg-6' align='center'><img src='assets/img/about/empty_cart.jpg' width='200px' height='200px'></div>";
                        echo "<div class='cart mt-4 col-lg-6' align='center'>Your cart is empty<br><br><a href='products.php' class='btn-grad1 btn-block p-2'>Shop now</a></div>";
                        echo "</div>";
                    }
                     // Empty cart display end


                    $sql = mysqli_query($conn, "SELECT * FROM `add-cart` where cust_id = '$cust_id' ");
                    
                    while ($sqlresult = mysqli_fetch_array($sql)) {
                        # code...
                        $p_id = $sqlresult['product_id'];
                        $products = mysqli_query($conn, "SELECT * FROM products WHERE id = '$p_id' ");

                        while ($row1 = mysqli_fetch_array($products)) {
                            # code...
                            $pid = $row1['id'];
                            $pname = $row1['Name'];
                            $pdescription = $row1['Description'];
                            $pprice = $row1['Price'];
                            $pimage = $row1['Image'];

                            ?>
<div class="default-padding p-2">
    <div class="row p-4 imginc function">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12" align="center" style="height: 200px;">
            <img src="Admin/assets/images/products/<?php echo $pimage; ?>" width='200px' height='100%'>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-4" align="left">
            <h3 class="ml-4 " style="text-transform: uppercase;letter-spacing: 1px;font-weight: bold;background: linear-gradient(to bottom right, #A22FCE, #FF7000); -webkit-background-clip: text; -webkit-text-fill-color: transparent;font-size: 20px;"><a href="view-product.php?id=<?php echo $pid; ?>"><?php echo "$pname";?></a></h3>
            <p style="color: green;margin-top: -13px;" class="ml-3">4<i class="fas fa-star" style="font-size: 12px;"></i> rating</p>
            
            <div class="mt-3 ml-4">
               <?php echo "$pdescription"; ?>
            </div>
            <div class="mt-3 ml-4">
                <h5 class="mt-3 price" style="font-size: 17px;"><i class="fas fa-rupee-sign" style="font-size: 13px;"></i><?php echo " $pprice" ?></h5>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="" method="post">    
                    <input type="hidden" name="place_order" value="<?php echo($pid)?>">
                    <button type="submit" name="buy_product" class="mb-2 p-1 btn-grad1 btn-block float-left">Place order</button>
               </form>
                <form action="" method="post">
                    <input type="hidden" name="removeItem" value="<?php echo($pid)?>">
                    <button type="submit" name="removeCart" class="btn-grad p-1 btn-block float-right">Remove from cart</button>
                </form>
            </div>
        </div>  
      </div>
  </div>
                            <?php
                        }
                    }
                    ?>
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