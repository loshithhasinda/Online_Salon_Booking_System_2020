<?php require 'config.php'; ?>

<?php

    if (isset($_GET['service_id']))
    {
        // Getting the service information
        $service_id = mysqli_real_escape_string($conn, $_GET['service_id']);


        // Deleting the service
        $query = "DELETE FROM service WHERE service_id = {$service_id}";

        $result = mysqli_query($conn, $query);

        if ($result)
        {
            header('Location: manage_services.php');
        }
        else
        {
            echo 'Failed';
        }
    }
    else
    {
        header('Location: manage_services.php');
    }


?>