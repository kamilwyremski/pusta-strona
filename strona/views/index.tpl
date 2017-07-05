<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="Keywords" content="strona na sprzedaż domena domeny na sprzedaż domains for sale">
	<meta name="Description" content="Ta domena jest na sprzedaż">
	<meta name="author" content="Kamil Wyremski - wyremski.pl">
	<title>Domena na sprzedaż - Grupa eDOM</title>
	<link href='http://fonts.googleapis.com/css?family=Oregano&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="views/css/supersized.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="views/css/style.css" type="text/css" media="screen"/>
	<script type="text/javascript" src="js/jquery-2.0.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="js/supersized.3.2.7.min.js"></script>
	<script type="text/javascript" src="js/engine.js"></script>
</head>
<body>
<a href="#" class="in_down"><img src="img/arrow-down.png" class="arrow" alt="Strzałka w dół"/></a>
<a href="#" class="in_up"><img src="img/arrow-up.png" class="arrow arrow2" alt="Strzałka w dół"/></a>
<div id="site_box">
	<div class="site main">
		<div class="site_inside">
			<h1>{$serwer}</h1>
			<h2>Ta domena jest na sprzedaż</h2>
			<p>Jeśli jesteś zainteresowany zakupem zapraszamy do skorzystania z formularza poniżej. Możesz także wystawić darmowe ogłoszenie jeśli oferujesz lub szukasz czegoś związanego z tematem tej domeny</p>
			<div class="adsense">
				{literal}
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<ins class="adsbygoogle"
					 style="display:inline-block;width:728px;height:90px"
					 data-ad-client="ca-pub-5370165308939918"
					 data-ad-slot="6237874180"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				{/literal}
			</div>
			<div class="progress"></div>	
		</div>
	</div>
	<div class="site">
		<div class="site_inside">
			<h2>Tablica ogłoszeń</h2>
			<h3>Oferuje</h3>
			{if $ads_0}
				<table class="ads">
					<tr><td>Treść:</td><td>Data:</td><td>Kontakt:</td></tr>
					{foreach key=key item=item from=$ads_0}
					<tr><td>{$item.content}</td><td>{$item.time|date_format:"%e-%m-%Y, %H:%M"}</td><td>{$item.email}{if $item.tel}<br>tel. {$item.tel}{/if}</td></tr>
					{/foreach}
				</table>
			{else}
				<h4>Brak ogłoszeń w tym dziale - dodaj swoje!</h4>
			{/if}
			<h3>Szukam</h3>
			{if $ads_1}
				<table class="ads">
					<tr><td>Treść:</td><td>Data:</td><td>Kontakt:</td></tr>
					{foreach key=key item=item from=$ads_1}
					<tr><td>{$item.content}</td><td>{$item.time|date_format:"%e-%m-%Y, %H:%M"}</td><td>{$item.email}{if $item.tel}<br>tel. {$item.tel}{/if}</td></tr>
					{/foreach}
				</table>
			{else}
				<h4>Brak ogłoszeń w tym dziale - dodaj swoje!</h4>
			{/if}
			<div class="adsense">
				{literal}
				<ins class="adsbygoogle"
					 style="display:inline-block;width:728px;height:90px"
					 data-ad-client="ca-pub-5370165308939918"
					 data-ad-slot="6237874180"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				{/literal}
			</div>
			<h3>Dodaj ogłoszenie:</h3>
			<p>Tutaj możesz za darmo dodać własne ogłoszenie. Prosimy o podanie poprawnego adresu e-mail gdyż na ten adres zostanie przesłana wiadomość z kodem aktywacyjnym. Numer telefonu jest nieobowiązkowy.</p>
			<table class="add">
				<tr><td rowspan="3"><textarea class="input" name="ads" id="ads" placeholder="Ogłoszenie"></textarea></td>
					<td><input class="input" type="text" name="email" id="email" placeholder="Adres e-mail"></td></tr>
				<tr><td><input class="input" type="text" name="tel" id="tel" placeholder="Telefon"></td></tr>
				<tr><td><a href="#" class="active" data-type="0">Oferuje</a><a href="#" data-type="1">Szukam</a></td></tr>
				<tr><td><span id="jquery_message">&nbsp;</span></td>
					<td><input type="button" value="WYŚLIJ" id="send"></td></tr>
			</table>
			<h4>Dziękujemy za dodanie ogłoszenia. Zostanie ono wyświelone po potwierdzeniu adresu e-mail</h4>
			<div class="progress"></div>	
		</div>
	</div>
	<div class="site">
		<div class="site_inside">
			<h1>{$serwer}</h1>
			<h2>Aktualna cena tej domeny to: <span id="cena">{$settings.price}</span> zł</h2>
			<p>Jeśli jesteś zainteresowany zakupem wypełnij zamieszczony poniżej formularz. Na pewno się odezwiemy.</p>
			<table class="buy">
				<tr><td><input class="input" type="text" name="name" id="name" placeholder="Imię i nazwisko"></td>
					<td rowspan="3"><textarea class="input" name="message" id="message" placeholder="Tutaj możesz zadać pytanie"></textarea></tr>
				<tr><td><input class="input" type="text" name="email2" id="email2" placeholder="Adres e-mail"></td>
				<tr><td><input class="input" type="text" name="oferta" id="oferta" placeholder="Twoja oferta (w zł)"></td></tr>
				<tr><td><input type="button" value="WYŚLIJ" id="send2"></td>
					<td><span id="jquery_message2">&nbsp;</span></td></tr>
			</table>
			<div class="adsense">
				{literal}
				<ins class="adsbygoogle"
					 style="display:inline-block;width:728px;height:90px"
					 data-ad-client="ca-pub-5370165308939918"
					 data-ad-slot="6237874180"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				{/literal}
			</div>
			<div class="progress"></div>	
		</div>
	</div>
	<div class="site">
		<div class="site_inside">
			<nav id="social">
				<ul><li><a href="https://www.facebook.com/pages/Grupaedom/596516637083870?ref=hl" target="_blank" title="Polub nas na Facebooku"><img src="img/f0.png" class="polub" alt="Facebook"/></a></li>
				<li><a href="https://plus.google.com/100474808723416255747" target="_blank" title="Polub nas w Google Plus"><img src="img/f1.png" class="polub" alt="Google Plus"/></a></li>
				<li><a href="http://nk.pl/#grupy/812770" target="_blank" title="Polub nas na Nasza-Klasa"><img src="img/f2.png" class="polub" alt="Nasza Klasa"/></a></li>
				<li><a href="mailto:biuro@grupaedom.pl" title="Napisz do nas"><img src="img/f3.png" class="polub" alt="E-mail"/></a></li></ul>
			</nav>
			<div id="div_logo">
				<a href="http://grupaedom.pl" target="_blank"><img src="img/logo.png" alt="Logo"></a>
			</div>
			<h2>Nasza oferta</h2>
		</div>
	</div>
	<footer id="inne">
		<div class="footer">
			<span>SEOKATALOGI</span>
			<nav><ul>
				{foreach key=key item=item from=$footer[0]}
					<li><a href="{$item.url}" title="{$item.title}" target="_blank">{$item.title}</a></li>
				{/foreach}
			</ul></nav>
		</div>
		<div class="footer">
			<span>KREDYTY</span>
			<nav><ul>
				{foreach key=key item=item from=$footer[1]}
					<li><a href="{$item.url}" title="{$item.title}" target="_blank">{$item.title}</a></li>
				{/foreach}
			</ul></nav>
		</div>
		<div class="footer">
			<span>ROZRYWKA</span>
			<nav><ul>
				{foreach key=key item=item from=$footer[2]}
					<li><a href="{$item.url}" title="{$item.title}" target="_blank">{$item.title}</a></li>
				{/foreach}
			</ul></nav>
		</div>
		<div class="footer">
			<span>BAZY NOCLEG.</span>
			<nav><ul>
				{foreach key=key item=item from=$footer[3]}
					<li><a href="{$item.url}" title="{$item.title}" target="_blank">{$item.title}</a></li>
				{/foreach}
			</ul></nav>
		</div>
		<div class="footer">
			<span>INNE</span>
			<nav><ul>
				{foreach key=key item=item from=$footer[4]}
					<li><a href="{$item.url}" title="{$item.title}" target="_blank">{$item.title}</a></li>
				{/foreach}
			</ul></nav>
		</div>
	</footer>
</div>
<footer id="footer">
	<div>
		<span>Copyright © 2014 by <a href="http://grupaedom.pl" target="_blank">Grupa eDOM</a> - wszelkie prawa zastrzeżone. Project © 2014 by <a href="http://wyremski.pl" target="_blank" title="Tworzenie Stron Internetowych">Kamil Wyremski</a></span>
	</div>
</footer>
<div class="back">
	<div id="komunikat">
		<h5 class="komunikat">{$komunikat}</h5>
		<a href="#" class="a_komunikat">OK</a>
	</div>
</div>
</body>
</html>
