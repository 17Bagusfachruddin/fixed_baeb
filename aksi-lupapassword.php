<?php 

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'koneksi.php';


if (isset($_POST["email"])) {
   
    $emailto = $_POST["email"];

    $code = uniqid(true);
    $query = mysqli_query($koneksi, "INSERT INTO resetpassword(code, email) VALUES ('$code', '$emailto')");
    if(!$query) {
        exit("error");
    }

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'ssl://smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'akbarimawan18@gmail.com';                     // SMTP username
            $mail->Password   = 'akbar123456';                               // SMTP password
            
            $mail->Port       = 465;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('akbarimawan18@gmail.com', 'gmail');
            $mail->addAddress($emailto);     // Add a recipient
            $mail->addReplyTo('no-reply@gmail.com', 'no-reply');
            
           

            // Content
            $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/password.php?code=$code";
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Reset Password Anda';
            $mail->Body    = "<h1>Request Password Reset</h1>
                                Klik <a href='$url'>Disini</a> untuk reset password anda";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo '<script>alert("Reset Password telah dikirim ke email anda")</script>';
            echo "<script>location='login.php';</script>";
            
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        exit;
}
?>