<?php
$errors = '';
$myemail = 'omar_q8@msn.com';//<-----Put Your email address here.
if(empty($_POST['name'])  ||
   empty($_POST['lastname']) ||
   empty($_POST['contact']))
{
    $errors .= "\n Error: all fields are required";
}
$name = $_POST['name'];
$contact = $_POST['contact'];
$lastname = $_POST['lastname'];

if( empty($errors))
{
$to = $myemail;
$email_subject = "Contact form submission: $name";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $name \n ".
"contact: $contact \n lastname \n $lastname";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $contact";
mail($to,$email_subject,$email_body,$headers);
//redirect to the 'thank you' page
header('Location: contact-form-thank-you.html');
}
?>