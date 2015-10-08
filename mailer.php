<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = trim($_POST['contact-name']);
        $reason = trim($_POST['contact-reason']);
        $body = trim($_POST['contact-body']);
        $email = filter_var(trim($_POST["contact-email"]), FILTER_SANITIZE_EMAIL);

        // making one message, PHP_EOL for spacing the text
        $message = $reason.PHP_EOL.PHP_EOL.$body;

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($body) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // FIXME: Update this to your desired email address.
        $recipient = "recipient@example.com";

        // Set the email subject.
        $subject = "Form submission";

        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Contact: $email\n";
        $email_content .= "\n$message\n";

        // Build the email headers.
        $email_headers = "From: ".$email;


        if (mail($recipient, $subject, $email_content, $email_headers)) {
            http_response_code(200);
            echo "Thank you, your message has been sent and we will contact you shortly.";
        } else {
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }
?>