<?php /* Smarty version 2.6.26, created on 2014-03-10 17:49:28
         compiled from komentarze.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'komentarze.html', 13, false),)), $this); ?>
﻿
	<table id="table_comments">
		<tr>
			<td colspan="4">Komentarze do filmu: <a href="../index.php?film=<?php echo $this->_tpl_vars['komentarze'][0]['files_id']; ?>
"><?php echo $this->_tpl_vars['komentarze'][0]['name']; ?>
</a></td>
		</tr>
		<tr>
			<td>Treść</td><td>Login</td><td>Czas</td><td>Usuń</td>
		</tr>
			<?php $_from = $this->_tpl_vars['komentarze']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
				<tr>
					<td><?php echo $this->_tpl_vars['item']['content']; ?>
</a></td>
					<td><?php echo $this->_tpl_vars['item']['login']; ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%e-%m-%Y") : smarty_modifier_date_format($_tmp, "%e-%m-%Y")); ?>
</td>
					<td><a href="index.php?komentarze=<?php echo $this->_tpl_vars['item']['files_id']; ?>
&usun=<?php echo $this->_tpl_vars['item']['id']; ?>
"><img src="img/delete.png" alt="Usuń"/></a></td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
	</table>
	<br><br><br><br>