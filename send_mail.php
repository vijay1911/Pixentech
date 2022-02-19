<?php
$fname = $_POST['first_name'];
$message = $_POST['message'];
$mail = $_POST['email'];
$mob = $_POST['mobileno'];

			$to = 'info@pixentech.com';
			$subject = "User Contact Details";
		
			$body = "The User Details are :<br /><br />";
			$body .= "FirstName is :-".ucfirst($fname)."<br /><br />";
			$body .= "Email  is :-" .$mail. "<br /><br />";
			$body .= "Mobile  is :-" .$mob. "<br /><br />";
			$body .= "Message  is :-" .$message. "<br /><br />";
			

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: Pixentech<info@pixentech.com>' . "\r\n";
			
	if(mail($to, $subject, $body, $headers))
	{
	header("location:mail_success.html");
	}
	else
	{
	header("location:mail_failure.html");
	}
?>