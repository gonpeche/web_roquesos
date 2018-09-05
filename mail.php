<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "espeche.g@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Consulta enviada con éxito! Nos comunicaremos con vos a la breveded. Gracias!" . " -" . "<a href='http://roquito.gonpeche.com' style='text-decoration:none;color:#ff0099;'> Volver</a>";
?>