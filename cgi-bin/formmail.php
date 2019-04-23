<?php
if(!isset($_POST['submit']))

  $visitor_email = $_POST['email']; 

  $email_from = 'lisa@lisawilkins.com';
  $email_subject = "Customer email";
  $email_body = "Add this to your customer list: $email.\n".

  $to = "lisa@lisawilkins.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";

//Send the email!
  mail($to,$email_subject,$email_body,$headers);

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>

