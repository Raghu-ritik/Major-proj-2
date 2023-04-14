

<?php
require 'vendor/PHPMailer/PHPMailerAutoload.php';

if (isset($_POST['send'])) {
   $toEmails = "ritik.raghuwanshi@mindruby.com";//  $_POST['email1'];
   $subject = "Verify your Account";  //$_POST['title1'];
   $urlToSend =  "cafeteen.tech/cafeteen";// $_POST['url'];
   $des = "This is an description "; //$_POST['description'];

   $message = "<p>Your Cafeteen account has been created successfully!  </p> <br> Thanks <br> Team cafeteen ";

   $mail = new PHPMailer;

   $mail->SMTPDebug = 3; // Enable verbose debug output


   $mail->isSMTP(); // Set mailer to use SMTP
   $mail->Host = 'smtp.cafeteen.tech'; // Specify main and backup SMTP servers
   $mail->SMTPAuth = true; // Enable SMTP authentication
   $mail->Username = 'support@cafeteen.tech'; // SMTP username
   $mail->Password = 'XTOHxBnG^0'; // SMTP password
   $mail->SMTPSecure = 'TLS'; // Enable TLS encryption, `ssl` also accepted
   $mail->Port = '587'; // TCP port to connect to

   $mail->setFrom('support@cafeteen.tech', 'Cafeteen Account Validate');
   //$mail->addAddress('ellen@example.com'); // Name is optional
   $mail->addReplyTo('support@cafeteen.tech', 'Support Cafeteen');
 
   $mail->isHTML(true); // Set email format to HTML

   $mail->Subject = $subject;
   $mail->Body = $message;
   $mail->AltBody = 'This is an verification Mail!';
    $mail->addAddress($toEmails); // Add a recipient

   if (!$mail->send()) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
   } else {
      echo 'Mail has been sent';
   }
}

?>