<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set your email address here
    $to = "jesus_p@me.com";
    // Get form field values, adjust field names as needed
    $name = isset($_POST['name']) ? strip_tags($_POST['name']) : '';
    $email = isset($_POST['email']) ? strip_tags($_POST['email']) : '';
    $message = isset($_POST['message']) ? strip_tags($_POST['message']) : '';
    // Email subject
    $subject = "New Form Submission";
    // Assemble the email body
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    // Email headers
    $headers = "From: $email\r\nReply-To: $email";
    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Mail Sent. Thank you!";
    } else {
        echo "Mail sending failed.";
    }
}
?>
