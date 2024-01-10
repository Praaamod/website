<?php
$to="info@rupak.com";
$fullname=$_POST['fname'];
$email=$_POST['email'];
$subject="Feedback from user"."\n".$email;
$message=$_POST['message'];
$headers="From:info@somedomain.com";


if(mail($to, $fullname, $subject, $message, $headers))
{
	echo "<script>window.alert('Sent mail Successfully!');</script>";
}
else
{
	echo "<script>window.alert('Not sent mail');</script>";
}
?>

<h2><a href="index.php">Return to Home &gt; &gt;</a></h2>