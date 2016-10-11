<!--index php file-->
<?php

//header( 'CS6432016/TwilioSend/index.html' ) ;
echo "php on heroku is awesome";

 // this line loads the library 
require('/path/to/twilio-php/Services/Twilio.php'); 
 
$account_sid = 'AC22436d8a2fc6741ccbc242414afece1e'; 
$auth_token = '82910f44bb1146714ab0f32bbe475662'; 
$client = new Services_Twilio($account_sid, $auth_token); 
 
$client->account->messages->create(array( 
	'To' => "1 929 216 8151", 
	'From' => "+12014313256", 
	'Body' => "Hello from Andrew Preciado",   
)); 