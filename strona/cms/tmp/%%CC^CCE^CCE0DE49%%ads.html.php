<?php /* Smarty version 2.6.26, created on 2014-03-17 19:01:02
         compiled from ads.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'ads.html', 12, false),array('modifier', 'date_format', 'ads.html', 16, false),)), $this); ?>
﻿<?php if ($this->_tpl_vars['ads_0'] || $this->_tpl_vars['ads_1']): ?>
	<?php if ($this->_tpl_vars['ads_0']): ?>
	<table id="ads_0">
		<tr>
			<td colspan="7">Nieaktywowane ogłoszenia z kategorii "<?php echo $this->_tpl_vars['ads']; ?>
"</td>
		</tr>
		<tr>
			<td></td><td>Treść</td><td>E-mail</td><td>Tel</td><td>Data</td><td>Aktywuj</td><td>Usuń</td>
		</tr>
			<?php unset($this->_sections['ads_0']);
$this->_sections['ads_0']['name'] = 'ads_0';
$this->_sections['ads_0']['loop'] = is_array($_loop=$this->_tpl_vars['ads_0']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ads_0']['show'] = true;
$this->_sections['ads_0']['max'] = $this->_sections['ads_0']['loop'];
$this->_sections['ads_0']['step'] = 1;
$this->_sections['ads_0']['start'] = $this->_sections['ads_0']['step'] > 0 ? 0 : $this->_sections['ads_0']['loop']-1;
if ($this->_sections['ads_0']['show']) {
    $this->_sections['ads_0']['total'] = $this->_sections['ads_0']['loop'];
    if ($this->_sections['ads_0']['total'] == 0)
        $this->_sections['ads_0']['show'] = false;
} else
    $this->_sections['ads_0']['total'] = 0;
if ($this->_sections['ads_0']['show']):

            for ($this->_sections['ads_0']['index'] = $this->_sections['ads_0']['start'], $this->_sections['ads_0']['iteration'] = 1;
                 $this->_sections['ads_0']['iteration'] <= $this->_sections['ads_0']['total'];
                 $this->_sections['ads_0']['index'] += $this->_sections['ads_0']['step'], $this->_sections['ads_0']['iteration']++):
$this->_sections['ads_0']['rownum'] = $this->_sections['ads_0']['iteration'];
$this->_sections['ads_0']['index_prev'] = $this->_sections['ads_0']['index'] - $this->_sections['ads_0']['step'];
$this->_sections['ads_0']['index_next'] = $this->_sections['ads_0']['index'] + $this->_sections['ads_0']['step'];
$this->_sections['ads_0']['first']      = ($this->_sections['ads_0']['iteration'] == 1);
$this->_sections['ads_0']['last']       = ($this->_sections['ads_0']['iteration'] == $this->_sections['ads_0']['total']);
?>
				<tr>
					<td><?php echo smarty_function_counter(array(), $this);?>
</td>
					<td><?php echo $this->_tpl_vars['ads_0'][$this->_sections['ads_0']['index']]['content']; ?>
</a></td>
					<td><?php echo $this->_tpl_vars['ads_0'][$this->_sections['ads_0']['index']]['email']; ?>
</td>
					<td><?php echo $this->_tpl_vars['ads_0'][$this->_sections['ads_0']['index']]['tel']; ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['ads_0'][$this->_sections['ads_0']['index']]['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%e-%m-%Y") : smarty_modifier_date_format($_tmp, "%e-%m-%Y")); ?>
</td>
					<td><a href="#" data-id="<?php echo $this->_tpl_vars['ads_0'][$this->_sections['ads_0']['index']]['id']; ?>
" data-type="<?php echo $this->_tpl_vars['ads']; ?>
" class="dodaj_ads"><img src="img/add.png" alt="Dodaj"/></a></td>
					<td><a href="#" data-id="<?php echo $this->_tpl_vars['ads_0'][$this->_sections['ads_0']['index']]['id']; ?>
" data-email="<?php echo $this->_tpl_vars['ads_1'][$this->_sections['ads_1']['index']]['email']; ?>
" data-type="<?php echo $this->_tpl_vars['ads']; ?>
" class="usun_ads"><img src="img/delete.png" alt="Usuń"/></a></td>
				</tr>
			<?php endfor; endif; ?>
	</table>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['ads_1']): ?>
	<table id="ads_1">
		<tr>
			<td colspan="6">Aktywowane ogłoszenia z kategorii "<?php echo $this->_tpl_vars['ads']; ?>
"</td>
		</tr>
		<tr>
			<td></td><td>Treść</td><td>E-mail</td><td>Tel</td><td>Data</td><td>Usuń</td>
		</tr>
			<?php unset($this->_sections['ads_1']);
$this->_sections['ads_1']['name'] = 'ads_1';
$this->_sections['ads_1']['loop'] = is_array($_loop=$this->_tpl_vars['ads_1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ads_1']['show'] = true;
$this->_sections['ads_1']['max'] = $this->_sections['ads_1']['loop'];
$this->_sections['ads_1']['step'] = 1;
$this->_sections['ads_1']['start'] = $this->_sections['ads_1']['step'] > 0 ? 0 : $this->_sections['ads_1']['loop']-1;
if ($this->_sections['ads_1']['show']) {
    $this->_sections['ads_1']['total'] = $this->_sections['ads_1']['loop'];
    if ($this->_sections['ads_1']['total'] == 0)
        $this->_sections['ads_1']['show'] = false;
} else
    $this->_sections['ads_1']['total'] = 0;
if ($this->_sections['ads_1']['show']):

            for ($this->_sections['ads_1']['index'] = $this->_sections['ads_1']['start'], $this->_sections['ads_1']['iteration'] = 1;
                 $this->_sections['ads_1']['iteration'] <= $this->_sections['ads_1']['total'];
                 $this->_sections['ads_1']['index'] += $this->_sections['ads_1']['step'], $this->_sections['ads_1']['iteration']++):
$this->_sections['ads_1']['rownum'] = $this->_sections['ads_1']['iteration'];
$this->_sections['ads_1']['index_prev'] = $this->_sections['ads_1']['index'] - $this->_sections['ads_1']['step'];
$this->_sections['ads_1']['index_next'] = $this->_sections['ads_1']['index'] + $this->_sections['ads_1']['step'];
$this->_sections['ads_1']['first']      = ($this->_sections['ads_1']['iteration'] == 1);
$this->_sections['ads_1']['last']       = ($this->_sections['ads_1']['iteration'] == $this->_sections['ads_1']['total']);
?>
				<tr>
					<td><?php echo smarty_function_counter(array(), $this);?>
</td>
					<td><?php echo $this->_tpl_vars['ads_1'][$this->_sections['ads_1']['index']]['content']; ?>
</a></td>
					<td><?php echo $this->_tpl_vars['ads_1'][$this->_sections['ads_1']['index']]['email']; ?>
</td>
					<td><?php echo $this->_tpl_vars['ads_1'][$this->_sections['ads_1']['index']]['tel']; ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['ads_1'][$this->_sections['ads_1']['index']]['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%e-%m-%Y") : smarty_modifier_date_format($_tmp, "%e-%m-%Y")); ?>
</td>
					<td><a href="#" data-id="<?php echo $this->_tpl_vars['ads_1'][$this->_sections['ads_1']['index']]['id']; ?>
" data-email="<?php echo $this->_tpl_vars['ads_1'][$this->_sections['ads_1']['index']]['email']; ?>
" data-type="<?php echo $this->_tpl_vars['ads']; ?>
" class="usun_ads"><img src="img/delete.png" alt="Usuń"/></a></td>
				</tr>
			<?php endfor; endif; ?>
	</table>
	<?php endif; ?>
<?php else: ?>
	<h1>Nie dodano jeszcze żadnych ogłoszeń w kategorii "<?php echo $this->_tpl_vars['ads']; ?>
"</h1>
<?php endif; ?>
	<div class="page_box" id="usun_ads_box">
		<div id="usun_ads">
			<h1>Usuń ogłoszenie użytkownika:</h1>
			<h3></h3>
			<a href="#" class="link_dodaj" id="tak_usun_ads">Tak</a><a href="#" class="link_dodaj nie">Nie</a>
		</div>
	</div>