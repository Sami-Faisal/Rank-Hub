<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values safely
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Your email where you want to receive form submissions
    $to = "ziddixhk191@gmail.com"; 

    // Subject
    $subject = "New message from $name via Rank Hub";

    // Message body
    $body = "You received a new message from your website contact form:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<h2 style='color:green;'>✅ Thank you $name, your message has been sent successfully!</h2>";
        echo "<a href='Contact'>⬅ Back to Contact Page</a>";
    } else {
        echo "<h2 style='color:red;'>❌ Sorry, your message could not be sent. Please try again later.</h2>";
    }
} else {
    echo "405 - Method Not Allowed";
}
?>
