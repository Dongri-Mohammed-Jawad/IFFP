<?php
 echo "Mailer Error: " . $mail->ErrorInfo;
require_once "PHPMailer-FE_v4.11/_lib/class.phpmailer.php";
echo "Mailer Error: " . $mail->ErrorInfo;
$mail = new PHPMailer;

//Enable SMTP debugging. 
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "jlee@crammaze.com";                 
$mail->Password = "Thelegend123";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "info@crammaze.com";
$mail->FromName = "Full Name";

$mail->addAddress("jawadlee92@gmail.com", "Recepient Name");
$To="jawadlee92@gmail.com";
$Message="hello";
$MailSubject=" hqqllkkl ";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$headers .= "From: info@crammaze.com" . "\r\n" .
                   "CC: info@crammaze.com"."\r\n". "Reply-To: $Email";

$mail = mail($To, $MailSubject, $Message, $headers);
echo "Mailer into called: " . $mail->ErrorInfo;
if($mail) 
{
	  echo "Message has been sent successfully";
	
} 
else 
{
  echo "Mailer Error: " . $mail->ErrorInfo;
    echo "Mailer Error: " . $mail->ErrorInfo;
}

/*

//PHPMailer Object
$mail = new PHPMailer;

//From email address and name
$mail->From = "info@crammaze.com";
$mail->FromName = "Full Name";

//To address and name
$mail->addAddress("jlee@crammaze.com", "Recepient Name");
//$mail->addAddress("jlee@crammaze.com"); //Recipient name is optional

//Address to which recipient will reply
$mail->addReplyTo("jlee@crammaze", "Reply");

//CC and BCC
$mail->addCC("info@crammaze.com");
$mail->addBCC("info@crammaze.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "PHPMailer";
$mail->Body = "<i>PHPMailer Training Excercise.</i>";
$mail->AltBody = "This is a training Excercise about the mailing function to all domains.";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}
*/
?>