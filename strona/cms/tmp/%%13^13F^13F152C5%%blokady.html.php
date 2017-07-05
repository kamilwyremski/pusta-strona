<?php /* Smarty version 2.6.26, created on 2014-03-17 19:06:58
         compiled from blokady.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'blokady.html', 9, false),array('modifier', 'date_format', 'blokady.html', 11, false),)), $this); ?>
﻿	<div class="center"><a href="#" class="link_dodaj" id="ban_user_link">Zablokuj użytkownika</a></div>
	
	<?php if ($this->_tpl_vars['ban']): ?>
		<table id="ban">
			<tr><td colspan="4">Zablokowani użytkownicy</td></tr>
			<tr><td></td><td>E-mail</td><td>Data</td><td>Usuń</td></tr>
			<?php unset($this->_sections['ban']);
$this->_sections['ban']['name'] = 'ban';
$this->_sections['ban']['loop'] = is_array($_loop=$this->_tpl_vars['ban']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ban']['show'] = true;
$this->_sections['ban']['max'] = $this->_sections['ban']['loop'];
$this->_sections['ban']['step'] = 1;
$this->_sections['ban']['start'] = $this->_sections['ban']['step'] > 0 ? 0 : $this->_sections['ban']['loop']-1;
if ($this->_sections['ban']['show']) {
    $this->_sections['ban']['total'] = $this->_sections['ban']['loop'];
    if ($this->_sections['ban']['total'] == 0)
        $this->_sections['ban']['show'] = false;
} else
    $this->_sections['ban']['total'] = 0;
if ($this->_sections['ban']['show']):

            for ($this->_sections['ban']['index'] = $this->_sections['ban']['start'], $this->_sections['ban']['iteration'] = 1;
                 $this->_sections['ban']['iteration'] <= $this->_sections['ban']['total'];
                 $this->_sections['ban']['index'] += $this->_sections['ban']['step'], $this->_sections['ban']['iteration']++):
$this->_sections['ban']['rownum'] = $this->_sections['ban']['iteration'];
$this->_sections['ban']['index_prev'] = $this->_sections['ban']['index'] - $this->_sections['ban']['step'];
$this->_sections['ban']['index_next'] = $this->_sections['ban']['index'] + $this->_sections['ban']['step'];
$this->_sections['ban']['first']      = ($this->_sections['ban']['iteration'] == 1);
$this->_sections['ban']['last']       = ($this->_sections['ban']['iteration'] == $this->_sections['ban']['total']);
?>
				<tr>
					<td><?php echo smarty_function_counter(array(), $this);?>
</td>
					<td><?php echo $this->_tpl_vars['ban'][$this->_sections['ban']['index']]['email']; ?>
</a></td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['ban'][$this->_sections['ban']['index']]['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%e-%m-%Y") : smarty_modifier_date_format($_tmp, "%e-%m-%Y")); ?>
</td>
					<td><a href="#" data-id="<?php echo $this->_tpl_vars['ban'][$this->_sections['ban']['index']]['id']; ?>
" class="usun_ban"><img src="img/delete.png" alt="Usuń"/></a></td>
				</tr>
			<?php endfor; endif; ?>
		</table>
	<?php else: ?>
		<br><br><h1>Brak zablokowanych użytkowników</h1>
	<?php endif; ?>
	<div class="page_box" id="ban_user_box">
		<div id="ban_user">
			<h1>Zablokuj użytkownika:</h1>
			<span class="red ban"></span>
			<input class="input" type="text" name="email" id="email" placeholder="E-mail"><br>
			<input type="submit" name="add" value="Dodaj" class="link_dodaj" id="tak_ban"/>
			<input type="reset" name="cancel" value="Anuluj" class="link_dodaj nie"/>
		</div>
	</div>