<?php 

include('../controller/config.php');

$header = "MIME-Version: 1.0\n";
$header .= "Content-Type: text/plain;charset=utf-8\n";
$header .= "Content-Transfer-Encoding: 8bit\n";
$message = 'Witaj! Użytkownik "'.$_POST['name'].'" zgłosił chęć zakupu domeny "'.$_SERVER['HTTP_HOST'].'" za kwotę: '.$_POST['oferta'].'. Jego adres e-mail: "'.$_POST['email2'].'". Wiadomość przesłana przez użytkownika: "'.$_POST['message'].'".';
$address = "biuro@grupaedom.pl";
$subject = "Oferta kupna domeny ".$_SERVER['HTTP_HOST'];
mail($address, $subject, $message, $header);


?>