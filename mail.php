<html>
<head><title>Email</title></head>
<body>
<h1>This page will send the mail to the user</h1>

</body>
</html>


<? php
$to='divakar.pd2704@gmail.com';
$subject='This is a test email';
$body='Hi, this is a php program sending an email."\n". Thank you for your support';
$header ='From: Divakar program <xyz@abc.com>';

if(mail($to, $subject, $body, $header)){
	echo "email has been sent\n";
}
else{
	echo"error";
}
?>
