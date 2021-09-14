
<?php
// error_reporting(0);
session_start();
include("db_connection.php");
$Pid = $_SESSION['Pid'];
$product_name = $_SESSION['product_name'];
$product_image = $_SESSION['product_image'];
$product_price = $_SESSION['product_price'];


$email = $_SESSION['email'];
$customer = $conn->prepare("select * from customer where email = ?");
$customer->bind_param("s", $email);
$customer->execute();
$result = $customer->get_result();
$customerresult = $result->fetch_assoc();
$cust_id = $customerresult['cust_id'];

        // Billing address

$address = $conn->prepare("select * from cust_info where cust_id = ? ");
$address->bind_param("i", $cust_id);
$address->execute();
$result = $address->get_result();
$addressresult = $result->fetch_assoc();

$customer_name = $addressresult['name'];
$customer_phone_number = $addressresult['phone_number'];
$customer_door_number = $addressresult['door_number'];
$customer_village = $addressresult['village'];
$customer_landmark = $addressresult['landmark'];
$customer_city = $addressresult['city'];
$customer_pincode = $addressresult['pincode'];

        // end finding address

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


// Start submitting data
 if (isset($_POST['submit'])) {
     # code...

    $status = "Ordered";
    $qty = $_POST["qty"];
    $total_amount = $_POST["total_amount"];

    $stmt = $conn->prepare("INSERT INTO `orders`(`cust_id`, `product_id`, `status`, `qty`, `total_amount`) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("iisis", $cust_id, $Pid, $status, $qty, $total_amount);
    $stmt->execute();

    if($stmt == true) 
      {
        echo "<script>alert('Ordered Successfully');</script>";

        ?>

<script>
  setTimeout(function(){
    window.location.href = "index.php";
  },0);
</script>

        <?php
        // echo "<script>alert('Ordered Successfully');</script>";
      }
    else echo "<center>errror</center>";
 }         




?>

<script src="assets/js/jquery.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Farmi - Organic Farm Agriculture Template">
    <title>Avanni - Organic Farm Agriculture</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <style type="text/css">
        .btn-grad {
            letter-spacing: 1px;
            text-align: center;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }
         .btn-grad {background-image: linear-gradient(to right, #FF512F 0%, #DD2476  51%, #FF512F  100%)}
          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
          
        .text-grad{background: linear-gradient(to bottom right, #A22FCE, #FF7000); -webkit-background-clip: text; -webkit-text-fill-color: transparent;}
        .module{position: relative;top: 50%;left: 50%;transform: translate(-50%);}
    </style>
</head>

<script>
    $(document).ready(function(){
        
        $("#qty").keyup(function(){
            
            var total = <?php echo "$product_price";?>;
            var price = <?php echo "$product_price";?>;
            var qty = Number($('#qty').val());
            if(qty >= 1)
            {
                var total = price * qty;
                $("#total").val(total);
                $("#ttl").val(total);
            } 
            else $("#total").val(total);$("#ttl").val(total);
            
        });
        
    });
</script>
<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

<?php include('header.php');?>
  
  <div class="container personalInfoBox">
        <div class="default-padding text-center col-lg-6 col-md-8 col-sm-10 col-12 module" style="padding-top: 2em;">
            <div class="p-5 personalInfoBorder">
                <form action="" method="post">
               <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6" style="height: 80px;">
                        <img src="Admin/assets/images/products/<?php echo $product_image; ?>" width='80px' height='100%'>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 productDetails">
                        <h6 class="ml-4" style="text-transform: uppercase;letter-spacing: 1px;font-weight: bold;background: linear-gradient(to bottom right, #A22FCE, #FF7000); -webkit-background-clip: text; -webkit-text-fill-color: transparent;font-size: 14px;text-align: left;"><?php echo "$product_name";?></h6>
                        <div class="ml-4 product-rating text-success" style="font-size: 12px;text-align: left;">
                                <span>5 </span><i class="fas fa-star"></i> <span>Rating</span>
                                
                        </div>
                    </div>
               </div>
               <div class="row mt-4">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                       <p style="color: gray;">Quantity</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6" align="left">
                       <input type="number" name="qty" class="col-lg-6 col-md-6 col-sm-10 col-6" id="qty" value="1" style="font-size: 14px;margin-top: -10px;">
                    </div>
               </div>
               <div class="row mt-4">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                       <p style="color: gray;">Item price</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6" align="left" style="margin-top: 7px;">
                       <h5 style="font-size: 14px;"><i class="fas fa-rupee-sign" style="font-size: 12px;"></i><?php echo " $product_price"; ?></h5>
                    </div>
               </div>
               <div class="row mt-4">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                       <p style="color: gray;">Total</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6" style="margin-top: -8px;" align="left">
                       
                       <h5 style="font-size: 14px;"><i class="fas fa-rupee-sign" style="font-size: 12px;"></i><input type="number" class="col-lg-8 col-md-8 col-sm-8 col-10" style="font-size: 14px;border: none;" id="total" value="<?php echo($product_price)?>" disabled></h5>
                       <input type="hidden" id="ttl" name="total_amount">
                    </div>
               </div>
               <hr class="mt-3">
               <h4 class="mt-4" style="text-transform: uppercase;font-weight: bold;font-size: 20px;color: gray;letter-spacing: 1px;">Payment Mode</h4>
               <div class="paymentType mb-4" align="center">
                   
                    <table>
                        
                            <tr><label for="cod">
                                <td><input type="radio" name="cards" style="width: 1.2em;" id="cod" required></td>
                                <td><h5 style="font-size: 17px;" class="ml-3 mt-3">Cash on Delivery</h5></td>
                            </label>
                            </tr>
                       
                      
                           <!--  <tr>
                                <td><input type="radio" name="cards" style="width: 1.2em;"></td>
                                <td><h5 style="font-size: 17px;" class="ml-3 mt-3">Credit/Debit card</h5></td>
                            </tr> -->
                    
                       
                    </table>
                  
               </div>
               <input type="submit" name="submit" value="CONFIRM ORDER" class="btn-grad btn-block">
               </form>
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