<?php require 'config.php'; ?>

<?php

    if (isset($_GET['feedback_id']))
    {
        // Getting the service information
        $feedback_id = mysqli_real_escape_string($conn, $_GET['feedback_id']);


        // Deleting the service
        $query = "DELETE FROM feedback WHERE feedback_id = {$feedback_id}";

        $result = mysqli_query($conn, $query);

        if ($result)
        {
            header('Location: manage_feedbacks.php');
        }
        else
        {
            echo 'Failed';
        }
    }
    else
    {
        header('Location: manage_feedbacks.php');
    }


?>