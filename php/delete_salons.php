<?php require 'config.php'; ?>

<?php

    if (isset($_GET['salon_id']))
    {
        // Getting the salon information
        $salon_id = mysqli_real_escape_string($conn, $_GET['salon_id']);


        // Deleting the salon
        $query = "DELETE FROM salon WHERE salon_id = {$salon_id}";

        $result = mysqli_query($conn, $query);

        if ($result)
        {
            header('Location: manage_salons.php');
        }
        else
        {
            echo 'Failed';
        }
    }
    else
    {
        header('Location: manage_salons.php');
    }


?>