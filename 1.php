<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = htmlspecialchars($_POST['message']); // Sanitizing user input
    $to = "judewahedi@gmail.com"; // Replace with your email
    $subject = "Message from Aisha's Birthday Site";
    $body = "Message: $message";
    $headers = "From: judewahedi@gmail.com"; // Replace with your email

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
<div id="chat-messages">
    <?php
    // Read the messages from the file (or database)
    if (file_exists("messages.txt")) {
        $messages = file("messages.txt", FILE_IGNORE_NEW_LINES);
        foreach ($messages as $msg) {
            echo "<p>" . htmlspecialchars($msg) . "</p>";
        }
    }
    ?>
</div>