<?php /* Smarty version 2.6.26, created on 2014-03-16 12:21:38
         compiled from cms.html */ ?>
﻿		<div id="form_edytuj">
			<h1>Zmień dane dostępowe</h1>
			<table>
				<tr>
					<td><label for="login">Login:</label></td>
					<td><span class="u_login u"></span><input class="input u0" type="text" name="login" value="<?php echo $this->_tpl_vars['login']; ?>
"></td>
				</tr>
				<tr>
					<td><label for="password">Password:</label></td>
					<td><span class="u_password u"></span><input class="input u1" type="password" name="password" value="<?php echo $this->_tpl_vars['password']; ?>
"></td>
				</tr>	
				<tr>
					<td><label for="cpassword">Confirm password:</label></td>
					<td><input class="input u2" type="password" name="cpassword"></td>
				</tr>					
			</table>
				<input id="zapisz_ustawienia" type="submit" name="loguj" value="Zapisz" class="link_dodaj"/>

		</div>