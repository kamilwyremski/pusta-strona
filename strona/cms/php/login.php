<?php

 include('../../controller/config.php');
 
 session_start(); 

 if(isset($_SESSION['user_cms']) and isset($_SESSION['user_cms_p'])){
	$usern = mysql_query('select * from cms where login="'.$_SESSION['user_cms'].'" and password="'.$_SESSION['user_cms_p'].'"');
	while($dane = mysql_fetch_array($usern)){$user= $dane;}
	if(isset($user)){
		mysql_query('update cms set login="'.$_POST['login'].'", password="'.$_POST['password'].'" where id="1"');
	}
}
?>