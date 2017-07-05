<?php

 include('../../controller/config.php');
 
 session_start(); 

 if(isset($_SESSION['user_cms']) and isset($_SESSION['user_cms_p'])){
	$usern = mysql_query('select * from cms where login="'.$_SESSION['user_cms'].'" and password="'.$_SESSION['user_cms_p'].'"');
	while($dane = mysql_fetch_array($usern)){$user= $dane;}
	if(isset($user)){
		if($_POST['action']=="add"){
			mysql_query('insert into footer values(null, "'.$_POST['type'].'", "'.$_POST['title'].'", "'.$_POST['url'].'")');
		}else if($_POST['action']=="edit"){
			mysql_query('update footer set title= "'.$_POST['title'].'", url="'.$_POST['url'].'" where id="'.$_POST['id'].'"');
		}else if($_POST['action']=="remove"){
			mysql_query('delete from footer where id="'.$_POST['id'].'"');
		}
	}
}
?>