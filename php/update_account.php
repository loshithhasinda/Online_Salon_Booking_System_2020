<?php session_start(); ?>
<?php require 'config.php'; ?>

<?php

        if (isset($_SESSION['customer_user_type']) == 1)
        {
            $signup_button = 'My Account';
            $signup_button_link = 'manage_account.php';
            $signin_button = 'Log Out';
            $button_width = 'width: 160px;';
        }
        else if (isset($_SESSION['admin_user_type']) == 2)
        {
            $signup_button = 'Manage System';
            $signup_button_link = 'manage_system.php';
            $signin_button = 'Log Out';
            $signin_button_link = 'logout.php';
            $button_width = 'width: 150px;';
        }
?>

<?php

        $customer_id = $_SESSION['customer_id'];
        $customer_user_name = $_SESSION['customer_user_name'];

        // Getting the user information
        $user_id = mysqli_real_escape_string($conn, $_SESSION['customer_id']);
        $query = "SELECT * FROM customer WHERE user_id = {$user_id} LIMIT 1";

        $result_set = mysqli_query($conn, $query);

        if ($result_set)
        {
            if (mysqli_num_rows($result_set) == 1)
            {
                // User found
                $result = mysqli_fetch_assoc($result_set);
                $first_name = $result['first_name'];
                $last_name = $result['last_name'];
                $email = $result['email'];
                $mobile_no = $result['mobile_no'];
            }
            else
            {
                echo 'Error!';
            }
        }
        else
        {
            echo 'Error!';
        }

        if (isset($_POST['update']))
        {
            $user_id = $_SESSION['customer_id'];
            $user_name = $_POST['user_name'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $mobile_no = $_POST['mobile_no'];
    
            $query = "UPDATE customer SET user_name = '{$user_name}', first_name = '{$first_name}', last_name = '{$last_name}', email = '{$email}', mobile_no = '{$mobile_no}' WHERE user_id = {$user_id} LIMIT 1";
    
            $result = mysqli_query($conn, $query);
    
            if ($result)
            {
                header('Location: manage_account.php');
            }
            else
            {
                echo 'Failed to modify the record';
            }
        }



?>

<!DOCTYPE html>
<html>
    <head>

        <title> My Account - SalonBooking.lk </title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Commissioner&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

        <!--CSS-->
        <link rel="stylesheet" href="../styles/index.css">
        <link rel="stylesheet" href="../styles/manage_account.css">
        
        <!--JS-->
        <script type="text/javascript" src="../js/index.js"></script>
 
    </head>

    <body>
        
        <!----- HEADER - START ----->

        <div class="cover-page-bg-img">

            <div class="cover-page-bg-img-div">

                <!-- Navigation Bar Slide Down On Scroll - Start -->
                <div id="navbar">
                    <p style="float: left; color: #1d2434;"><b> SalonBooking.lk </b></p>
                    
                    <div class="nav-right" style="float: right;">
                        <a href="home.php">Home</a>
                        <a href="make_booking.php"> Make Booking </a>
                        <a href="services.php"> Services </a>
                        <a href="salons.php"> Salons </a>
                        <a href="products.php"> Products </a>
                        <a href="contact_us.php"> Contact Us </a>
                        <button onclick="document.location='<?php echo $signup_button_link; ?>'" style="margin-left: 40px; <?php echo $button_width; ?>"> <?php echo $signup_button; ?> </button>
                        <button onclick="document.location='logout.php'" style="margin-left: 20px;"> <?php echo $signin_button; ?> </button>
                    </div>
                </div>  
                <!-- Navigation Bar Slide Down On Scroll - End -->

                <!-- Top Logo - Start -->
                <div class="header-logo">
                    <p><b> SalonBooking<span>.</span>lk </b></p>
                </div>
                <!-- Top Logo - End -->

                <!-- Top Navigation Bar - Start -->
                <div class="section-topnav">
                    <div class="topnav">
                        <a href="home.php" class="active-a"> <div class="border-bottom" id="active-div"> Home </div></a> 
                        <a href="make_booking.php"> <div class="border-bottom"> Make Booking </div></a> 
                        <a href="services.php"> <div class="border-bottom"> Services </div></a> 
                        <a href="salons.php"> <div class="border-bottom"> Salons </div></a> 
                        <a href="products.php"> <div class="border-bottom"> Products </div></a>
                        <a href="contact_us.php"> <div class="border-bottom"> Contact Us </div></a>
                        <button onclick="document.location='<?php echo $signup_button_link; ?>'" style="margin-left: 40px; <?php echo $button_width; ?>"> <?php echo $signup_button; ?> </button>
                        <button onclick="document.location='logout.php'" style="margin-left: 40px;"> <?php echo $signin_button; ?> </button>
                    </div>
                </div>
                <!-- Top Navigation Bar - End -->

                <!-- Horizontal Line - Start -->
                <hr style="width: 100%; border-color: #775a3a;">
                <br>
                <!-- Horizontal Line - End -->

                <!-- Page Title - Start -->
                <div class="page-title">
                    <p> My Account </p>
                </div>
                <!-- Page Title - End -->

            </div>

        </div>

        <!----- HEADER - END ----->

        <div class="section01" style="height: 0px; background-color: #f3eded;"></div>

















        <!--MY ACCOUNT-->


        <div class="form_background">
 
            <div class="bg1">

                <form action="update_account.php" method="post">

                    <div class="container1">

                        <div class="container2">
                            <h1 id="title">Hello <?php echo $customer_user_name;?></h1>

                            <div class="logo">
                                <img src="../images/my/logo.png"  width="240px" height="240px" style="border-radius: 20%;">
                            </div>
                    
                            <button type="submit" class="button" name="update">Update Details</button>
                            <button type="button" class="button" onclick="document.location='manage_account.php'">Cancel</button>
                        </div>

                        <div class="container3">

                            <div class="container4">
                                <h1 style="color: white; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Personal Details</h1>

                                <label class="f1"><b>First Name</b></label>
                                <input type="text" id="input" name="first_name" value="<?php echo $first_name ?>">
        
                                <label class="f1"><b>Last Name</b></label>
                                <input type="text" id="input" name="last_name" value="<?php echo $last_name ?>">

                                <label class="f1"><b>User Name</b></label>
                                <input type="text" id="input" name="user_name" value="<?php echo $customer_user_name ?>">

                                <label class="f1"><b>Email</b></label>
                                <input type="text" id="input" name="email" value="<?php echo $email ?>">

                                <label class="f1"><b>Mobile No</b></label>
                                <input type="text" id="input" name="mobile_no" value="<?php echo $mobile_no ?>">

                            </div>

                        </div>

                    </div>

                </form>

            </div>

        </div>


        <!--END MY ACCOUNT-->

















        <!----- FOOTER - START ----->

        <div class="section-footer" style="height: 400px;">
            <div class="section-footer-bg">

                <div class="footer-div" style="margin: 0 auto; max-width: 1300px;"> 
           
                    <div class="footer-row">
    
                        <div class="footer-column" style="margin: 10px 10px 10px 22px;">
                            <p class="footer-column-logo"> SalonBooking.lk </p>
                            <p class="footer-column-note"> Find the best Salons in your area. Simply search and make a beauty appointment online quickly at the salon of your choice. </p>
                            <p class="footer-column-email"> salonbookinglk@gmail.com </p>
                        </div>
    
                        <div class="footer-column" style="margin: 10px;">   
                            <p class="footer-column-topic01"> Quick Navigation </p>
                            <div class="footer-column-nav">
                                <p> <a href="home.php"> Home </a> </p>
                                <p> <a href="make_booking.php"> Make Booking </a> </p>
                                <p> <a href="services.php"> Services </a> </p>
                                <p> <a href="salons.php"> Salons </a> </p>
                                <p> <a href="products.php"> Products </a> </p>
                            </div>
                        </div>
    
                        <div class="footer-column" style="margin: 10px;"> 
                            <p class="footer-column-topic02"> Explore </p> 
                            <div class="footer-column-explore">
                                <p> <a href="about_us.php"> About Us </a> </p>
                                <p> <a href="contact_us.php"> Contact Us </a> </p>
                                <p> <a href="feedback.php"> Feedback </a> </p>
                                <p> <a href="#privacy_policy"> Prtvacy Policy </a> </p>
                                <p> <a href="#terms&conditions"> Terms and Conditions </a> </p>
                            </div>
                        </div>
    
                        <div class="footer-column" style="margin: 10px;"> 
                            <p class="footer-column-topic03"> Follow Us </p>
                            <div class="footer-column-social-media"> 
                                <div class="footer-column-social-media-div">  <p> <a href="https://www.facebook.com/" target="blank"> <img src="../images/facebook-b.png"> </a> </p> </div> 
                                <div class="footer-column-social-media-div">  <p> <a href="https://www.instagram.com/accounts/login/" target="blank"> <img src="../images/instagram-b.png"> </a> </p> </div> 
                                <div class="footer-column-social-media-div">  <p> <a href="https://twitter.com/login?lang=en" target="blank"> <img src="../images/twitter-b.png"> </a> </p> </div> 
                                <div class="footer-column-social-media-div">  <p> <a href="https://www.linkedin.com/login" target="blank"> <img src="../images/linkedin-b.png"> </a> </p> </div> 
                            </div>
                            <br>
                            <p class="footer-column-topic03-yt"> Subscribe </p>
                            <div class="footer-column-social-media-div-yt">  <p> <a href="https://www.youtube.com/" target="blank"> <img src="../images/youtube-b.png"> </a> </p> </div>
                        </div>
    
                    </div>    
                </div>

            </div>

        </div>

        <!----- FOOTER - END ----->

    </body>
</html>

