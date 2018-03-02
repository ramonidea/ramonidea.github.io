<?php
if($_REQUEST['name'] == '' || $_REQUEST['email'] == '' ||  $_REQUEST['message'] == ''):
  return "error";
endif;
if (filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)):
  $subject = 'Email from NOISE template'; // Subject of your email

  // Receiver email address
  $to = 'support@neonunicorns.com';  //Change the email address by yours
 

  // prepare header
  $header = 'From: '. $_REQUEST['name'] . ' <'. $_REQUEST['email'] .'>'. "\r\n";
  $header .= 'Reply-To:  '. $_REQUEST['name'] . ' <'. $_REQUEST['email'] .'>'. "\r\n";
  $header .= 'X-Mailer: PHP/' . phpversion();

  // prepare massage
  $message = '';
  $message .= 'Name: ' . $_REQUEST['name'] . "\n";
  $message .= 'Email: ' . $_REQUEST['email'] . "\n";
  $message .= 'Message: '. $_REQUEST['message'];

  // Send contact information
  $mail = mail( $to, $subject , $message, $header );

  echo 'sent';
  else:
    return "error";
  endif; 

?>