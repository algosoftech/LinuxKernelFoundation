<?php     

$to = "vipin@vipingupta.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: info@linuxkernelfoundation.com" . "\r\n" .
"CC: somebodyelse@example.com";

if(mail($to,$subject,$txt,$headers)):
	echo 'sent';
else:
	echo 'failed';
endif;

?>