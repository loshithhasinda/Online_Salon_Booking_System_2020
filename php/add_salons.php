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

    if (isset($_POST['add']))
    {
        $salon_name = $_POST['salon_name'];
        $salon_city = $_POST['salon_city'];
        $salon_address = $_POST['salon_address'];
        $salon_contact_no = $_POST['salon_contact_no'];
        $salon_email = $_POST['salon_email'];
        $salon_note = $_POST['salon_note'];

        $query = "INSERT INTO salon (salon_name, salon_city, salon_address, salon_contact_no, salon_email, salon_note) VALUES ('{$salon_name}', '{$salon_city}', '{$salon_address}', '{$salon_contact_no}', '{$salon_email}', '{$salon_note}')";

        $result = mysqli_query($conn, $query);
        
        if ($result)
        {
            header('Location: manage_salons.php');
        }
        else
        {
            echo 'Failed to add the record';
        }

    }


?>




<!DOCTYPE html>
<html>
    <head>

        <title> Add Salons - SalonBooking.lk </title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../styles/add_products.css">
        <link href="https://fonts.googleapis.com/css2?family=Commissioner&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

        <script type="text/javascript" src="../js/index.js"></script>

        <style>
            .section01-div-form p {
                font-family: 'Commissioner', sans-serif;
                font-size: 20px;
            }
            form {
                font-family: 'Commissioner', sans-serif;
                font-size: 20px;
            }
            input[type=text] {
                width: 240px;
                padding: 8px 10px;
                margin: 10px 0;
                box-sizing: border-box;
                font-family: 'Commissioner', sans-serif;
                font-size: 18px;
            }
            #item_category {
                width: 240px;
                padding: 8px 10px;
                margin: 8px 0;
                box-sizing: border-box;
                font-family: 'Commissioner', sans-serif;
                font-size: 18px;
            }
            button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 20px 2px 20px 2px;
                cursor: pointer;
            }
            button:hover {
                background-color: #3e8e41
            }
        </style>

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
                    <p> Add Salons </p>
                </div>
                <!-- Page Title - End -->

            </div>

        </div>

        <!----- HEADER - END ----->

        <div class="section01" style="height: 800px; background-color: #f3eded;">

            <div class="section01-div" style="margin: 0 auto; max-width: 500px; text-align: center; border: 1px solid black; position: relative; top: 120px; background-color: #ffffff;">

                <div class="section01-div-form" style="text-align: left; margin: 10px;">

                    <b> <p style="font-size: 25px; text-align: center;"> Add Salon </p> </b> <br>

                    <form action="add_salons.php" method="post">

                        <label for=""> Salon Name : </label>
                        <input type="text" name="salon_name" style="margin-left: 62px;"><br>

                        <label for=""> Salon City : </label>
                        <input type="text" name="salon_city" style="margin-left: 30px;"><br>

                        <label for=""> Salon Address : </label>
                        <input type="text" name="salon_address" style="margin-left: 38px;"><br>

                        <label for=""> Salon Contact No : </label>
                        <input type="text" name="salon_contact_no" style="margin-left: 38px;"><br>

                        <label for=""> Salon Email : </label>
                        <input type="text" name="salon_email" style="margin-left: 38px;"><br>

                        <label for=""> Salon Note : </label>
                        <input type="text" name="salon_note" style="margin-left: 38px;"><br>

                        <div class="section01" style="text-align: center;"> <button type="submit" name="add"> Add Product </button> </div>

                    </form>

                </div>
            </div>
        </div>


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

