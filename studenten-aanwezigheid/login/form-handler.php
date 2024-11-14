<?php 
$name  = $_POST['naam'];
$bezoekers_email = $_POST['email'];
$onderwerp = $_POST['onderwerp'];
$Message = $_POST['message'];

$email_from = 'natindirectie@gmail.com';

$email_onderwerp = 'New Form Subject';

$email_body = "User Name: $name.\n.".
              "User Email: $bezoekers_email.\n".
              "Onderwerp: $onderwerp.\n".
              "User Message: $Message.\n";

$to = 'natindirectie@gmail.com';
$headers = "From:$email_from \r\n";

$headers .= "Reply-To:$bezoekers_email \r\n";

mail($to, $email_onderwerp, $email_body, $headers);

header("Location: contact.html");
?>