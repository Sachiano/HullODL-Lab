<?php


$date = $_POST['Body'];
$from = $_POST['From'];

$to = "+441482900499";

if (is_numeric($date) && (strlen($date) == 4))
{
	$date = str_split($date, 2);

	$day = $date[0];
	$mon = $date[1];
	
	$full_date = date('l \t\h\e jS \o\f M, Y', mktime(0, 0, 0, $date[0], $date[1], 2013));


	$reply = "Hello from HullODL! Your booking is confirmed for " . $full_date . " from 12pm onwards. Thanks!";

	mail("sacha.corazzi@gmail.com","Text", $reply);
}

else
{
	$reply = "Hey there! If you would like to book a slot at HullODL, text the day and month as a 4 digit number. For example, 0506 would be the 5th of July!";
}

require('Services/Twilio.php');

$sid = "AC7896aeed76eb4147b39f93e5716d3bc7"; 
$token = "54249be9f5ff223d3332ff320485553e"; 
$client = new Services_Twilio($sid, $token);
 
$message = $client->account->sms_messages->create($to, $from, $reply, array());
echo $message->sid;