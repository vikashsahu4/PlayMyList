<?php
use Phalcon\Events\Event;
    Phalcon\Mvc\User\Plugin;
    Phalcon\Mvc\Dispatcher;

class Mandrill extends Plugin {

    public function sendMail ($email_tag='email from ---') {

try {

$message = array(
	'key' => 'APHun3t5dAwbQ6rZJFYV8Q',
	'message' => array(
        'html' => $sending_message,
        'subject' => $sending_subject,
        'from_email' => $from_email,
        'from_name' => $from_name,
        'to' => array(
            '0' => array(
                'email' => $to_email,
                'name' => $to_name
            )
        ),
        'headers' => array('Reply-To' => $reply_to_email),
        'important' => true,
        'track_opens' => true,
        'track_clicks' => true,
        'auto_text' => true,
        'auto_html' => null,
        'inline_css' => true,
        'url_strip_qs' => null,
        'preserve_recipients' => false,
        'tracking_domain' => null,
        'tags' => array($email_tag)
    )
    );
    
    $jason1=json_encode($message);
$curli="https://mandrillapp.com/api/1.0/messages/send.json";
$ch = curl_init($curli);    
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);                              
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json') );  
curl_setopt($ch, CURLOPT_POST, true);   
curl_setopt($ch, CURLOPT_POSTFIELDS, $jason1);                                                                      
                                                                                                                  
                                                                                                                     
$result = curl_exec($ch); 
    
    $status=curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    $response=json_decode($result, true);    
    
    ?>
