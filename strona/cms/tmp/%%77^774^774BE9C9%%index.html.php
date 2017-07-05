<?php /* Smarty version 2.6.26, created on 2014-03-17 19:10:42
         compiled from index.html */ ?>
﻿		<a href="http://wyremski.pl" title="Tworzenie stron internetowych" target="_blank"><img src="img/cms.png" id="logo_big" alt="Logo"/></a>
		
		<div id="form_login">
			<h1>Panel logowania</h1>
			<form method="post" action="?loguj">
			<table>
				<tr>
					<td><label for="login">Login:</label></td>
					<td><input class="input" type="text" name="login"></td>
				</tr>
				<tr>
					<td><label for="password">Password:</label></td>
					<td><input class="input" type="password" name="password"></td>
				</tr>		
			</table>
				<input type="submit" name="loguj" value="Loguj" class="link_dodaj"/>
			</form>
			<?php if (isset ( $this->_tpl_vars['komunikat_logowania'] )): ?>
				<h2><?php echo $this->_tpl_vars['komunikat_logowania']; ?>
</h2>
			<?php endif; ?>
		</div>