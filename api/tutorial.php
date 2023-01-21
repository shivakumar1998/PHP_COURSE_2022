<?php

    $con = mysqli_connect("localhost", "root", "", "dbapi");
    $response = array();
    if($con) {
        $sql = "select * from users";
        $result = mysqli_query($con, $sql);

        if($result) {
            $value = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $response[$value]['id'] = $row['id'];
                $response[$value]['name'] = $row['name'];
                $response[$value]['age'] = $row['age'];
                $response[$value]['email'] = $row['email'];
                $value++;
            }
            echo json_encode($response, JSON_PRETTY_PRINT);
        }
    }
    else {
        echo "Database connection failed";
    }


 ?>
