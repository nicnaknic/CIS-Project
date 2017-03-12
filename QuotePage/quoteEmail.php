<?php
// Make variables of input data:
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$email = strtolower(filter_input(INPUT_POST, 'email')); // To lowercase
$company = filter_input(INPUT_POST, 'company');
$jobtitle = filter_input(INPUT_POST, 'title');
$comment = filter_input(INPUT_POST, 'comment');
$subject = "Quote for job listing";
$okstaffing = "reception@okanaganstaffing";
$error = false; 

// Okanagan Staffing message.
$okMessage = "	
    <html>
	<head>
	<title>Position Enquiry</title>
	</head>
	<body>
	    <p><strong>You have received an online quote enquiry through your quote page at okanaganstaffing.com</strong></p>
		<p>The details of the enquiry can be found below.</p>
		<br>
		<p><strong>First name:</strong> $fname</p>
		<p><strong>Last name:</strong> $lname</p>
		<p><strong>The enquirer's email is:</strong> $email</p>
		<p><strong>Company:</strong> $company</p>
		<p><strong>Job title:</strong> $jobtitle</p>
	    <br>
		<p><strong>The following description was included:</strong></p>
		<p><i>$comment</i></p>
		<p>---------------------------------</p>
		<p>This is an automated message and you can not directly reply to this email.</p>
		<p>The enquirer is expecting a reply and you can reach them on the email they provided at: $email</p>
	</body>
	</html>
	";

// Enquirers email. 
$enqMessage = "
	<html>
	<head>
	<title>Position Enquiry</title>
	</head>
	<body>
		<p>Dear $fname,</p>
		<p>Thank you for contacting Okanagan Staffing about your enquiry!</p>
		<p>We will get back to you shortly with further information regarding your enquiry.</p>
		<br>
		<p>Sincerely, </p>
		<p>Okanagan Staffing Team</p>
		<p>http://www.okanaganstaffing.com/</p>
		<p>============================================</p>
		<p>This is an automated message and cannot be responded to. </p>
        <p>If you have any further questions, you can contact us at: </p>
		<p>Phone: (250) 717-0506</p>
		<p>Email: reception@okanaganstaffing.com</p>
	</body>
	</html>
	";
	
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <no-reply@okstaffing.com>' . "\r\n";

$okmail = mail($okstaffing, $subject, $okMessage, $headers);
$enqmail = mail($email, $subject, $enqMessage, $headers);

// Attempt to send out emails.
if (!$okmail || !$enqmail) { 
	$error = true;
	return;
}	
?>

<html>
	<body>
	<p>If you are interested in having a job posted by Okanagan Staffing, please fill out the form below.</p>
	<form action="quoteEmail.php" method="post">
		First name:<br>
		<input type="text" name="fname" required>
		<br><br>
		Last name:<br>
		<input type="text" name="lname" required>
		<br><br>
		Your Email:<br>
		<input type="text" name="email" required>
		<br><br>
		Company Name:<br>
		<input type="text" name="company" required>
		<br><br>
		Title of job you are enquiring to fill:<br>
		<input type="text" name="title" required>
		<br><br>
		Description:<br>
		<textarea name="comment" rows="10" cols="100"></textarea>
		<br><br>
		<input type="submit" value="Submit">
	</form> 
	<?php 
	if ($error == false) {
		echo "<p style=\"color: green;\"><b>Your message was sent successfully.</b></p>";
		echo "<p style=\"color: green;\"><b>We will get back to you shortly!</b></p>";
	} else {
		echo "<p style=\"color: red;\"><b>We encountered an error while processing your request!</b></p>";
		echo "<p style=\"color: red;\"><b>Please contact us at: (250) 717-0506 or email us at reception@okanaganstaffing instead.</b></p>";
	}
	?>
	</body>
</html>
