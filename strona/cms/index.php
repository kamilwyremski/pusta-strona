<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);
error_reporting(0);

 require_once('../lib/Smarty.class.php');
 $smarty = new Smarty();
 $smarty->template_dir = 'views';
 $smarty->compile_dir = 'tmp';
 $smarty->cache_dir = 'cache';
 
 include('../controller/config.php');
 
 session_start(); 
 if (isset($_GET['wyloguj'])){
	unset($_SESSION['user_cms']);
	unset($_SESSION['user_cms_p']);
 }else if(isset($_GET['loguj'])){
	unset($_SESSION['user_cms']);
	unset($_SESSION['user_cms_p']);
	$usern = mysql_query('select * from cms where login="'.$_POST['login'].'" and password="'.$_POST['password'].'"');
	while($dane = mysql_fetch_array($usern)){$user= $dane;}
	if(isset($user)){
		$_SESSION['user_cms'] = $_POST['login'];
		$_SESSION['user_cms_p'] = $_POST['password'];
		$smarty->assign("user", $user);		
	}else{
		unset($_SESSION['user_cms']);
		$smarty->assign("komunikat_logowania", 'Niepoprawny login lub haslo');
	}
 }
 
 $strona = 'index';
 
 if(isset($_SESSION['user_cms']) and isset($_SESSION['user_cms_p'])){
	$usern = mysql_query('select * from cms where login="'.$_SESSION['user_cms'].'" and password="'.$_SESSION['user_cms_p'].'"');
	while($dane = mysql_fetch_array($usern)){$user= $dane;}
	if(isset($user)){
		$smarty->assign("user", $user);
		if (isset($_GET['strona'])){
			if (isset($_POST['price']) and isset($_POST['max_0']) and isset($_POST['max_1'])){
				mysql_query('update settings set price="'.$_POST['price'].'", ads_0="'.$_POST['max_0'].'", ads_1="'.$_POST['max_1'].'" where id="1"');
			}
			$smarty->assign("serwer", $_SERVER['HTTP_HOST']);
			$se0 = mysql_query('select * from settings'); 
			while($dane = mysql_fetch_array($se0)){$settings = $dane;}
			$smarty->assign("settings", $settings);
			$strona = 'strona';
		}else if (isset($_GET['oferuje'])){
			if (isset($_POST['remove'])){
				mysql_query('delete from ads where id="'.($_POST['remove']).'"');
			}
			if (isset($_POST['add'])){
				mysql_query('update ads set status="1" where id="'.$_POST['add'].'"');
			}
			$ads_s0 = mysql_query('select * from ads where type="0" and status="0"'); //og這szenia oferuje type=0
			while($dane = mysql_fetch_array($ads_s0)){$ads_0[] = $dane;}
			if(isset($ads_0)){
				$smarty->assign("ads_0", $ads_0);
			}
			$ads_s1 = mysql_query('select * from ads where type="0" and status="1"'); //og這szenia oferuje type=0
			while($dane = mysql_fetch_array($ads_s1)){$ads_1[] = $dane;}
			if(isset($ads_1)){
				$smarty->assign("ads_1", $ads_1);
			}
			$smarty->assign("ads", "oferuje");
			$strona = 'ads';
		}else if (isset($_GET['szukam'])){
			if (isset($_POST['remove'])){
				mysql_query('delete from ads where id="'.($_POST['remove']).'"');
			}
			if (isset($_POST['add'])){
				mysql_query('update ads set status="1" where id="'.$_POST['add'].'"');
			}
			$ads_s0 = mysql_query('select * from ads where type="1" and status="0"'); //og這szenia szukam type=1
			while($dane = mysql_fetch_array($ads_s0)){$ads_0[] = $dane;}
			if(isset($ads_0)){
				$smarty->assign("ads_0", $ads_0);
			}
			$ads_s1 = mysql_query('select * from ads where type="1" and status="1"'); //og這szenia szukam type=1
			while($dane = mysql_fetch_array($ads_s1)){$ads_1[] = $dane;}
			if(isset($ads_1)){
				$smarty->assign("ads_1", $ads_1);
			}
			$smarty->assign("ads", "szukam");
			$strona = 'ads';
		}else if (isset($_GET['blokady'])){
			if (isset($_POST['remove'])){
				mysql_query('delete from ban where id="'.($_POST['remove']).'"');
			}
			if (isset($_POST['ban'])){
				mysql_query('insert into ban values(null, "'.$_POST['ban'].'", "'.time().'")');
			}
			$ban0 = mysql_query('select * from ban'); 
			while($dane = mysql_fetch_array($ban0)){$ban[] = $dane;}
			if(isset($ban)){
				$smarty->assign("ban", $ban);
			}
			$strona = 'blokady';
		}else if (isset($_GET['stopka'])){
			if (isset($_GET['seokatalogi'])){
				$foo = "0"; $smarty->assign("foo_nazwa", "Seokatalogi"); $smarty->assign("foo_type", 0);
			}else if (isset($_GET['kredyty'])){
				$foo = "1"; $smarty->assign("foo_nazwa", "Kredyty");$smarty->assign("foo_type", 1);
			}else if (isset($_GET['rozrywka'])){
				$foo = "2"; $smarty->assign("foo_nazwa", "Rozrywka");$smarty->assign("foo_type", 2);
			}else if (isset($_GET['bazy'])){
				$foo = "3"; $smarty->assign("foo_nazwa", "Bazy noclegowe");$smarty->assign("foo_type", 3);
			}else{
				$foo = "4"; $smarty->assign("foo_nazwa", "Inne");$smarty->assign("foo_type", 4);
			}
			$fo = mysql_query('select * from footer where type="'.$foo.'"');
			while($dane = mysql_fetch_array($fo)){$footer[] = $dane;}
			if (isset($footer)){
				$smarty->assign("footer", $footer);
			}
			$strona = 'stopka';
		}else if (isset($_GET['cms'])){
			$smarty->assign("login", $_SESSION['user_cms']);
			$smarty->assign("password", $_SESSION['user_cms_p']);
			$strona = 'cms';
		}else {
			$strona = 'home';
		}
	}else{
		unset($_SESSION['user_cms']);
	}
}


 $smarty->assign('strona',$strona);
 $smarty->display('index.tpl');
?>