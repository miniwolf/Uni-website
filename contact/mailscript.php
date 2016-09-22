<?php
$to = 'miniwolf1508@gmail.com';
$subject = $HTTP_POST_VARS['subject'];
$message = $HTTP_POST_VARS['message'];
$headers = 'From:' . "\r\n" .
    'Reply-To: miniwolf1508@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo "<h4>Invalid email address</h4>";
	echo "<a href='javascript:history.back(1);'>Back</a>";
} elseif ($subject == "") {
	echo "<h4>No subject</h4>";
	echo "<a href='javascript:history.back(1);'>Back</a>";
} elseif (mail($to,$subject,$message,$headers)) {
	echo "<h4>Thank you for sending email</h4>";
} else {
	echo "<h4>Cannot send email</h4>";
}
?>
