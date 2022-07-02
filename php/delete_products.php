<?php require 'config.php'; ?>

<?php

    if (isset($_GET['item_id']))
    {
        // Getting the product information
        $item_id = mysqli_real_escape_string($conn, $_GET['item_id']);


        // Deleting the product
        $query = "DELETE FROM product WHERE item_id = {$item_id}";

        $result = mysqli_query($conn, $query);

        if ($result)
        {
            header('Location: manage_products.php');
        }
        else
        {
            echo 'Failed';
        }
    }
    else
    {
        header('Location: manage_products.php');
    }


?>