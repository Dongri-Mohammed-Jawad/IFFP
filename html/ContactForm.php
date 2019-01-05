<?php
if(isset($_POST['ContactSubmit']))
{
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Phone = $_POST['Phone'];
	$Subject = $_POST['Subject'];
	$Message = $_POST['Message'];
	
	$To = "info@crammaze.com";
	$DateOf = Date('d/m/y');
	$MailSubject = "Contact Us Request ($Name $DateOf)";
	
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$headers .= "From: info@crammaze.com" . "\r\n" .
                   "CC: info@crammaze.com"."\r\n". "Reply-To: $Email";
	$Message = "
	<html>
			<body>
				<h2 style='font-family:Arial;'>Contact Us Details :</h2>
				<table style='font-family:Palatino Linotype;border-collapse:no-collapse;font-size:18px;color:#875A84;width:50%;'>
					<tr>
						<th>Name </th>
						<td>$Name</td>
					</tr>
					<tr>
						<th>Email </th>
						<td>$Email</td>
					</tr>
					<tr>
						<th>Phone </th>
						<td>$Phone</td>
					</tr>
					<tr>
						<th>Subject </th>
						<td>$Subject</td>
					</tr>
					<tr>
						<th>Message </th>
						<td>$Message</td>
					</tr>
				</table>
				<p><strong>Thanks & Regards,</strong></p>
				<p><strong><a href='http://crammaze.com/' style='text-decoration:none;color:#7C2BDF;'>Crammaze Inc.,</a></strong></p>
			</body>
		</html>
		";
	$Mail = mail($To, $MailSubject, $Message, $headers);
	if($Mail)
	{
		header("refresh:0.01;url=RequestSent.php");
	}
	else
	{
		header("refresh:0.01;url=SorryForVolunteer.php");
	}
	
	
}// This is the end of the main if statement.
?>