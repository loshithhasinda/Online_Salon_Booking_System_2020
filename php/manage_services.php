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

    // Get All Services Table
    $service_list = '';

    $query = "SELECT * FROM service ";
    $services = mysqli_query($conn, $query);

    if ($services)
    {
        while ($service = mysqli_fetch_assoc($services))
        {
            $service_list .= "<tr>";
            $service_list .= "<td> {$service['service_id']} </td>";
            $service_list .= "<td> {$service['service_category']} </td>";
            $service_list .= "<td> {$service['service_name']} </td>";
            $service_list .= "<td> {$service['service_price']} </td>";
            $service_list .= "<td> {$service['service_note']} </td>";
            $service_list .= "<td> <a href=\"update_services.php?service_id={$service['service_id']}\"> Update </a></td>";
            $service_list .= "<td> <a href=\"delete_services.php?service_id={$service['service_id']}\" onclick=\"return confirm('Do you want delete this service?');\"> Delete </a></td>";
            $service_list .= "</tr>";
        }
    }
    else
    {
        echo "Database query failed";
    } 

    // Get Male Services Table
    if (isset($_POST['category01'])) 
    {
        $service_list = '';

        $query = "SELECT * FROM service WHERE service_category = 'Male'";
        $services = mysqli_query($conn, $query);

        if ($services)
        {
            while ($service = mysqli_fetch_assoc($services))
            {
                $service_list .= "<tr>";
                $service_list .= "<td> {$service['service_id']} </td>";
                $service_list .= "<td> {$service['service_category']} </td>";
                $service_list .= "<td> {$service['service_name']} </td>";
                $service_list .= "<td> {$service['service_price']} </td>";
                $service_list .= "<td> {$service['service_note']} </td>";
                $service_list .= "<td> <a href=\"update_services.php?service_id={$service['service_id']}\"> Update </a></td>";
                $service_list .= "<td> <a href=\"delete_services.php?service_id={$service['service_id']}\" onclick=\"return confirm('Do you want delete this service?');\"> Delete </a></td>";
                $service_list .= "</tr>";
            }
        }
        else
        {
            echo "Database query failed";
        } 
    }
    // Get Female Services Table
    else if (isset($_POST['female'])) 
    {
        $service_list = '';

        $query = "SELECT * FROM service WHERE service_category = 'Female'";
        $services = mysqli_query($conn, $query);

        if ($services)
        {
            while ($service = mysqli_fetch_assoc($services))
            {
                $service_list .= "<tr>";
                $service_list .= "<td> {$service['service_id']} </td>";
                $service_list .= "<td> {$service['service_category']} </td>";
                $service_list .= "<td> {$service['service_name']} </td>";
                $service_list .= "<td> {$service['service_price']} </td>";
                $service_list .= "<td> {$service['service_note']} </td>";
                $service_list .= "<td> <a href=\"update_services.php?service_id={$service['service_id']}\"> Update </a></td>";
                $service_list .= "<td> <a href=\"delete_services.php?service_id={$service['service_id']}\" onclick=\"return confirm('Do you want delete this service?');\"> Delete </a></td>";
                $service_list .= "</tr>";
            }
        }
        else
        {
            echo "Database query failed";
        } 
    }
    // Get All Services Table
    else if (isset($_POST['all_services'])) 
    {
        $service_list = '';

        $query = "SELECT * FROM service ";
        $services = mysqli_query($conn, $query);
    
        if ($services)
        {
            while ($service = mysqli_fetch_assoc($services))
            {
                $service_list .= "<tr>";
                $service_list .= "<td> {$service['service_id']} </td>";
                $service_list .= "<td> {$service['service_category']} </td>";
                $service_list .= "<td> {$service['service_name']} </td>";
                $service_list .= "<td> {$service['service_price']} </td>";
                $service_list .= "<td> {$service['service_note']} </td>";
                $service_list .= "<td> <a href=\"update_services.php?service_id={$service['service_id']}\"> Update </a></td>";
                $service_list .= "<td> <a href=\"delete_services.php?service_id={$service['service_id']}\" onclick=\"return confirm('Do you want delete this service?');\"> Delete </a></td>";
                $service_list .= "</tr>";
            }
        }
        else
        {
            echo "Database query failed";
        } 
    }
    
?>

<!DOCTYPE html>
<html>
    <head>

        <title> Manage Services - SalonBooking.lk </title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../styles/manage_products.css">
        <link href="https://fonts.googleapis.com/css2?family=Commissioner&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

        <script type="text/javascript" src="../js/index.js"></script>

        <style>
            table {
            border-collapse: collapse;
            width: 80%;
            margin: 10px;
            }

            th, td {
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even){background-color: #f2f2f2}

            th {
            background-color: #4CAF50;
            color: white;
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
            margin: 4px 2px 20px 2px;
            cursor: pointer;
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
                        <button onclick="document.location='logout.php'" style="margin-left: 40px;"> <?php echo $signin_button; ?></button>
                    </div>
                </div>
                <!-- Top Navigation Bar - End -->

                <!-- Horizontal Line - Start -->
                <hr style="width: 100%; border-color: #775a3a;">
                <br>
                <!-- Horizontal Line - End -->

                <!-- Page Title - Start -->
                <div class="page-title">
                    <p> Manage Services </p>
                </div>
                <!-- Page Title - End -->

            </div>

        </div>

        <!----- HEADER - END ----->

        <div class="section01" style="height: 1200px; background-color: #f3eded;">

            <div class="section01-div" style="margin: 0 auto; max-width: 1500px; text-align: center;">

                <p style="font-size: 30px;font-weight: bold; color: #1d2434;"> Our Services </p> <br><br>

                <form action="manage_services.php" method="post">

                    <button name="all_services"> All services </button>
                    <button name="category01"> Male </button>
                    <button name="female"> Female </button>
                    <button type="button" onclick="document.location='add_services.php'" style="background-color: #DC143C;"> Add Service </button>
                    <button type="button" onclick="document.location='manage_system.php'" style="background-color: #1E90FF;"> Back </button>

                </form>

                <table border="1" style="  margin-left: auto; margin-right: auto;">
                <tr>
                    <th> Service ID </th>
                    <th> Service Category </th>
                    <th> Service Name </th>
                    <th> Service Price </th>
                    <th> Service Note </th>
                    <th> Update </th>
                    <th> Delete </th>
                </tr>

                <?php echo $service_list; ?>

                </table>
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

