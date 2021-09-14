<?php
error_reporting(0);
session_start();
include("db_connection.php");
$error = $mailerror = "";
# User Credentials
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql1 = $conn->prepare("select * from customer where email = ?");
    $sql1->bind_param("s", $email);
    $sql1->execute();
    $result = $sql1->get_result();
    $row = $result->fetch_assoc();
    $Dbemail = $row['email'];
    $Dbpassword = $row['password'];

    if(count($result) >= 1)
    {
        if($Dbemail == $email && $Dbpassword == $password){
        $_SESSION['email'] = $email;
        header('location:index.php');
        }
        else{
            $error = "Invalid email or password";
        }
    }  
    else $mailerror = "email is not registered, please create an account";;                       
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Avanni">

    <!-- ========== Page Title ========== -->
    <title>Avanni- Organics</title>

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

    @media only screen and (max-width: 769px)
      { 
        .rightnav{display: none;}
      }

        input[type='text'],input[type='email'],input[type='password']
        {
            border: none;
            outline: none;
            border-bottom: 1px solid gray;
            width: 70%;
        }

        .error{width: 70%;}
         .btn-grad {background-image: linear-gradient(to right, #314755 0%, #26a0da  51%, #314755  100%);}
         .btn-grad {text-transform: uppercase;transition: 0.5s;background-size: 200% auto;color: white;box-shadow: 0 0 20px #eee;border-radius: 40px;display: block;width: 70%;}

          .btn-grad:hover {
            background-position: right center;
            color: #fff;
            text-decoration: none;
          }
         
         .model{
            box-shadow: 4px 3px 14px 7px lightgray;
         }
         .text-grad{background: linear-gradient(to bottom right, #A22FCE, #FF7000); -webkit-background-clip: text; -webkit-text-fill-color: transparent;}

    </style>
</head>
<body>
<?php include('header.php');?>

<div class="history-area default-padding-top container" align="center">
     
    <div class="row m-1">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 model">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e7008a" fill-opacity="1" d="M0,192L80,160C160,128,320,64,480,85.3C640,107,800,213,960,240C1120,267,1280,213,1360,186.7L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
           <h5 class="text-center text-danger"><?php echo($error);?></h5>
           <h5 class="text-center text-danger"><?php echo "$mailerror";?></h5>
            <h3 class="mb-4 text-center text-grad">LOGIN</h3>
            <form action="" method="post">
                <div class="mb-4">
                    <!-- <label for="email" class="email">Email id</label><br> -->
                    <input type="email" class="" name="email" placeholder="Enter your Email id" required>
                </div>

                <div class="mb-4">
                    <!-- <label for="email">Password</label><br> -->
                    <input type="password" class="" id="" name="password" placeholder="Enter your Password" required>

                </div>

                <div align="center" class="mt-4 mb-4">
                    <input type="submit" class="btn-grad" name="submit" id="submit">
                </div>
            </form>
            <p class="text-center mt-4">Lost your password lets! &nbsp; <a href="#" class="text-danger">Forgot Password</a></p>
            <hr><p class="mt-4">Don't have an account, lets <a href="customer_register.php" class="text-grad">Create an account</a></p>
        </div>
       
        <!-- <div>
            <p>Click here to <a href="login.php">Login</a></p>
        </div> -->
        <div class="col-md-6 col-lg-6 default-padding half-bg bg-gradient-green text-center text-light rightnav">
            <img src="assets/img/logo.png" class="mb-4">
            <h3 style="letter-spacing: 1px;font-weight: bolder;text-shadow: .4em .4em .3em rgba(0, 0, 0, 0.6);">AVANNI ORGANICS</h3>
        </div>
    </div>
</div>

<?php include('footer.php');?>

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/validation_js.js"></script>
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