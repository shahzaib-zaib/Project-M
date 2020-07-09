<?php

    $con = mysqli_connect("localhost", "root", "", "manuudb");
    if(isset($_POST['sendbtn'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO Contact(Name,Email,Message)
        VALUES ('{$name}', '{$email}', '{$message}')";

        $result = mysqli_query($con, $sql) or die ("Query Faild.");

        header("location:index.php?page=home");

    }

?>