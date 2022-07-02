<?php require 'config.php'; ?>

<?php

    $item_id = array();
    $item_category = array();
    $item_name = array();
    $item_price = array();

    // Getting the user information
    $query = "SELECT * FROM product WHERE item_category = 'Beauty Tools' ";
        
    $category01_result = mysqli_query($conn, $query);
        
    if ($category01_result)
    {
        if (mysqli_num_rows($category01_result) > 0) 
        {
            // output data of each row
            while($row = mysqli_fetch_assoc($category01_result)) 
            {
                $item_id[]  = $row["item_id"];
                $item_category[] = $row["item_category"];
                $item_name[] = $row["item_name"]; 
                $item_price[] = $row["item_price"];                   
            }
        } 
        else 
        {
            echo "0 results";
        }
    }
    else
    {
        // Query unsuccessful                
    }

    if (isset($_POST['category01']))
    {           
        $item_id = array();
        $item_category = array();
        $item_name = array();
        $item_price = array();

        // Getting the user information
        $query = "SELECT * FROM product WHERE item_category = 'Beauty Tools' ";
            
        $category01_result = mysqli_query($conn, $query);
            
        if ($category01_result)
        {
            if (mysqli_num_rows($category01_result) > 0) 
            {
                // output data of each row
                while($row = mysqli_fetch_assoc($category01_result)) 
                {
                    $item_id[]  = $row["item_id"];
                    $item_category[] = $row["item_category"];
                    $item_name[] = $row["item_name"]; 
                    $item_price[] = $row["item_price"];                   
                }
            } 
            else 
            {
                echo "0 results";
            }
        }
        else
        {
            // Query unsuccessful                
        }

    }
    else if (isset($_POST['category02']))
    {
        $item_id = array();
        $item_category = array();
        $item_name = array();
        $item_price = array();
        
        // Getting the user information
        $query = "SELECT * FROM product WHERE item_category = 'Hair Cares' ";
            
        $category02_result = mysqli_query($conn, $query);
            
        if ($category02_result)
        {
            if (mysqli_num_rows($category02_result) > 0) 
            {
                // output data of each row
                while($row = mysqli_fetch_assoc($category02_result)) 
                {
                    $item_id[]  = $row["item_id"];
                    $item_category[] = $row["item_category"];
                    $item_name[] = $row["item_name"]; 
                    $item_price[] = $row["item_price"];                   
                }
            } 
            else 
            {
                echo "0 results";
            }
        }
        else
        {
            // Query unsuccessful                
        }        

    }
    else if (isset($_POST['category03']))
    {
        $item_id = array();
        $item_category = array();
        $item_name = array();
        $item_price = array();
        
        // Getting the user information
        $query = "SELECT * FROM product WHERE item_category = 'Makeups' ";
            
        $category03_result = mysqli_query($conn, $query);
            
        if ($category03_result)
        {
            if (mysqli_num_rows($category03_result) > 0) 
            {
                // output data of each row
                while($row = mysqli_fetch_assoc($category03_result)) 
                {
                    $item_id[]  = $row["item_id"];
                    $item_category[] = $row["item_category"];
                    $item_name[] = $row["item_name"]; 
                    $item_price[] = $row["item_price"];                   
                }
            } 
            else 
            {
                echo "0 results";
            }
        }
        else
        {
            // Query unsuccessful                
        }        

    }
    else if (isset($_POST['category04']))
    {
        $item_id = array();
        $item_category = array();
        $item_name = array();
        $item_price = array();
        
        // Getting the user information
        $query = "SELECT * FROM product WHERE item_category = 'Men''s Cares' ";
            
        $category04_result = mysqli_query($conn, $query);
            
        if ($category04_result)
        {
            if (mysqli_num_rows($category04_result) > 0) 
            {
                // output data of each row
                while($row = mysqli_fetch_assoc($category04_result)) 
                {
                    $item_id[]  = $row["item_id"];
                    $item_category[] = $row["item_category"];
                    $item_name[] = $row["item_name"]; 
                    $item_price[] = $row["item_price"];                   
                }
            } 
            else 
            {
                echo "0 results";
            }
        }
        else
        {
            // Query unsuccessful                
        }        

    }
    else if (isset($_POST['category05']))
    {
        $item_id = array();
        $item_category = array();
        $item_name = array();
        $item_price = array();
        
        // Getting the user information
        $query = "SELECT * FROM product WHERE item_category = 'Skin Cares' ";
            
        $category05_result = mysqli_query($conn, $query);
            
        if ($category05_result)
        {
            if (mysqli_num_rows($category05_result) > 0) 
            {
                // output data of each row
                while($row = mysqli_fetch_assoc($category05_result)) 
                {
                    $item_id[]  = $row["item_id"];
                    $item_category[] = $row["item_category"];
                    $item_name[] = $row["item_name"]; 
                    $item_price[] = $row["item_price"];                   
                }
            } 
            else 
            {
                echo "0 results";
            }
        }
        else
        {
            // Query unsuccessful                
        }        

    }
