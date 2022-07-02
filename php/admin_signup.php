<?php require 'config.php'; ?>

<?php

    $user_name = '';
    $first_name = '';
    $last_name = '';
    $gender = '';
    $email = '';
    $mobile_no = '';
    $city = '';
    $position = '';
    $password = '';

    if (isset($_POST['register']))
    {
        $user_name = $_POST['user_name'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $mobile_no = $_POST['mobile_no'];
        $city = $_POST['city'];
        $position = $_POST['position'];
        $password = $_POST['password'];

        // Checking if User Name already exists
        $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
        $query = "SELECT * FROM admin WHERE user_name = '{$user_name}' LIMIT 1";
                
        $result_set = mysqli_query($conn, $query);
        $error = '';
                
        if ($result_set)
        {
            if (mysqli_num_rows($result_set) == 1)
            {
                $item_id_exists = 'User Name already exists';
                $error = '1';
        
            }
        }

        if (empty($error)) 
        {
            $query = "INSERT INTO admin (user_name, first_name, last_name, gender, email, mobile_no, city, position, password, user_type) VALUES ('{$user_name}', '{$first_name}', '{$last_name}', '{$gender}', '{$email}', '{$mobile_no}', '{$city}', '{$position}', '{$password}', 2)";

            $result = mysqli_query($conn, $query);
        
            if ($result)
            {
                header('Location: admin_login.php');
            }
            else
            {
                echo 'Failed to add the record';
            }
        }
    }


?>




<!DOCTYPE html>
<html>
    <head>

        <title> Sign Up - SalonBooking.lk </title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Commissioner&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

        <!--CSS-->
        <link rel="stylesheet" href="../styles/index.css">
        <link rel="stylesheet" href="../styles/signup.css">
        
        <!--JS-->
        <script type="text/javascript" src="../js/index.js"></script>

        <style>
                * {
                    box-sizing: border-box;
                }

                .form_background {
                    background-image:url(../images/my/);
                    background-size: cover;
                }

                .form {
                    padding: 10px;
                }

                .bg1 {
                    background-image: linear-gradient(rgba(134, 134, 134, 0.4), rgba(85, 85, 85, 0.678)), url("../images/my/\(3\).jpg");
                    padding: 16px;
                    margin: auto;
                    border-radius: 5px;
                }

                .container {
                    padding: 50px;
                    background-color: rgba(0, 0, 0, 0.822);
                    margin: 100px 400px;
                    border-radius: 10px;
                }

                .container input[type=text], .container input[type=password], select {
                    width: 100%;
                    padding: 15px;
                    margin: 5px 0 22px 0;
                    display: inline-block;
                    border: none;
                    background: #f1f1f1;
                    border-radius: 10px;
                }

                .container input[type=text]:focus, .container input[type=password]:focus, select:focus {
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
                }

                .f1 {
                    font-family: Arial, Helvetica, sans-serif;
                    color: white;
                }

                .checkbox {
                    margin-bottom: 30px;
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
                        <a href="index.php">Home</a>
                        <a href="make_booking_index.php"> Make Booking </a>
                        <a href="services_index.php"> Services </a>
                        <a href="salons_index.php"> Salons </a>
                        <a href="products_index.php"> Products </a>
                        <a href="contact_us_index.php"> Contact Us </a>
                        <button onclick="document.location='customer_signup.php'" style="margin-left: 40px;"> Sign Up </button>
                        <button onclick="document.location='customer_login.php'" style="margin-left: 20px;"> Sign In </button>
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
                        <a href="index.php" class="active-a"> <div class="border-bottom" id="active-div"> Home </div></a> 
                        <a href="make_booking_index.php"> <div class="border-bottom"> Make Booking </div></a> 
                        <a href="services_index.php"> <div class="border-bottom"> Services </div></a> 
                        <a href="salons_index.php"> <div class="border-bottom"> Salons </div></a> 
                        <a href="products_index.php"> <div class="border-bottom"> Products </div></a>
                        <a href="contact_us_index.php"> <div class="border-bottom"> Contact Us </div></a>
                        <button onclick="document.location='customer_signup.php'" style="margin-left: 40px;"> Sign Up </button>
                        <button onclick="document.location='customer_login.php'" style="margin-left: 40px;"> Sign In </button>
                    </div>
                </div>
                <!-- Top Navigation Bar - End -->

                <!-- Horizontal Line - Start -->
                <hr style="width: 100%; border-color: #775a3a;">
                <br>
                <!-- Horizontal Line - End -->

                <!-- Page Title - Start -->
                <div class="page-title">
                    <p> Admin Sign Up </p>
                </div>
                <!-- Page Title - End -->

            </div>

        </div>

        <!----- HEADER - END ----->


        <!--SIGN UP-->


        <div class="form_background">
            <form class="form" action="admin_signup.php" method="post">
                <div class="bg1">
                    <div class="container">
                        <h1 id="title">Create Your Account</h1>

                        <p id="p1">Please fill in this form to create an account.</p>

                        <hr>
                        
                        <label class="f1"><b>First Name</b></label>
                        <input type="text" placeholder="Your first name.." name="first_name" required>

                        <label class="f1"><b>Last Name</b></label>
                        <input type="text" placeholder="Your last name.." name="last_name" required>

                        <label class="f1"><b>User Name</b></label>
                        <input type="text" placeholder="Your user name.." name="user_name" required>

                        <label class="f1"><b>Gender</b></label>
                        <span>Choose your country</span>
                        <select name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>

                        <label class="f1"><b>Email</b></label>
                        <input type="text" placeholder="ex: myname@example.com" name="email" required>

                        <label class="f1"><b>Mobile No</b></label>
                        <input type="text" placeholder="ex: 0xxxxxxxxx" name="mobile_no" required>

                        <label class="f1"><b>City</b></label>
                        <input type="text" placeholder="ex: colombo" name="city" required>

                        <label class="f1"><b>Position</b></label>
                        <input type="text" placeholder="ex: Stylist" name="position" required>

                        <label class="f1"><b>Password</b></label>
                        <input type="password" placeholder="" name="password" required>
                        
                        <label class="f1"><b>Repeat Password</b></label>
                        <input type="password" placeholder="" name="re-password" required>
                            
                        <label class="f1">
                            <input type="checkbox" checked="checked" class="checkbox"> Remember me
                        </label>
                            
                        <p class="p1">By creating an account you agree to our <a href="#" style="color:sandybrown">Terms & Privacy</a>.</p>
                        
                        <button type="submit" class="button" name="register">Sign Up</button><br><br>

                        <button type="button" class="button" onclick="document.location='customer_signup.php'">Customer Sign Up</button><br><br>

                        <hr>

                        <div class="signin">
                            <p>Already have an account? <a href="customer_login.php" style="color:sandybrown">Sign in</a>.</p>
                        </div>

                    </div>
                </div>
            </form>
        </div>

        <!--END SIGN UP-->


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
                                <p> <a href="index.php"> Home </a> </p>
                                <p> <a href="make_booking_index.php"> Make Booking </a> </p>
                                <p> <a href="services_index.php"> Services </a> </p>
                                <p> <a href="salons_index.php"> Salons </a> </p>
                                <p> <a href="products_index.php"> Products </a> </p>
                            </div>
                        </div>
    
                        <div class="footer-column" style="margin: 10px;"> 
                            <p class="footer-column-topic02"> Explore </p> 
                            <div class="footer-column-explore">
                                <p> <a href="about_us_index.php"> About Us </a> </p>
                                <p> <a href="contact_us_index.php"> Contact Us </a> </p>
                                <p> <a href="feedback_index.php"> Feedback </a> </p>
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

