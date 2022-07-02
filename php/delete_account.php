<?php session_start(); ?>
<?php require 'config.php'; ?>

<?php

        // Getting the service information
        $user_id = mysqli_real_escape_string($conn, $_SESSION['customer_id']);


        // Deleting the service
        $query = "DELETE FROM customer WHERE user_id = {$user_id}";

        $result = mysqli_query($conn, $query);

        if ($result)
        {
            header('Location: index.php');
        }
        else
        {
            echo 'Failed';
        }

?>