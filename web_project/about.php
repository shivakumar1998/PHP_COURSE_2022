<?php
    $con = mysqli_connect("localhost","root","","my_webproject");
    if ($con) {
        echo "connection successful";
    }
    else {
        echo "connection failed";
    }
    // another approach of dn_name usage
    // mysqli_select_db($con, 'db_name');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    $sql = "INSERT into `users` (name, email, number) values ('$name', '$email', '$number')";

    mysqli_query($con, $sql);
    header('location:index.php#contact');

 ?>
