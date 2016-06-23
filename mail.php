<?php    
header('Content-type: application/json');
require 'PHPMailerAutoload.php';
 
extract("$_POST");
$nam = $_POST['name'];
$em  = $_POST['mail'];
$ms = $_POST['meseg'];

$mail = new PHPMailer;
 
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'sail.internships@gmail.com';                   // SMTP username
$mail->Password = 'asp.netwebpage';               // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
$mail->setFrom('sail.internships@gmail.com', 'Pratik Shekhar');     //Set who the message is to be sent fr  
$mail->addAddress('himanshusingh2407@gmail.com');               // Name is optional

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->isHTML(true);                                  // Set email format to HTML
 
$mail->Subject = $nam.' D_Code Vision'.trim();
$mail->Body    = "Hi!</b>My name is $nam. <br/>My email ID is : $em<br/><br> My message : $ms";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
 
echo 'Message has been sent';
?>
