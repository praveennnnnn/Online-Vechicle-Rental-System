<?php

$url='localhost';
$username='root';
$password='';
$dbname = "my_signuser";
$conn=mysqli_connect($url,$username,$password,"$dbname");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
include 'PHPMailerAutoload.php';
include 'class.phpmailer.php';
include 'class.smtp.php';
function PhpMail($to,$message,$subject)
{
    $mail = new PHPMailer;
    
			//Server settings
			  
			//
			
			
			
			//$mail->SMTPDebug = 3;                                 // Enable verbose debug output
			$mail->isSMTP();                                     // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true; 
            //$mail->SMTPAutoTLS = false; 
			$mail->Username = 'batch16.065@gmail.com';                 // SMTP username
$mail->Password = 'SUNNYsunny123';  
			//$mail->SMTPSecure='tls';
			$mail->Port = 587;                                    // TCP port to connect to

			//Recipients
			$mail->setFrom('batch16.065@gmail.com', 'Login System');
			
				$to_mail=$to;
				$mail->addAddress($to_mail); 
				// Add a recipient
			
			$mail->addReplyTo('batch16.065@gmail.com', 'Login System');
			
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = $subject;
			$mail->Body =$message;
			$mail->send();
		    $message=1;
			if(!$mail->send()) 
			{
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else 
			{
				echo 'Message has been sent';
			}	
		
		
	

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

