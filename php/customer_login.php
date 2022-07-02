<?php session_start(); ?>
<?php require 'config.php'; ?>

<?php
        // Check for form submission
        if (isset($_POST['customer_login']))
        {
            $errors = array();
    
            // Check if the username and password has been entered
            if (!isset($_POST['customer_name']))
            {
                $errors[] = 'Username is Missing / Invalid';
            }
            if (!isset($_POST['customer_password']))
            {
                $errors[] = 'Password is Missing / Invalid';
            }
    
            // Check if there are any errors in the form
            if (empty($errors))
            {
                // Save username and password into variables
                $customer_name = $_POST['customer_name'];
                $customer_password =$_POST['customer_password'];
    
                // Prepare database query
                $query = "SELECT * FROM customer WHERE 	user_name = '{$customer_name}' AND password = '{$customer_password}' LIMIT 1";
                
                $result_set = mysqli_query($conn, $query);
    
                if ($result_set)
                {
                    // Query succesful
                    if (mysqli_num_rows($result_set) == 1)
                    {
                        // Valid user found
                        $user = mysqli_fetch_assoc($result_set);
                        $_SESSION['customer_id'] = $user['user_id'];
                        $_SESSION['customer_user_name'] = $user['user_name'];
                        $_SESSION['customer_user_type'] = $user['user_type'];
    
                        // Redirect to users.php
                        header('Location: home.php');
                    }
                    else
                    {
                        // User name and password invalid
                        $errors[] = 'Invalid User Name / Password';
                    }
                }
                else
                {
                    $errors[] = 'Database query failed';
                }
            
            }
    
        }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> User Login - SaloonBooking.lk </title>

    <link rel="stylesheet" href="../styles/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Commissioner&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">


    <style>
            body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: url(../images/adam-winger-AyesubMzQ64-unsplash.jpg);
    }

    /* Full-width input fields */
    input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    }

    .center-button {
        text-align: center;
    }

    /* Set a style for all buttons */
    .button-login {
    background-color: #d19f68;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 60%;
    }

    .button-login:hover {
    opacity: 0.8;
    }

    .button-admin {
    background: none;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: 1px solid #4CAF50;
    cursor: pointer;
    width: 50%;
    }

    .button-admin:hover {
        color: white;
        background-color: #4CAF50;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
    width: auto;
    padding: 10px 18px;
    border: none;
    cursor: pointer;
    background-color: #f44336;
    }

    /* Center the image and position the close button */
    .logocontainer {
    text-align: center;
    margin: 30px 0 40px 0;
    position: relative;
    }

    .logocontainer p {
        padding: 30px 20px 10px 20px;
        text-align: center;
        font-family: 'Berkshire Swash', cursive;
        font-size: 40px;
        color: #1d2434;
    }

    .container {
    padding: 16px;
    }

    /* The Close Button (x) */
    .close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
    }

    .close:hover,
    .close:focus {
    color: red;
    cursor: pointer;
    }

    </style>

</head>
<body>
    
    <div class="section01">

        <div class="section01-div" style="margin: 0 auto; max-width: 600px; text-align: center; position: relative; top: 40px;">

            

            <form action="customer_login.php" method="post">

                <div class="container-div" style="background-color:#ffffff">
                    <div class="logocontainer">
                        <p> SaloonBooking.LK </p>
                    </div>

                    <p style="font-size: 20px"> Customer Login </p>
    
                    <div class="container">
                        <label for="customer_name"><b> Username </b></label>
                        <input type="text" placeholder="Enter Username" name="customer_name" required>
    
                        <label for="customer_password"><b> Password </b></label>
                        <input type="password" placeholder="Enter Password" name="customer_password" required>
                            
                        <label> <input type="checkbox" checked="checked" name="remember"> Remember me </label>
                        <div class="center-button"> <button class="button-login" type="submit" name="customer_login"> Login </button> </div>           

                        <div class="center-button"> <a href="admin_login.php"> <button type="button" class="button-admin"> Admin Login </button> </a> </div>

                        <?php
                            if (isset($errors))
                            {
                                echo '<p class="error" style="color: red;"> Invalid User Name or Password </p>';
                            }
                        ?>
                        
                    </div>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    
                    <button type="button" class="cancelbtn" onclick="document.location='index.php'">Cancel</button>
                </div>
            </form>
            

        </div>

    </div>

</body>
</html>