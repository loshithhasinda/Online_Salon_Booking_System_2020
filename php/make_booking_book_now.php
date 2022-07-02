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

    $success = '';
    $button_opacity = '0%';
    $button_curser = '';

    if (isset($_POST['book']))
    {
        $customer_id = $_SESSION['customer_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $mobile_no = $_POST['mobile_no'];
        $service_type = $_POST['service_type'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $city = $_POST['city'];
        $salon = $_POST['salon'];

        $query = "INSERT INTO appoinment (customer_id, first_name, last_name, mobile_no, service_type, date, time, city, salon) VALUES ('{$customer_id}', '{$first_name}', '{$last_name}', '{$mobile_no}', '{$service_type}', '{$date}', '{$time}', '{$city}', '{$salon}')";

        $result = mysqli_query($conn, $query);
        
        if ($result)
        {
            $button_opacity = '100%';
            $button_curser = 'cursor: pointer;';
            $success = '<p style="color: #c55427; font-size: 30px;"> Thank You! </p>';
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

        <title> Make Booking - SalonBooking.lk </title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Commissioner&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

        <!--CSS-->
        <link rel="stylesheet" href="../styles/index.css">
        <link rel="stylesheet" href="../styles/make_booking.css">
        
        <!--JS-->
        <script type="text/javascript" src="../js/index.js"></script>

        <style>
            * {
                box-sizing: border-box;
            }
            
            .form_background {
                background-size: cover;
                padding: 10px;
            }

            .bg1 {
                background-image: linear-gradient(rgba(134, 134, 134, 0.4), rgba(85, 85, 85, 0.678)), url("../images/my/\(3\).jpg");
                padding: 16px;
                background-color: gray;
                margin: auto;
                border-radius: 5px;
            }
            
            .container {
                padding: 50px;
                background-color: rgba(0, 0, 0, 0.822);
                margin: 100px 400px;
                border-radius: 10px;
            }
            
            .container input[type=text], select {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                background: #f1f1f1;
                border-radius: 10px;
            }
            
            .container input[type=text]:focus, select:focus {
                background-color: #ddd;
                outline: none;
            }
            
            .container hr {
                border: 1px solid #f1f1f1;
                margin-bottom: 25px;
            }
            
            #title {
                color: #d19f68;
                text-align: center;
                font-family: 'Berkshire Swash', cursive;
                font-size: 50px;
            }
            
            #p1 {
                text-align: center;
                color: white;
                font-family: 'Anton', sans-serif;
            }
            
            .p1 {
                text-align: center;
                color: white;
                font-size: 17px;
            }
            
            .f1 {
                font-family: Arial, Helvetica, sans-serif;
                color: white;
            }

            .datetime{
                padding: 10px;
                width: 300px;
                border-radius: 10px;
            }
            
            .button {
                background-color: #d19f68;
                color: black;
                padding: 16px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 50%;
                opacity: 0.9;
                position: relative;
                left: 24%;
                border-radius: 10px;
                font-size: 18px;
                font-weight: bold;
            }
            
            .button:hover {
                opacity:1;
                background-color: #45a049;
                color: white;
            }

            .signin {
                text-align: center;
                color: white;
                padding: 20px;
                background-color: rgba(114, 114, 114, 0.301);
                margin: 0px 0px;
                border-radius: 2px;
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
                    <p> Make Booking </p>
                </div>
                <!-- Page Title - End -->

            </div>

        </div>

        <!----- HEADER - END ----->


        <!--BOOK NOW-->


        <div class="form_background">
            <form class="form" action="make_booking_book_now.php" method="post">
                <div class="bg1">

                    <div class="container">

                        <div style="text-align: center; font-family: 'Anton, sans-serif;"> 
                            <?php echo $success; ?> 
                            <button type="button" onclick="document.location='home.php'" style="opacity: <?php echo $button_opacity; ?>; background-color: #c55427; color: white; padding: 16px 20px; margin: 8px 0; border: none; border-radius: 10px; <?php echo $button_curser; ?>"> Go Home </button>
                            <hr>
                        </div>

                        <h1 id="title">Your Booking</h1>

                        <p id="p1">Please fill in this form to book an appointment.</p>
            
                        <hr>
            
                        <label class="f1"><b>Name:</b></label>
                        <input type="text" placeholder="First Name" name="first_name" required>
                        <input type="text" placeholder="Last Name" name="last_name" required><br><br>
            
                        <label class="f1"><b>Phone Number</b></label><br>
                        <input type="text" placeholder="Your phone number.." name="mobile_no" required><br><br>

                        <label class="f1"><b>Service Type</b></label>
                        <select name="service_type">
                            <option value="Hair Cutting">Hair Cutting</option>
                            <option value="Hair Dressing">Hair Dressing</option>
                            <option value="Facial">Facial</option>
                            <option value="Nail Polish">Nail Polish</option>
                        </select>
            
                        <label class="f1"><b>Date</b></label>
                        <input type="date" class="datetime" name="date" required><br><br>
                    
                        <label class="f1"><b>Time</b></label>
                        <input type="time" class="datetime" name="time" required><br><br><br>

                        <label class="f1"><b>City</b></label>
                        <select name="city">
                            <option value="Colombo">Colombo</option>
                            <option value="Matara">Matara</option>
                            <option value="Kandy">Kandy</option>
                            <option value="Kurunegala">Kurunegala</option>
                            <option value="Negombo">Negombo</option>
                            <option value="Anuradhapura">Anuradhapura</option>
                            <option value="Kalutara">Kalutara</option>
                            <option value="Galle">Galle</option>
                            <option value="Rathnapura">Rathnapura</option>
                            <option value="Kagalle">Kagalle</option>
                        </select>

                        <label class="f1"><b>Salon</b></label>
                        <select name="salon">
                            <option value="Salon Nisha">Salon Nisha</option>
                            <option value="Salon Ish">Salon Ish</option>
                            <option value="Salon Ayu">Salon Ayu</option>
                            <option value="Salon Esh">Salon Esh</option>
                            <option value="Salon Manali">Salon Manali</option>
                            <option value="Salon Beauty">Salon Beauty</option>
                            <option value="Salon ABD">Salon ABD</option>
                            <option value="Salon Ama">Salon Ama</option>
                        </select>
            
                        <button type="submit" class="button" name="book">Book Now</button><br><br>

                        <hr>

                        <div class="signin">
                            <p class="p1">Already have booked up? <a href="#" style="color:sandybrown; font-size: 14px;"><br> Visit to the Manage Booking page.</a>.</p>
                        </div>

                    </div>

                </div>
            </form>
        </div>


        <!--END BOOK NOW-->


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

