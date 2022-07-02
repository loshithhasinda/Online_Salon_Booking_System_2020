<?php require 'config.php'; ?>

<!DOCTYPE html>
<html>
    <head>

        <title> Home - SalonBooking.lk </title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../styles/home.css">
        <link href="https://fonts.googleapis.com/css2?family=Commissioner&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">

        <script type="text/javascript" src="../js/home.js"></script>

    </head>

    <body>
        
        <!----- COVER PAGE - START ----->

        <div class="cover-page-bg-img">

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

            <!-- Cover Page Note - Start -->
            <div class="cover-page-note">
                <p> Let's Make You an </p> 
                <p> Appointment </p>
            </div>

            <div class="booking-btn">
                <button onclick="document.location='make_booking_index.php'"> Make an Appointment </button>
            </div>
            <!-- Cover Page Note - End -->

        </div>

        <!----- COVER PAGE - END ----->


        <!----- FIRST SECTION - START ----->

        <div class="section01">  <!-- [height: 840px;] -->

            <div class="section01-div" style="margin: 0 auto; max-width: 1300px;">

                <div class="section01-note-div">
                    <div class="section01-note">
                        <p class="section01-note-topic"> SalonBooking.lk </p>
                        <p class="section01-note-para"> "Find the best Salons in your area. Simply search and make a beauty appointment online quickly at the salon of your choice" </p>
                    </div>

                    <div class="salons-day">
                        <fieldset>
                            <legend> Open Days </legend>
                            <p> Moday - Sunday </p>
                        </fieldset>
                    </div>

                    <div class="salons-time">
                        <fieldset>
                            <legend> Work Hours </legend>
                            <p> 8.00AM - 8.00PM </p>
                        </fieldset>
                    </div>

                    <div class="salons-button">
                        <button onclick="document.location='salons_index.php'"> Our Salons </button>
                    </div>

                </div>
            
                <div class="section01-image">
                    <img src="../images/andre-reis-bmIJtELt3Ck-unsplash.jpg">
                </div>
            
            </div>

        </div>

        <!----- FIRST SECTION - END ----->


        <!----- SECOND SECTION - START ----->

        <div class="section02" style="height: 700px;">
                
            <div class="section02-note" style="margin: 0;">
                <p class="section02-note-topic"> OUR BEST SERVICES </p>
            </div>

            <div class="section02-div" style="margin: 0 auto; max-width: 1300px;"> 
           
                <div class="service-row">

                    <div class="service-column" style="margin: 10px 10px 10px 22px;">
                        <div class="service-column-img"> <img src="../images/service01.png" alt="" style="width: 150px; height: 150px;"> </div> 
                        <div class="service-column-name"> Hair Cutting </div>
                        <div class="service-column-para"> Discover the essence of natural Beauty. </div>
                        <div class="service-column-button"> <button onclick="document.location='services_index.php'"> View More </button> </div>                        
                    </div>

                    <div class="service-column" style="margin: 10px;">   
                        <div class="service-column-img"> <img src="../images/service02.png" alt="" style="width: 150px; height: 150px;"> </div>   
                        <div class="service-column-name"> Hair Dressing </div>
                        <div class="service-column-para"> Discover the essence of natural Beauty. </div>
                        <div class="service-column-button"> <button onclick="document.location='services_index.php'"> View More </button> </div>
                    </div>

                    <div class="service-column" style="margin: 10px;">  
                        <div class="service-column-img"> <img src="../images/service03.png" alt="" style="width: 150px; height: 150px;"> </div>   
                        <div class="service-column-name"> Facial </div>
                        <div class="service-column-para"> Discover the essence of natural Beauty. </div>
                        <div class="service-column-button"> <button onclick="document.location='services_index.php'"> View More </button> </div>
                    </div>

                    <div class="service-column" style="margin: 10px;"> 
                        <div class="service-column-img"> <img src="../images/service04.png" alt="" style="width: 150px; height: 150px;"> </div>   
                        <div class="service-column-name"> Nail Polish </div>
                        <div class="service-column-para"> Discover the essence of natural Beauty. </div>
                        <div class="service-column-button"> <button onclick="document.location='services_index.php'"> View More </button> </div>                                        
                    </div>

                </div>    
            </div>

        </div>

        <!----- SECOND SECTION - END ----->


        <!----- THIRDH SECTION - START ----->

        <div class="section03" style="height: 600px; width: 100%;">
            <div class="section03-bg">
                <div class="section03-topic"> <p> Our Beauticians </p></div>

                <div class="section03-div" style="margin: 0 auto; max-width: 1300px;"> 
           
                    <div class="beautician-row">
    
                        <div class="beautician-column" style="margin: 10px 10px 10px 22px;">
                            <div class="beautician-column-img"> <img src="../images/beautician01.jpg" alt="" style="width: 150px; height: 150px; border-radius: 50%;"> </div> 
                            <div class="beautician-column-name"> Paul Brayan </div>
                            <div class="beautician-column-name1"> Hair Stylist & Specialist </div>
                            <div class="beautician-column-para"> if you want to make a hair design, hair cut contact me. </div>
                            <div class="beautician-column-button"> <button onclick="document.location='about_us_index.php'"> View Profile </button> </div>  
                            <div class="beautician-social-media">
                                <a href=""> <img src="../images/facebook-b.png"> </a>
                                <a href=""> <img src="../images/instagram-b.png"> </a>
                                <a href=""> <img src="../images/twitter-b.png"> </a>
                                <a href=""> <img src="../images/linkedin-b.png"> </a>
                            </div>                   
                        </div>
    
                        <div class="beautician-column" style="margin: 10px;">   
                            <div class="beautician-column-img"> <img src="../images/beautician02.jpg" alt="" style="width: 150px; height: 150px;"> </div>   
                            <div class="beautician-column-name"> Jhon </div>
                            <div class="beautician-column-name1"> Hair Dresser </div>
                            <div class="beautician-column-para"> if you want to make a hair design, hair cut contact me. </div>
                            <div class="beautician-column-button"> <button onclick="document.location='about_us_index.php'"> View Profile </button> </div>
                            <div class="beautician-social-media">
                                <a href=""> <img src="../images/facebook-b.png"> </a>
                                <a href=""> <img src="../images/instagram-b.png"> </a>
                                <a href=""> <img src="../images/twitter-b.png"> </a>
                                <a href=""> <img src="../images/linkedin-b.png"> </a>
                            </div>   
                        </div>
    
                        <div class="beautician-column" style="margin: 10px;">  
                            <div class="beautician-column-img"> <img src="../images/beautician03.png" alt="" style="width: 150px; height: 150px;"> </div>   
                            <div class="beautician-column-name"> Hashini Peris </div>
                            <div class="beautician-column-name1"> Beauty Therapist </div>
                            <div class="beautician-column-para"> if you want to make a facial,skin massage,hair color contact me. </div>
                            <div class="beautician-column-button"> <button onclick="document.location='about_us_index.php'"> View Profile </button> </div>
                            <div class="beautician-social-media">
                                <a href=""> <img src="../images/facebook-b.png"> </a>
                                <a href=""> <img src="../images/instagram-b.png"> </a>
                                <a href=""> <img src="../images/twitter-b.png"> </a>
                                <a href=""> <img src="../images/linkedin-b.png"> </a>
                            </div>   
                        </div>
    
                        <div class="beautician-column" style="margin: 10px;"> 
                            <div class="beautician-column-img"> <img src="../images/beautician04.png" alt="" style="width: 150px; height: 150px;"> </div>   
                            <div class="beautician-column-name">  Sheshan </div>
                            <div class="beautician-column-name1"> Hair Specialist </div>
                            <div class="beautician-column-para"> if you want to make a hair treatment or details about hair maintaing contact me. </div>
                            <div class="beautician-column-button"> <button onclick="document.location='about_us_index.php'"> View Profile </button> </div>
                            <div class="beautician-social-media">
                                <a href=""> <img src="../images/facebook-b.png"> </a>
                                <a href=""> <img src="../images/instagram-b.png"> </a>
                                <a href=""> <img src="../images/twitter-b.png"> </a>
                                <a href=""> <img src="../images/linkedin-b.png"> </a>
                            </div>                                           
                        </div>
    
                    </div>    
                </div>

            </div>

        </div>

        <!----- THIRDH SECTION - END ----->


        <!----- FOURTH SECTION - START ----->

        <div class="section04" style="height: 700px; background-color: #f3eded;">

            <div class="section04-note" style="margin: 0;">
                <p class="section04-note-topic"> OUR SHOP </p>
            </div>

            <div class="section04-div" style="margin: 0 auto; max-width: 1300px;"> 
           
                <div class="product-row">

                    <div class="product-column" style="margin: 50px 10px 10px 22px;">
                        <div class="product-column-img"> <img src="../images/product01.png" alt="" style="width: 150px; height: 150px;"> </div> 
                        <div class="product-column-name"> Hiar Dryers </div>
                        <div class="product-column-para"> Our Quliaty Products. </div>
                        <div class="product-column-button"> <button onclick="document.location='products_index.php'"> Buy Now </button> </div>                        
                    </div>

                    <div class="product-column" style="margin: 50px 10px 10px 10px;">   
                        <div class="product-column-img"> <img src="../images/product02.png" alt="" style="width: 150px; height: 150px;"> </div>   
                        <div class="product-column-name"> Shampoos </div>
                        <div class="product-column-para"> Our Quliaty Products. </div>
                        <div class="product-column-button"> <button onclick="document.location='products_index.php'"> Buy Now </button> </div>
                    </div>

                    <div class="product-column" style="margin: 50px 10px 10px 10px;">  
                        <div class="product-column-img"> <img src="../images/product03.png" alt="" style="width: 150px; height: 150px;"> </div>   
                        <div class="product-column-name"> Lipsticks </div>
                        <div class="product-column-para"> Our Quliaty Products. </div>
                        <div class="product-column-button"> <button onclick="document.location='products_index.php'"> Buy Now </button> </div>
                    </div>

                    <div class="product-column" style="margin: 50px 10px 10px 10px;"> 
                        <div class="product-column-img"> <img src="../images/product04.png" alt="" style="width: 150px; height: 150px;"> </div>   
                        <div class="product-column-name"> Shavers </div>
                        <div class="product-column-para"> Our Quliaty Products. </div>
                        <div class="product-column-button"> <button onclick="document.location='products_index.php'"> Buy Now </button> </div>                                        
                    </div>

                </div>    
            </div>

        </div>

        <!----- FOURTH SECTION - END ----->


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

