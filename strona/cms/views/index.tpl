<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="Keywords" content="CMS Content Management System, System zarządzania treścią">
	<meta name="Description" content="CMS - system zarządzania treścią dla Twojej strony internetowej.">
	<meta name="author" content="Kamil Wyremski - wyremski.pl">
	<title>CMS - GrupaEdom.pl</title>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="views/css/style.css">
	<script type="text/javascript" src="../js/jquery-2.0.2.min.js"></script>
    <script type="text/javascript" src="js/engine_cms.js"></script>
</head>
<body>
<div id="site">
	{if isset($user)}
		<img src="../img/logo.png" id="logo2" alt="Logo"/>
		<a href="http://wyremski.pl" title="Tworzenie stron internetowych" target="_blank"><img src="img/cms.png" id="logo" alt="Logo"/></a>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="?strona">Strona</a></li>
				<li><span>Ogłoszenia</span>
					<ul>
						<li><a href="?oferuje">Oferuje</a></li>
						<li><a href="?szukam">Szukam</a></li>
					</ul>
				</li>
				<li><a href="?blokady">Blokady</a></li>
				<li><span>Stopka</span>
					<ul>
						<li><a href="?stopka&seokatalogi">Seokatalogi</a></li>
						<li><a href="?stopka&kredyty">Kredyty</a></li>
						<li><a href="?stopka&rozrywka">Rozrywka</a></li>
						<li><a href="?stopka&bazy">Bazy noclegowe</a></li>
						<li><a href="?stopka&inne">Inne</a></li>
					</ul>
				</li>
				<li class="last_menu"><a href="?wyloguj">Wyloguj</a></li>
				<li class="last_menu"><a href="?cms">CMS</a></li>
			</ul>
		</nav>
	{/if}
		
		{include file="$strona.html"}
		
</div>
<footer>
	<div>
		<span>CMS v1.1 Copyright and project © 2014 by <a href="http://wyremski.pl" target="_blank" title="Tworzenie Stron Internetowych">Kamil Wyremski</a>. All rights reserved.</span>
	</div>
</footer>
</body>
</html>
	