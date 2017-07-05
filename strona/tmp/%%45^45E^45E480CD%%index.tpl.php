<?php /* Smarty version 2.6.26, created on 2014-03-17 19:35:43
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'index.tpl', 49, false),)), $this); ?>
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
			<h1><?php echo $this->_tpl_vars['serwer']; ?>
</h1>
			<h2>Ta domena jest na sprzedaż</h2>
			<p>Jeśli jesteś zainteresowany zakupem zapraszamy do skorzystania z formularza poniżej. Możesz także wystawić darmowe ogłoszenie jeśli oferujesz lub szukasz czegoś związanego z tematem tej domeny</p>
			<div class="adsense">
				<?php echo '
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<ins class="adsbygoogle"
					 style="display:inline-block;width:728px;height:90px"
					 data-ad-client="ca-pub-5370165308939918"
					 data-ad-slot="6237874180"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				'; ?>

			</div>
			<div class="progress"></div>	
		</div>
	</div>
	<div class="site">
		<div class="site_inside">
			<h2>Tablica ogłoszeń</h2>
			<h3>Oferuje</h3>
			<?php if ($this->_tpl_vars['ads_0']): ?>
				<table class="ads">
					<tr><td>Treść:</td><td>Data:</td><td>Kontakt:</td></tr>
					<?php $_from = $this->_tpl_vars['ads_0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
					<tr><td><?php echo $this->_tpl_vars['item']['content']; ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%e-%m-%Y, %H:%M") : smarty_modifier_date_format($_tmp, "%e-%m-%Y, %H:%M")); ?>
</td><td><?php echo $this->_tpl_vars['item']['email']; ?>
<?php if ($this->_tpl_vars['item']['tel']): ?><br>tel. <?php echo $this->_tpl_vars['item']['tel']; ?>
<?php endif; ?></td></tr>
					<?php endforeach; endif; unset($_from); ?>
				</table>
			<?php else: ?>
				<h4>Brak ogłoszeń w tym dziale - dodaj swoje!</h4>
			<?php endif; ?>
			<h3>Szukam</h3>
			<?php if ($this->_tpl_vars['ads_1']): ?>
				<table class="ads">
					<tr><td>Treść:</td><td>Data:</td><td>Kontakt:</td></tr>
					<?php $_from = $this->_tpl_vars['ads_1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
					<tr><td><?php echo $this->_tpl_vars['item']['content']; ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%e-%m-%Y, %H:%M") : smarty_modifier_date_format($_tmp, "%e-%m-%Y, %H:%M")); ?>
</td><td><?php echo $this->_tpl_vars['item']['email']; ?>
<?php if ($this->_tpl_vars['item']['tel']): ?><br>tel. <?php echo $this->_tpl_vars['item']['tel']; ?>
<?php endif; ?></td></tr>
					<?php endforeach; endif; unset($_from); ?>
				</table>
			<?php else: ?>
				<h4>Brak ogłoszeń w tym dziale - dodaj swoje!</h4>
			<?php endif; ?>
			<div class="adsense">
				<?php echo '
				<ins class="adsbygoogle"
					 style="display:inline-block;width:728px;height:90px"
					 data-ad-client="ca-pub-5370165308939918"
					 data-ad-slot="6237874180"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				'; ?>

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
			<h1><?php echo $this->_tpl_vars['serwer']; ?>
</h1>
			<h2>Aktualna cena tej domeny to: <span id="cena"><?php echo $this->_tpl_vars['settings']['price']; ?>
</span> zł</h2>
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
				<?php echo '
				<ins class="adsbygoogle"
					 style="display:inline-block;width:728px;height:90px"
					 data-ad-client="ca-pub-5370165308939918"
					 data-ad-slot="6237874180"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				'; ?>

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
				<?php $_from = $this->_tpl_vars['footer'][0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
					<li><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" title="<?php echo $this->_tpl_vars['item']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul></nav>
		</div>
		<div class="footer">
			<span>KREDYTY</span>
			<nav><ul>
				<?php $_from = $this->_tpl_vars['footer'][1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
					<li><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" title="<?php echo $this->_tpl_vars['item']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul></nav>
		</div>
		<div class="footer">
			<span>ROZRYWKA</span>
			<nav><ul>
				<?php $_from = $this->_tpl_vars['footer'][2]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
					<li><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" title="<?php echo $this->_tpl_vars['item']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul></nav>
		</div>
		<div class="footer">
			<span>BAZY NOCLEG.</span>
			<nav><ul>
				<?php $_from = $this->_tpl_vars['footer'][3]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
					<li><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" title="<?php echo $this->_tpl_vars['item']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul></nav>
		</div>
		<div class="footer">
			<span>INNE</span>
			<nav><ul>
				<?php $_from = $this->_tpl_vars['footer'][4]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
					<li><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" title="<?php echo $this->_tpl_vars['item']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
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
		<h5 class="komunikat"><?php echo $this->_tpl_vars['komunikat']; ?>
</h5>
		<a href="#" class="a_komunikat">OK</a>
	</div>
</div>
</body>
</html>