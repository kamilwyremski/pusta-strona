<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
error_reporting(0);

 require_once('lib/Smarty.class.php');
 $smarty = new Smarty();
 $smarty->template_dir = 'views';
 $smarty->compile_dir = 'tmp';
 $smarty->cache_dir = 'cache';
 date_default_timezone_set('Europe/Warsaw');
 
 include('controller/config.php');

 if (isset($_GET['aktywacja'])){
	$akt = mysql_query('select * from ads where activation_code="'.$_GET['aktywacja'].'"'); 
	while($dane = mysql_fetch_array($akt)){$aktywacja = $dane;}
	if (isset($aktywacja)){
		$li = mysql_query('select ads_'.$aktywacja["type"].' from settings');
		while($dane = mysql_fetch_array($li)){$limit = $dane;}
		$li2 =  mysql_query('select * from ads where status="1" and type="'.$aktywacja["type"].'"');
		$limit2 = mysql_num_rows($li2);
		if($limit[0]>$limit2){
			mysql_query('update ads set status="1" where activation_code="'.$_GET['aktywacja'].'"');
			$smarty->assign("komunikat", "Twoje ogłoszenie zostało aktywowane");
		}else{
			$smarty->assign("komunikat", "Przykro nam ale przekroczono już maksymalną ilość ogłoszeń. Spróbuj ponownie później.");
		}
	}else{
		$smarty->assign("komunikat", "Nieprawidłowy kod aktywacyjny");
	}
 }else if (isset($_GET['usun'])){
	mysql_query('delete from ads where activation_code="'.$_GET['usun'].'"');
	$smarty->assign("komunikat", "Twoje ogłoszenie zostało usunięte");
 }
 
 $ads_s0 = mysql_query('select * from ads where type="0" and status="1"'); //ogłoszenia oferuje type=0
 while($dane = mysql_fetch_array($ads_s0)){$ads_0[] = $dane;}
 if(isset($ads_0)){
	$smarty->assign("ads_0", $ads_0);
 }
 
 $ads_s1 = mysql_query('select * from ads where type="1" and status="1"'); //ogłoszenia szukam type=1
 while($dane = mysql_fetch_array($ads_s1)){$ads_1[] = $dane;}
 if(isset($ads_1)){
	$smarty->assign("ads_1", $ads_1);
 }
 
 $petla=0;
 while($petla < 5){
	$foo0 = mysql_query('select * from footer where type="'.$petla.'"'); //stopka (footer) dla type=0 {Seokatalogi}
	while($dane = mysql_fetch_array($foo0)){$footer[$petla][] = $dane;}

	$petla++;
 } 
 
 $se = mysql_query('select price from settings');
 while($dane = mysql_fetch_array($se)){$settings = $dane;}
 $smarty->assign("settings", $settings);
 
 $smarty->assign("footer", $footer);
 
 $smarty->assign("serwer", $_SERVER['HTTP_HOST']);
 
 $smarty->display('index.tpl');
?>