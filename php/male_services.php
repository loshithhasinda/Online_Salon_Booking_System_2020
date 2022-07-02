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
		<title> Male Services - SalonBooking.lk </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../styles/male_services.css">
		<link rel="stylesheet" href="https://unpkg.com/flickity@2.0.11/dist/flickity.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Commissioner&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
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
                    <p> Male Services </p>
                </div>
                <!-- Page Title - End -->
			</div>
		</div>

		<!----- HEADER - END ----->
		<!--BODY PART START-->
		<div class="carousel-wrapper">
			<div class="carousel" data-flickity>
				<div class="box">
					<!--img-box---------->
					<div class="slide-img">
					<img alt="1" src="https://i.ibb.co/mS3dK7k/pp.jpg">
					<!--overlayer---------->
					<div class="overlay">
					<!--buy-btn------>	
					<a href="#" class="buy-btn">Add Style</a>	
					</div>
					</div>
					<!--detail-box--------->
					<div class="detail-box">
					<!--type-------->
					<div class="type">
					<a href="#">Hair Cutting</a>
					<span></span>
					</div>
					<!--price-------->
					<div class="price"><p>Rs.500</p></div>
				</div>
			</div>		
				
			
				<div class="box">
					<!--img-box---------->
					<div class="slide-img">
					<img alt="2" src="https://i.ibb.co/zFv9QHz/p15.jpg">
					<!--overlayer---------->
					<div class="overlay">
					<!--buy-btn------>	
					<a href="#" class="buy-btn">Add Style</a>	
					</div>
					</div>
					<!--detail-box--------->
					<div class="detail-box">
					<!--type-------->
					<div class="type">
					<a href="#">Hair Dresing</a>
					<span></span>
					</div>
					<!--price-------->
					<a href="#" class="price">Rs.600</a>
				</div>
			</div>		
			
				<div class="box">
					<!--img-box---------->
					<div class="slide-img">
					<img alt="3" src="https://i.ibb.co/3SbsqG2/p100.jpg">
					<!--overlayer---------->
					<div class="overlay">
					<!--buy-btn------>	
					<a href="#" class="buy-btn">Add Style</a>	
					</div>
					</div>
					<!--detail-box--------->
					<div class="detail-box">
					<!--type-------->
					<div class="type">
					<a href="#">Hair Cutting</a>
					<span></span>
					</div>
					<!--price-------->
					<a href="#" class="price">Rs.500</a>
				</div>
			</div>		
			
				<div class="box">
					<!--img-box---------->
					<div class="slide-img">
					<img alt="4" src="https://i.ibb.co/VMxZNKg/p14.jpg">
					<!--overlayer---------->
					<div class="overlay">
					<!--buy-btn------>	
					<a href="#" class="buy-btn">Add Style</a>	
					</div>
					</div>
					<!--detail-box--------->
					<div class="detail-box">
					<!--type-------->
					<div class="type">
					<a href="#">Hair Coloring</a>
					<span>Noe Arrival</span>
					</div>
					<!--price-------->
					<a href="#" class="price">Rs.400</a>
				</div>
			</div>		
			
				<div class="box">
					<!--img-box---------->
					<div class="slide-img">
					<img alt="5" src="https://i.ibb.co/sJqXFT3/p12.jpg">
					<!--overlayer---------->
					<div class="overlay">
					<!--buy-btn------>	
					<a href="#" class="buy-btn">Add Style</a>	
					</div>
					</div>
					<!--detail-box--------->
					<div class="detail-box">
					<!--type-------->
					<div class="type">
					<a href="#">Massage</a>
					<span></span>
					</div>
					<!--price-------->
					<a href="#" class="price">Rs.350</a>
				</div>
			</div>		
			
				<div class="box">
					<!--img-box---------->
					<div class="slide-img">
					<img alt="6" src="https://i.ibb.co/dQ76bX9/p10.jpg">
					<!--overlayer---------->
					<div class="overlay">
					<!--buy-btn------>	
					<a href="#" class="buy-btn">Add Style</a>	
					</div>
					</div>
					<!--detail-box--------->
					<div class="detail-box">
					<!--type-------->
					<div class="type">
					<a href="#">Tattos</a>
					<span></span>
					</div>
					<!--price-------->
					<a href="#" class="price">Rs.250</a>
				</div>
			</div>		
			
				<div class="box">
					<!--img-box---------->
					<div class="slide-img">
					<img alt="7" src="https://i.ibb.co/TvBbLqZ/p7.jpg">
					<!--overlayer---------->
					<div class="overlay">
					<!--buy-btn------>	
					<a href="#" class="buy-btn">Add Style</a>	
					</div>
					</div>
					<!--detail-box--------->
					<div class="detail-box">
					<!--type-------->
					<div class="type">
					<a href="#">Hair Coloring</a>
					<span></span>
					</div>
					<!--price-------->
					<a href="#" class="price">Rs.800</a>
				</div>
			</div>		
			
				<div class="box">
					<!--img-box---------->
					<div class="slide-img">
					<img alt="8" src="https://i.ibb.co/znz5hcb/p6.jpg">
					<!--overlayer---------->
					<div class="overlay">
					<!--buy-btn------>	
					<a href="#" class="buy-btn">Add Style</a>	
					</div>
					</div>
					<!--detail-box--------->
					<div class="detail-box">
					<!--type-------->
					<div class="type">
					<a href="#">Hair Dresing</a>
					<span></span>
					</div>
					<!--price-------->
					<a href="#" class="price">Rs.1000</a>
				</div>
			</div>
				<div class="button-a">
					<a href="form.html" class="btn"><b>Add Style Cover +</b></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--BODY PART END-->
<!--script-link----------->
<script type="text/javascript" src="js/script.js"></script>
<script>
	var responsiveslider = function(){
    var slider = document.getElementById("slider");
    var sliderWidth = slider.offsetWidthM;
    var slideList = document.getElementById("sliderWrap");
    var count = 1;
    var items = slideList.querySelectorAll("li").length;
    var prev = document.getElementById("prev");
    var next = document.getElementById
	}
</script>
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
<script src="https://unpkg.com/flickity@2.0.11/dist/flickity.pkgd.min.js"></script>
</body>
</html>

