
<?php
error_reporting(0);
session_start();
include("db_connection.php");
$Product_id = $_SESSION['Pid'];
// Session checking start
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
// Session checking end

$email = $_SESSION['email'];
$customer = $conn->prepare("select * from customer where email = ?");
$customer->bind_param("s", $email);
$customer->execute();
$result = $customer->get_result();
$customerresult = $result->fetch_assoc();
$cust_id = $customerresult['cust_id'];
// Adding new Shipping Address

 if (isset($_POST['submit'])) {

    $name = $_POST["name"];
    $phone_number = $_POST["phone_number"];
    $door_number = $_POST["door_number"];
    $village = $_POST["village"];
    $landmark = $_POST["landmark"];
    $city = $_POST["city"];
    $pincode = $_POST["pincode"];

                // $sql = $conn->prepare("SELECT * FROM `cust_info` WHERE cust_id = ? AND name = ? AND phone_number = ? AND door_number = ? AND village = ? AND landmark = ? AND city = ? AND pincode = ? AND Product_id = ?"); 
                // $sql->bind_param("isssssssi", $cust_id, $name, $phone_number, $door_number, $village, $landmark, $city, $pincode, $Product_id);
                // $sql->execute();
                // $result = $sql->get_result();
                // $row = $result->fetch_assoc();
                // $cust_idd = $row['cust_id'];
                // $Product_idd = $row['Product_id'];
                // $phone_numberr = $row['phone_number'];
                // $namee = $row['name'];
                // $door_numberr = $row['door_number'];
                // $villagee = $row['village'];
                // $landmarkk = $row['landmark'];
                // $cityy = $row['city'];
                // $pincodee = $row['pincode'];

        // if ($cust_idd == $cust_id && $phone_numberr == $phone_number && $namee == $name && $door_numberr == $door_number && $villagee == $village && $landmarkk == $landmark && $cityy == $city && $pincodee == $pincode && $Product_idd == $Product_id) {
        //     # code...
            
        //      $stmts = $conn->prepare("UPDATE `cust_info` SET cust_id = ?, name = ?, phone_number = ?, door_number = ?, village = ?, landmark = ?, city = ?, pincode = ?, Product_id = ? WHERE cust_id = ? AND name = ? AND phone_number = ? AND door_number = ? AND village = ? AND landmark = ? AND city = ? AND pincode = ? AND Product_id = ?");
        //      $stmts->bind_param("isssssssiisssssssi", $cust_id, $name, $phone_number, $door_number, $village, $landmark, $city, $pincode, $Product_id, $cust_id, $name, $phone_number, $door_number, $village, $landmark, $city, $pincode, $Product_id);
        //      $stmts->execute();
        // if($stmts) header('location:payment_option.php');
        // }
    
        // else{

            $stmt = $conn->prepare("INSERT INTO `cust_info`(`cust_id`, `name`, `phone_number`, `door_number`, `village`, `landmark`, `city`, `pincode`, `Product_id`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("isssssssi", $cust_id, $name, $phone_number, $door_number, $village, $landmark, $city, $pincode, $Product_id);
            $stmt->execute();

            if($stmt == true)
            {
             header('location:payment_option.php');
            }
            else echo "<center>errror</center>";
            // }
 }


 // Confirm Address

if (isset($_POST['confirm_address'])) {
  # code...
        $cust_id = $_POST['cust_id'];
        $phone_number = $_POST['phone_number'];
        $name = $_POST['name'];
        $door_number = $_POST['door_number'];
        $village = $_POST['village'];
        $landmark = $_POST['landmark'];
        $city = $_POST['city'];
        $pincode = $_POST['pincode'];

        $stmts = $conn->prepare("INSERT INTO `cust_info`(`cust_id`, `name`, `phone_number`, `door_number`, `village`, `landmark`, `city`, `pincode`, `Product_id`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmts->bind_param("isssssssi", $cust_id, $name, $phone_number, $door_number, $village, $landmark, $city, $pincode, $Product_id);
        $stmts->execute();
        if($stmts == true) header('location:payment_option.php');
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

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

<?php

?>



<?php include('header.php');?>
  
    <div class="container personalInfoBox" id="confirmAddress">
        <div class="default-padding text-center col-lg-6 col-md-8 col-sm-10 col-12 module">
            <div class="p-4 personalInfoBorder">
                <p class="text-center pb-4" style="color: gray;letter-spacing: 1px;text-transform: uppercase;"><b>Confirm shipping address</b></p>
                <p class="text-left" style="color: gray;">Deliver to..<span class="float-right"><a href="#" class="text-danger" onclick="displayBillingAddress()">Add new address</a></span></p>
               
               <?php

                $stmt = $conn->prepare("SELECT DISTINCT phone_number,name,door_number,village,landmark,city,pincode FROM cust_info WHERE cust_id = ?"); 
                $stmt->bind_param("i", $cust_id);
                $stmt->execute();
                $result = $stmt->get_result();
                while($row = $result->fetch_assoc()){
                  # code...
                  // $cust_id = $row['cust_id'];
                  $phone_number = $row['phone_number'];
                  $name = $row['name'];
                  $door_number = $row['door_number'];
                  $village = $row['village'];
                  $landmark = $row['landmark'];
                  $city = $row['city'];
                  $pincode = $row['pincode'];

                  ?>    
                  <div class="row pt-2 text-left">
                    <div class="col-lg-11 col-md-11 col-sm-10 col-10">
                        <p class="" style="color: black;font-size: 18px;"><?php echo "$name,<span style='font-size: 12px;'> $phone_number</span>";?></p>
                        <p class="" style="margin-top: -1em;"><?php echo "<span style='font-size: 13px;'>$door_number, $village, $landmark, $city, $pincode</span>";?></p>
                      
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                        <form action="" method="post">
                            <input type="hidden" value="<?php echo "$cust_id";?>" name="cust_id">
                            <input type="hidden" value="<?php echo "$phone_number";?>" name="phone_number">
                            <input type="hidden" value="<?php echo "$name";?>" name="name">
                            <input type="hidden" value="<?php echo "$door_number";?>" name="door_number">
                            <input type="hidden" value="<?php echo "$village";?>" name="village">
                            <input type="hidden" value="<?php echo "$landmark";?>" name="landmark">
                            <input type="hidden" value="<?php echo "$city";?>" name="city">
                            <input type="hidden" value="<?php echo "$pincode";?>" name="pincode">
                            <button type="submit" name="confirm_address" class="bg-white float-right"><p class="text-success">Confirm</p></button>
                       </form>
                    </div>
                    <!-- <input type="submit" name="submit" value="CONFIRM ORDER" class="btn-grad btn-block"> -->
                  </div>
                 
                   <hr class="mb-3">
                  <?php
              }
               ?>  
                </div>
            </div>
    </div>

  <div class="container personalInfoBox" id="billingAddress">
        <div class="default-padding  col-lg-6 col-md-8 col-sm-10 col-12 module" style="padding-top: 0em;">
            <div class="p-5 personalInfoBorder">
                <form action="" method="post" class="mb-4">
                    <center class="pb-5"><h4><b style="letter-spacing: 1px;" class="text-grad">BILLING ADDRESS</b></h4></center>
                    <div class="mb-4">
                        <p>Name</p>
                        <input type="text" name="name" required>
                    </div>
                    <div class="mb-4">
                        <p>Phone number</p>
                        <input type="number" name="phone_number" required>
                    </div>
                    <div class="mb-4">
                        <p>flat number</p>
                        <input type="text" name="door_number" required>
                    </div>
                    <div class="mb-4">
                        <p>Colony / village</p>
                        <input type="text" name="village" required>
                    </div>
                    <div class="mb-4">
                        <p>Landmark</p>
                        <input type="text" name="landmark" required>
                    </div>
                    <div class="mb-4">
                        <p>City</p>
                        <input type="text" name="city" required>
                    </div>
                    <div class="mb-4">
                        <p>Pincode</p>
                        <input type="number" name="pincode" required>
                    </div>
                    <div class="pb-4">
                        
                        <input type="submit" name="submit" value="Next" class="float-right btn-grad btn-block">
                    </div>
                </form>  
              </div>
          </div>
  </div>

<?php include('footer.php');?>

    <!-- Java Script -->

    <script type="text/javascript">
        document.getElementById('billingAddress').style.display = "none";
        function displayBillingAddress()
        {
                document.getElementById('billingAddress').style.display = "block";
                document.getElementById('billingAddress').style.paddingTop = "13px";
                document.getElementById('confirmAddress').style.display = "none";
        }

        <?php

            $sql = $conn->prepare("SELECT * FROM `cust_info` WHERE cust_id = ?"); 
                $sql->bind_param("i", $cust_id);
                $sql->execute();
                $result = $sql->get_result();
                $result1 = $result->fetch_assoc();
                // $row = ;
                if(count($result1) < 1)
                {?>
                    document.getElementById('billingAddress').style.display = "block";
                    document.getElementById('confirmAddress').style.display = "none";
                    document.getElementById('billingAddress').style.paddingTop = "13px";
                <?php }
        ?>
</script>
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