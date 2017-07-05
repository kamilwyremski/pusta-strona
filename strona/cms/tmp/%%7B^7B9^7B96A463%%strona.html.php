<?php /* Smarty version 2.6.26, created on 2014-03-17 19:02:48
         compiled from strona.html */ ?>
﻿	
	<div class="center">
	<h1><?php echo $this->_tpl_vars['serwer']; ?>
</h1>
	<h3>Cena domeny (w zł):</h3>
		<span class="red price"></span>
		<input class="input" type="text" name="cena" value="<?php echo $this->_tpl_vars['settings']['price']; ?>
" id="price" style="text-align:center"><br>
	<h3>Maksymalna ilość ogłoszeń "Oferuje":</h3>
		<span class="red max_0"></span>
		<input class="input" type="text" name="max_0" value="<?php echo $this->_tpl_vars['settings']['ads_0']; ?>
" id="max_0" style="text-align:center"><br>
	<h3>Maksymalna ilość ogłoszeń "Szukam":</h3>
		<span class="red max_1"></span>
		<input class="input" type="text" name="max_1" value="<?php echo $this->_tpl_vars['settings']['ads_1']; ?>
" id="max_1" style="text-align:center"><br>
		<a href="#" class="link_dodaj settings_link">Zapisz</a>
	</div>