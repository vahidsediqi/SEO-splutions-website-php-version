<?php 

use PHPMailer\phpMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
   $name = $_POST ['name'];
   $email = $_POST ['email'];
   $subject = "Email from SEO SOlutions"
   $phone = $_POST ['phone'];
   $body = $_POST ['body'];
   
   require_once "PHPMailer/PHPMailer.php";
   require_once "PHPMailer/SMTP.php";
   require_once "PHPMailer/Exception.php";
   
   $mail = new PHPMailer();
   
//   SMTP Setting

$mail->isSMPT();
$mail->host = "https://104-168-183-106.cprapid.com:2080 ";
$mail->SMTPAuth = true;
$mail->isSMPT();
$mail->isSMPT();
}
  
?>