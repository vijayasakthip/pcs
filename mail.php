<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ensure PHPMailer is properly included via Composer or download

if (!empty($_POST["submit"])) {
    $name = strip_tags($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = strip_tags($_POST["phone"]);
    $message = strip_tags($_POST["message"]);

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true;
        $mail->Username = 'webdeveloper@micandmacsolutions.com'; // Your Gmail address
        $mail->Password = 'hftr nuxk nboj zitb'; // Your App password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        //Recipients
        $mail->setFrom($email, $name); // Sender's email and name
        $mail->addAddress('sales@phoneix.asia'); // Recipient's email

        //Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "<p><strong>Name:</strong> $name</p>
                       <p><strong>Email:</strong> $email</p>
                       <p><strong>Phone:</strong> $phone</p>
                       <p><strong>Message:</strong></p>
                       <p>$message</p>";
        $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message"; // Plain text version

        // Send email
        if ($mail->send()) {
            $message = "Your message was sent successfully.";
            // echo $message;
header("Location: index.php");
        } else {
            $message = "Failed to send the message. Please try again.";
            echo $message;

        }
    } catch (Exception $e) {
        $message = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        echo $message;

    }
}
?>
