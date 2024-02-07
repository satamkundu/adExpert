<?php
echo 1;
exit;
if(isset($_POST['submit']) && $_POST['submit'] == 'SUBMIT'){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$interestedIn = implode(", ", $_POST['checkbox']);
	$number = $_POST['number'];
	$company = $_POST['company'];
	$city = $_POST['city'];
	$monthlyBudget = $_POST['monthlyBudget'];
	$message = $_POST['message'];

	$to = "bikramjitbusiness@gmail.com";
	$subject = "New Enquery";
	$txt = "A new Enquery came from {$name}, Email {$email}, Mobile number is : {$number}, Company name is : {$company}, CIty name is : {$city}, He is interested in {$interestedIn}, his monthly budget is {$monthlyBudget} and he leave a message that is : {$message}";
	$headers = "From: info@onlineadsexpert.com";

	mail($to,$subject,$txt,$headers);
}
?>