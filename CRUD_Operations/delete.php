<?php
    include "config.php";

    if (isset($_GET['id'])) {
        $user_id = $_GET['id'];

        $sql = "DELETE FROM `users2` WHERE `id` = '$user_id'";

        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo "Record deleted succesfully.";
        }else {
            echo "Error:" . $sql . "<br />" . $conn->error;
        }
    }
 ?>
