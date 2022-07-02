<?php require 'config.php'; ?>

<?php

    if (isset($_GET['appoinment_id']))
    {
        // Getting the service information
        $appoinment_id = mysqli_real_escape_string($conn, $_GET['appoinment_id']);


        // Deleting the service
        $query = "DELETE FROM appoinment WHERE appoinment_id = {$appoinment_id}";

        $result = mysqli_query($conn, $query);

        if ($result)
        {
            header('Location: make_booking_my_booking.php');
        }
        else
        {
            echo 'Failed';
        }
    }
    else
    {
        header('Location: make_booking_my_booking.php');
    }


?>