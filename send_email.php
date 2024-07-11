
<?php
/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Replace with your email address
    $to = 'arjunsurendran1234@gmail.com';
    $subject = 'New Contact Form Submission';
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message\n";

    // Sending email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Thank you for contacting us, $name. We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    echo "Invalid request.";
}
    */ 








    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $message = htmlspecialchars(trim($_POST['message']));
    
        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            exit;
        }
    
        // Set the recipient email address.
        $to = "arjunsurendran1234@gmail.com"; // Replace with your email address
    
        // Set the email subject.
        $subject = "New Contact Form Submission";
    
        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content = "Email: $email\n";
        $email_content = "Message:\n$message\n";
    
        // Build the email headers.
        $headers = "From: $name <$email>";
    
        // Send the email.
        if (mail($to, $subject, $email_content, $headers)) {
            echo "Thank you! Your message has been sent.";
        } else {
            echo "Oops! Something went wrong, and we couldn't send your message.";
        }
    } else {
        echo "There was a problem with your submission. Please try again.";
    }
    
    
?>
