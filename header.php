 <?php
 error_reporting(0);
session_start();
include('db_connection.php');
 $email = $_SESSION['email']; 

$customer = $conn->prepare("select * from customer where email = ?");
$customer->bind_param("s", $email);
$customer ->execute();
$result = $customer->get_result();
$customerresult = $result->fetch_assoc();
$cust_id = $customerresult['cust_id'];

 if (strlen($_SESSION['email']) == 0) { } 
 else{
        $sql = $conn->prepare("SELECT COUNT(cust_id) as customer_id FROM `add-cart` where cust_id = ? ");
        $sql->bind_param("i", $cust_id);
        $sql->execute();
        $result = $sql->get_result();
        $row = $result->fetch_assoc();
        $productCount = $row["customer_id"];
        if ($productCount) $productCount = $row["customer_id"];
        else $productCount = null;
    }

 ?>

<!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav inc-border">
                    <ul>
                        <li class="dropdown">
                            <a href="add-to-cart.php" class="dropdown-toggle" data-toggle="dropdown" >
                                <i class="fas fa-shopping-cart"></i>
                                <span class="badge"><?php echo $productCount;?></span>
                            </a>
                            
                        </li>
                        <li class="search"><a href="#"><i class="fas fa-search"></i></a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="#" data-out="#">
                        <li><a href="index.php" class="menus">HOME</a></li>
                        <li><a href="about-us.php" class="menus">ABOUT US</a></li>
                        <li><a href="millets.php" class="menus">MILLETS</a></li>
                        <li><a href="products.php" class="menus">PRODUCTS</a></li>
                        <li><a href="gallery.php" class="menus">GALLERY</a></li>
                        <li><a href="contact.php" class="menus">CONTACT</p></a></li>
                    <?php

                    if (strlen($_SESSION['email']) == 0) {
                    
                    ?>
                        <li><a href="customer_login.php" class="menus">Login/Register</a></li>
                    <?php } 
                    else{ ?>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >My Account <i class="fas fa-user-circle"></i></a>
                            <ul class="dropdown-menu">
                                <!-- <li><a href="#"><i class="fas fa-user-circle"></i>  My Account</a></li> -->
                                <li><a href="orders.php"><i class="fas fa-shopping-cart"></i>  My Orders</a></li>
                                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>  Logout</a></li>
                            </ul>
                        </li>
                   <?php }
                    ?> 
                      </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header> <!-- End Header -->
    <style type="text/css">
        .dropdown ul li{display: block;}
        .dropdown ul li a{display: block;}
        .dropdown ul li a:hover{color: green;}
        .dropdown ul li:hover{background-color: lightgray;}
    </style>