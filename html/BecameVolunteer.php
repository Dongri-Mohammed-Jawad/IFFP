<?php
if(isset($_POST['VolunteerSubmit']))
{
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Gender = $_POST['Gender'];
	$Age = $_POST['Age'];
	$Email = $_POST['Email'];
	$Address = $_POST['Address'];
	$Availability = $_POST['Availability'];
	$ExperienceSkills = $_POST['ExperienceSkills'];
	$AdditionalInformation = $_POST['AdditionalInformation'];
	
	$To = "info@iffpinc.org";
	$DateOf = Date('d/m/y');
	$MailSubject = "Volunteer Request ($FirstName $LastName $DateOf)";
	
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$headers .= "From: info@crammaze.com" . "\r\n" .
                   "CC: info@crammaze.com"."\r\n". "Reply-To: $Email";
	$Message = "
	<html>
			<body>
				<h2 style='font-family:Arial;'>Volunteer Details :</h2>
				<table style='font-family:Palatino Linotype;border-collapse:no-collapse;font-size:18px;color:#875A84;width:50%;'>
					<tr>
						<th>First Name </th>
						<td >$FirstName</td>
					</tr>
					<tr>
						<th>Last Name  </th>
						<td>$LastName</td>
					</tr>
					<tr>
						<th>Gender </th>
						<td>$Gender</td>
					</tr>
					<tr>
						<th>Age </th>
						<td>$Age</td>
					</tr>
					<tr>
						<th>Email </th>
						<td>$Email</td>
					</tr>
					<tr>
						<th>Address </th>
						<td>$Address</td>
					</tr>
					<tr>
						<th>Availability </th>
						<td>$Availability</td>
					</tr>
					<tr>
						<th>Experience and Skills </th>
						<td>$ExperienceSkills</td>
					</tr>
					<tr>
						<th>Additional Information </th>
						<td>$AdditionalInformation</td>
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