?>



<!DOCTYPE html>
<html>
    <head>

        <title> Products - SalonBooking.lk </title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../styles/products.css">
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
                    <p> Products </p>
                </div>
                <!-- Page Title - End -->

            </div>

        </div>

        <!----- HEADER - END ----->

        <div class="section01-topic"> <p> Our Shop </p></div>

        <div class="section01-div" style="margin: 0 auto; max-width: 1300px;"> 
   
            <div class="category-row">
        
                <div class="category-column" style="margin: 0px 10px 20px 22px;">
                    <div class="category-column-img"> <img src="../images/product01.png" alt="" style="width: 100px; height: 100px; border-radius: 50%;"> </div> 
                    <div class="category-column-name"> Beauty Toools </div>
                    <div class="category-column-button"> <form action="products.php" method="post"> <button name="category01" id="button1" onclick="selectCategories('button1')"> View Products </button> </form> </div>                
                </div>

                <div class="category-column" style="margin: 0px 10px 20px 10px;">   
                    <div class="category-column-img"> <img src="../images/product02.png" alt="" style="width: 100px; height: 100px;"> </div>   
                    <div class="category-column-name"> Hair Cares </div>
                    <div class="category-column-button"> <form action="products.php" method="post"> <button name="category02" id="button2" onclick="selectCategories('button2')"> View Products </button> </form> </div>
                </div>

                <div class="category-column" style="margin: 0px 10px 20px 10px;">  
                    <div class="category-column-img"> <img src="../images/product03.png" alt="" style="width: 100px; height: 100px;"> </div>   
                    <div class="category-column-name"> Makeups </div>
                    <div class="category-column-button"> <form action="products.php" method="post"> <button name="category03" id="button3" onclick="selectCategories('button3')"> View Products </button> </form> </div>
                </div>

                <div class="category-column" style="margin: 0px 10px 20px 10px;"> 
                    <div class="category-column-img"> <img src="../images/product04.png" alt="" style="width: 100px; height: 100px;"> </div>   
                    <div class="category-column-name"> Men's Cares </div>
                    <div class="category-column-button"> <form action="products.php" method="post"> <button name="category04" id="button4" onclick="selectCategories('button4')"> View Products </button> </form> </div>                                        
                </div>

                <div class="category-column" style="margin: 0px 10px 20px 10px;"> 
                    <div class="category-column-img"> <img src="../images/product01.png" alt="" style="width: 100px; height: 100px;"> </div>   
                    <div class="category-column-name"> Skin Cares </div>
                    <div class="category-column-button"> <form action="products.php" method="post"> <button name="category05" id="button5" onclick="selectCategories('button5')"> View Products </button> </form> </div>                                        
                </div>

            </div>    
        </div>

        <hr>

        <div class="section02" style="height: 700px; background-color: #f3eded;">

            <div class="section02-note" style="margin: 0;">
                <p class="section02-note-topic"> BEAUTY TOOLS </p>
            </div>

            <div class="section02-div" style="margin: 0 auto; max-width: 1300px;"> 
           
                <div class="product-row">

                <form action="products.php" method="post">
                    <div class="product-column" style="margin: 50px 10px 80px 22px;">
                        <div class="product-column-img"> <img id="item01-img" src="../images/items/hair_dryer.jpg" alt="" style="width: 150px; height: 150px;"> </div> 
                        <div class="product-column-name"> <?php echo $item_name[0] ?> </div>
                        <div class="product-column-para"> <p> <?php echo $item_price[0] ?> </p> </div>
                        <div class="product-column-button"> <button name="category01"> Buy Now </button> </div>                        
                    </div>
                </form>

                    <div class="product-column" style="margin: 50px 10px 80px 10px;">   
                        <div class="product-column-img"> <img id="item02-img" src="../images/items/flat_iron.jpg" alt="" style="width: 150px; height: 150px;"> </div>   
                        <div class="product-column-name"> <?php echo $item_name[1] ?> </div>
                        <div class="product-column-para"> <p> <?php echo $item_price[1] ?> </p> </div>
                        <div class="product-column-button"> <button> Buy Now </button> </div>
                    </div>

                    <div class="product-column" style="margin: 50px 10px 80px 10px;">  
                        <div class="product-column-img"> <img id="item03-img" src="../images/items/curling_iron.png" alt="" style="width: 150px; height: 150px;"> </div>   
                        <div class="product-column-name"> <?php echo $item_name[2] ?> </div>
                        <div class="product-column-para"> <p> <?php echo $item_price[2] ?> </p> </div>
                        <div class="product-column-button"> <button> Buy Now </button> </div>
                    </div>

                    <div class="product-column" style="margin: 50px 10px 80px 10px;"> 
                        <div class="product-column-img"> <img id="item04-img" src="../images/items/comb.jpg" alt="" style="width: 150px; height: 150px;"> </div>   
                        <div class="product-column-name"> <?php echo $item_name[3] ?> </div>
                        <div class="product-column-para"> <p> <?php echo $item_price[3] ?> </p> </div>
                        <div class="product-column-button"> <button> Buy Now </button> </div>                                        
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

        <script>

            function selectCategories(data)
            {
            if(data == "button1")
            {
                document.getElementById("item01-img").src = "../images/items/hair_dryer.jpg";
                document.getElementById("item02-img").src = "../images/items/flat_iron.jpg";
                document.getElementById("item03-img").src = "../images/items/curling_iron.png";
                document.getElementById("item04-img").src = "../images/items/comb.jpg";
            }

            else if(data == "button2")
            {
                document.getElementById("item01-img").src = "../images/items/shampoo.jpg";
                document.getElementById("item02-img").src = "../images/items/hair_treatment.jpg";
                document.getElementById("item03-img").src = "../images/items/hair_coloring.jpg";
                document.getElementById("item04-img").src = "../images/items/hair_conditioners.jpg";
            }

            else if(data == "button3")
            {
                document.getElementById("item01-img").src = "../images/items/makeup_accessories.jpg";
                document.getElementById("item02-img").src = "../images/items/nail_polish.png";
                document.getElementById("item03-img").src = "../images/items/lipstick.jpg";
                document.getElementById("item04-img").src = "../images/items/eyeliner.jpg";
            }

            else if(data == "button4")
            {
                document.getElementById("item01-img").src = "../images/items/hair_dryer2.png";
                document.getElementById("item02-img").src = "../images/items/aftershave.jpg";
                document.getElementById("item03-img").src = "../images/items/creams.jpg";
                document.getElementById("item04-img").src = "../images/items/shaver.jpg";
            }

            else if(data == "button5")
            {
                document.getElementById("item01-img").src = "../images/items/moisturizer.png";
                document.getElementById("item02-img").src = "../images/items/eyecare.jpg";
                document.getElementById("item03-img").src = "../images/items/facial_cleanser.jpg";
                document.getElementById("item04-img").src = "../images/items/night_cream.jpeg";
            }

            else
                alert("Error!");
            }
    
        </script>
        
    </body>
</html>
