<?php /* Smarty version 2.6.26, created on 2014-03-10 17:46:29
         compiled from uzytkownicy.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'uzytkownicy.html', 11, false),array('modifier', 'date_format', 'uzytkownicy.html', 14, false),)), $this); ?>
﻿
	<table id="table_user">
		<tr>
			<td colspan="6">Użytkownicy</td>
		</tr>
		<tr>
			<td></td><td>Login</td><td>E-mail</td><td>Data rejestracji</td><td>Avatar</td><td>Usuń</td>
		</tr>
			<?php $_from = $this->_tpl_vars['uzytkownicy']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
				<tr>
					<td><?php echo smarty_function_counter(array(), $this);?>
</td>
					<td><?php echo $this->_tpl_vars['item']['username']; ?>
</a></td>
					<td><?php echo $this->_tpl_vars['item']['email']; ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['register_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%e-%m-%Y") : smarty_modifier_date_format($_tmp, "%e-%m-%Y")); ?>
</td>
					<td><?php if ($this->_tpl_vars['item']['has_avatar'] == '1'): ?><a href="<?php echo $this->_tpl_vars['item']['avatar_url']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['item']['avatar_url']; ?>
" alt="Avatar"/></a><?php else: ?>Brak<?php endif; ?></td>
					<td><a href="#" data-url="<?php echo $this->_tpl_vars['item']['id']; ?>
" data-name="<?php echo $this->_tpl_vars['item']['username']; ?>
" class="usun_user"><img src="img/delete.png" alt="Usuń"/></a></td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
	</table>
	<br><br><br><br>
	<div class="page_box" id="usun_us">
		<div id="usun_user">
			<h1>Usuń Użytkownika: <span></span></h1>
			<a href="#" class="link_dodaj" id="tak_usun_user">Tak</a><a href="#" class="link_dodaj nie">Nie</a>
		</div>
	</div>