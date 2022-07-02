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

<!DOCTYPE html>
<html>
<head>
    <script>
        alert("Page lodded Successfully");
    </script>
    <meta charset="UTF-8">
    <title>Hair Dresser - SalonBooking.lk</title>
    <link rel="stylesheet" type="text/css" href="../styles/about_us.css">
    <script type="text/javascript" src="../js/index.js"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Commissioner&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
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
                <p style="font-size: 32px;"><b> SalonBooking<span>.</span>lk </b></p>
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
                <p> About Us </p>
            </div>
            <!-- Page Title - End -->

        </div>

    </div>

    <!----- HEADER - END ----->
 
    <section>
    
       <div class = "text-container">
           <p>Hello,</p>
           <p>I'M Jhon</p>
           <p>I am a Hair Dresser</p>
           <div class="button">
            <button class="hire-btn">Hire me</button>
           </div>
       </div>
            <img src="../images/model1.jpg" class="model1" alt="model1">
    </section>
        <div class="about-container">
    <!--------image------------------------>
        <img src="../images/user3.jpeg"
    <!--------about------------------------>
        <div class="about-text">
            <p>About Me</p>
            <p>Hair Dresser</p>
         <p>Name          : Jhon<br><br>
            Age           : 27<br>
            Qualification : NVQ Level 05 in Hair Style<br>
            Experiance    : 4years<br>
            Tasks         : Hair Cut, Beard Cut, Head Massage<br>
            E-mail        : <a href ="www.hotmail.com">jhonfrenandon1223@hotmail.com</a></p>
        
        </div>
    </div>
     <!-----------------------------box-------------------------------->
     <div class="box-container">
        <!----1-->
            <div class="box-1">
            <span>1</span>
            <p class="heading">Paul Brayan</p>
            <p class="details">if you want to make a hair design, hair cut contact me.I make as soon as possible
                You really like my work, If you don't i change this until you like if you want.
            </p>
            <button><a href ="about_us.php">View more</a></button></div>
        <!-----2-->
            <div class="box-2">
                <span>2</span>
                <p class="heading">Hashini</p>
                <p class="details">if you want to make a facial,skin massage,hair color contact me.I make as soon as possible
                    You really like my work, If you don't i change this until you like if you want.
                </p>
                <button><a href ="about_us_sub02.php">veiw more</a></button>  
            </div>
        <!-----3--->
            <div class="box-3">
                <span>3</span>
                <p class="heading">Sheshan</p>
                <p class="details">if you want to make a hair treatment or details about hair maintaing contact me.I make as soon as possible
                You really like my work, If you don't i change this until you like if you want.
            </p>
            <button><a href ="about_us_sub03.php">veiw more</a></button>
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


        
        </div>
</body>
</html>   