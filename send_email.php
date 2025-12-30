<?php
// send_email.php — put this in main mantaflow folder
require_once 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer(true);

try {
    // YOUR GMAIL SETTINGS
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'yourgmail@gmail.com';           // ← CHANGE THIS
    $mail->Password   = 'abcd efgh ijkl mnop';           // ← CHANGE THIS (16-digit app password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom('yourgmail@gmail.com', 'MantaFlow');
    $mail->addAddress($_POST['email'], $_POST['name']);

    $mail->isHTML(true);
    $mail->Subject = 'Thank You for Registering!';
    $mail->Body    = "
    <div style='font-family:Arial,sans-serif;background:#f0f9ff;padding:40px;text-align:center;border-radius:20px;'>
      <h1 style='color:#015b8a;'>Welcome to MantaFlow!</h1>
      <h2>Hi <strong>{$_POST['name']}</strong>!</h2>
      <p>You are successfully registered for:</p>
      <h3 style='color:#015b8a;'>{$_POST['event_name']}</h3>
      <p style='font-size:18px;'>See you at the event!</p>
      <p><em>— MantaFlow Team</em></p>
    </div>";

    $mail->send();
    echo "success";
} catch (Exception $e) {
    echo "Email failed: " . $mail->ErrorInfo;
}
?>