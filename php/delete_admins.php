<?php require 'config.php'; ?>

<?php

    if (isset($_GET['user_id']))
    {
        // Getting the service information
        $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);


        // Deleting the service
        $query = "DELETE FROM admin WHERE user_id = {$user_id}";

        $result = mysqli_query($conn, $query);

        if ($result)
        {
            header('Location: manage_admin_accounts.php');
        }
        else
        {
            echo 'Failed';
        }
    }
    else
    {
        header('Location: manage_admin_accounts.php');
    }


?>