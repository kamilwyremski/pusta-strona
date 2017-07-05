<?php 

include('../controller/config.php');

$validation_code = md5(uniqid(rand(), true));

$ba = mysql_query('select * from ban where email="'.$_POST['email'].'"');
while($dane = mysql_fetch_array($ba)){$ban = $dane;}

if (isset($ban)){
	$message = 'Witaj na stronie '.$_SERVER['HTTP_HOST'].'. Przykro nam ale Twoje ogłoszenie nie mogło zostać dodane. 
	Pozdrawiamy
	http://grupaedom.pl';
}else{
	mysql_query('insert into ads values(null, "'.$_POST['type'].'", 0, "'.$_POST['content'].'", '.time().', "'.$_POST['email'].'", "'.$_POST['tel'].'", "'.$validation_code.'")');

	$message = 'Witaj na stronie '.$_SERVER['HTTP_HOST'].'. Dziękujemy za dodanie ogłoszenia. Prosimy o potwierdzenie swojego adresu e-mail klikając w link: http://'.$_SERVER['HTTP_HOST'].'?aktywacja='.$validation_code.' 
	Aby usunąć swoje ogłoszenie kliknij w link: http://'.$_SERVER['HTTP_HOST'].'?usun='.$validation_code.' 
	Pozdrawiamy
	http://grupaedom.pl';
}
	$header = "MIME-Version: 1.0\n";
	$header .= "Content-Type: text/plain;charset=utf-8\n";
	$header .= "Content-Transfer-Encoding: 8bit\n";
	$address = $_POST['email'];
	$subject = "Witamy na stronie ".$_SERVER['HTTP_HOST'];
	mail($address, $subject, $message, $header);

?>