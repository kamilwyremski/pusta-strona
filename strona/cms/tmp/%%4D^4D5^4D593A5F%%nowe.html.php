<?php /* Smarty version 2.6.26, created on 2014-03-13 11:43:05
         compiled from nowe.html */ ?>
﻿<?php if (isset ( $this->_tpl_vars['nowe_kategorie'] ) || isset ( $this->_tpl_vars['filmy'] ) || isset ( $this->_tpl_vars['filmy2'] )): ?>
	<?php if (isset ( $this->_tpl_vars['nowe_kategorie'] )): ?>
	<table id="table_nowe_kategorie">
		<tr>
			<td colspan="3">Sugerowane nowe kategorie</td>
		</tr>
		<tr>
			<td>Nazwa</td><td>Dodaj</td><td>Usuń</td>
		</tr>
		<?php unset($this->_sections['nowe_kategorie']);
$this->_sections['nowe_kategorie']['name'] = 'nowe_kategorie';
$this->_sections['nowe_kategorie']['loop'] = is_array($_loop=$this->_tpl_vars['nowe_kategorie']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['nowe_kategorie']['show'] = true;
$this->_sections['nowe_kategorie']['max'] = $this->_sections['nowe_kategorie']['loop'];
$this->_sections['nowe_kategorie']['step'] = 1;
$this->_sections['nowe_kategorie']['start'] = $this->_sections['nowe_kategorie']['step'] > 0 ? 0 : $this->_sections['nowe_kategorie']['loop']-1;
if ($this->_sections['nowe_kategorie']['show']) {
    $this->_sections['nowe_kategorie']['total'] = $this->_sections['nowe_kategorie']['loop'];
    if ($this->_sections['nowe_kategorie']['total'] == 0)
        $this->_sections['nowe_kategorie']['show'] = false;
} else
    $this->_sections['nowe_kategorie']['total'] = 0;
if ($this->_sections['nowe_kategorie']['show']):

            for ($this->_sections['nowe_kategorie']['index'] = $this->_sections['nowe_kategorie']['start'], $this->_sections['nowe_kategorie']['iteration'] = 1;
                 $this->_sections['nowe_kategorie']['iteration'] <= $this->_sections['nowe_kategorie']['total'];
                 $this->_sections['nowe_kategorie']['index'] += $this->_sections['nowe_kategorie']['step'], $this->_sections['nowe_kategorie']['iteration']++):
$this->_sections['nowe_kategorie']['rownum'] = $this->_sections['nowe_kategorie']['iteration'];
$this->_sections['nowe_kategorie']['index_prev'] = $this->_sections['nowe_kategorie']['index'] - $this->_sections['nowe_kategorie']['step'];
$this->_sections['nowe_kategorie']['index_next'] = $this->_sections['nowe_kategorie']['index'] + $this->_sections['nowe_kategorie']['step'];
$this->_sections['nowe_kategorie']['first']      = ($this->_sections['nowe_kategorie']['iteration'] == 1);
$this->_sections['nowe_kategorie']['last']       = ($this->_sections['nowe_kategorie']['iteration'] == $this->_sections['nowe_kategorie']['total']);
?>
			<tr>
				<td><?php echo $this->_tpl_vars['nowe_kategorie'][$this->_sections['nowe_kategorie']['index']]['new_category']; ?>
</td>
				<td><a href="index.php?nowe&dodaj_kat=<?php echo $this->_tpl_vars['nowe_kategorie'][$this->_sections['nowe_kategorie']['index']]['id']; ?>
"><img src="img/add.png" alt="Dodaj"/></a></td>
				<td><a href="index.php?nowe&usun_kat=<?php echo $this->_tpl_vars['nowe_kategorie'][$this->_sections['nowe_kategorie']['index']]['id']; ?>
"><img src="img/delete.png" alt="Usuń"/></a></td>
			</tr>
		<?php endfor; endif; ?>
	</table>
	<?php endif; ?>
	
	<?php if (isset ( $this->_tpl_vars['filmy'] ) || isset ( $this->_tpl_vars['filmy2'] )): ?>
	<table id="table_nowe">
		<tr>
			<td colspan="7">Sugerowane nowe filmy:</td>
		</tr>
		<tr>
			<td>Nazwa</td><td>Kategoria</td><td>URL</td><td>Miniaturka</td><td>Kto dodał</td><td>Dodaj</td><td>Usuń</td>
		</tr>
		<?php unset($this->_sections['filmy']);
$this->_sections['filmy']['name'] = 'filmy';
$this->_sections['filmy']['loop'] = is_array($_loop=$this->_tpl_vars['filmy']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['filmy']['show'] = true;
$this->_sections['filmy']['max'] = $this->_sections['filmy']['loop'];
$this->_sections['filmy']['step'] = 1;
$this->_sections['filmy']['start'] = $this->_sections['filmy']['step'] > 0 ? 0 : $this->_sections['filmy']['loop']-1;
if ($this->_sections['filmy']['show']) {
    $this->_sections['filmy']['total'] = $this->_sections['filmy']['loop'];
    if ($this->_sections['filmy']['total'] == 0)
        $this->_sections['filmy']['show'] = false;
} else
    $this->_sections['filmy']['total'] = 0;
if ($this->_sections['filmy']['show']):

            for ($this->_sections['filmy']['index'] = $this->_sections['filmy']['start'], $this->_sections['filmy']['iteration'] = 1;
                 $this->_sections['filmy']['iteration'] <= $this->_sections['filmy']['total'];
                 $this->_sections['filmy']['index'] += $this->_sections['filmy']['step'], $this->_sections['filmy']['iteration']++):
$this->_sections['filmy']['rownum'] = $this->_sections['filmy']['iteration'];
$this->_sections['filmy']['index_prev'] = $this->_sections['filmy']['index'] - $this->_sections['filmy']['step'];
$this->_sections['filmy']['index_next'] = $this->_sections['filmy']['index'] + $this->_sections['filmy']['step'];
$this->_sections['filmy']['first']      = ($this->_sections['filmy']['iteration'] == 1);
$this->_sections['filmy']['last']       = ($this->_sections['filmy']['iteration'] == $this->_sections['filmy']['total']);
?>
			<tr>
				<td><?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['files_name']; ?>
</td>
				<td><a href="http://wyremski.pl/bajki?kategoria=<?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['category_id']; ?>
"><?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['category_name']; ?>
</a></td>
				<?php if (! $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['url'] == ""): ?>
					<td><a href="<?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['url']; ?>
</a></td>
				<?php else: ?>
					<td><p><?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['files_code']; ?>
</p></td>
				<?php endif; ?>
				<td><a href="<?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['thumb']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['thumb']; ?>
" class="thumb"/></a></td>
				<td><?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['user']; ?>
</td>
				<td><a href="index.php?nowe&dodaj_film=<?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['files_id']; ?>
"><img src="img/add.png" alt="Dodaj"/></a></td>
				<td><a href="index.php?nowe&usun_film=<?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['files_id']; ?>
"><img src="img/delete.png" alt="Usuń"/></a></td>
			</tr>
		<?php endfor; endif; ?>
		<?php unset($this->_sections['filmy2']);
$this->_sections['filmy2']['name'] = 'filmy2';
$this->_sections['filmy2']['loop'] = is_array($_loop=$this->_tpl_vars['filmy2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['filmy2']['show'] = true;
$this->_sections['filmy2']['max'] = $this->_sections['filmy2']['loop'];
$this->_sections['filmy2']['step'] = 1;
$this->_sections['filmy2']['start'] = $this->_sections['filmy2']['step'] > 0 ? 0 : $this->_sections['filmy2']['loop']-1;
if ($this->_sections['filmy2']['show']) {
    $this->_sections['filmy2']['total'] = $this->_sections['filmy2']['loop'];
    if ($this->_sections['filmy2']['total'] == 0)
        $this->_sections['filmy2']['show'] = false;
} else
    $this->_sections['filmy2']['total'] = 0;
if ($this->_sections['filmy2']['show']):

            for ($this->_sections['filmy2']['index'] = $this->_sections['filmy2']['start'], $this->_sections['filmy2']['iteration'] = 1;
                 $this->_sections['filmy2']['iteration'] <= $this->_sections['filmy2']['total'];
                 $this->_sections['filmy2']['index'] += $this->_sections['filmy2']['step'], $this->_sections['filmy2']['iteration']++):
$this->_sections['filmy2']['rownum'] = $this->_sections['filmy2']['iteration'];
$this->_sections['filmy2']['index_prev'] = $this->_sections['filmy2']['index'] - $this->_sections['filmy2']['step'];
$this->_sections['filmy2']['index_next'] = $this->_sections['filmy2']['index'] + $this->_sections['filmy2']['step'];
$this->_sections['filmy2']['first']      = ($this->_sections['filmy2']['iteration'] == 1);
$this->_sections['filmy2']['last']       = ($this->_sections['filmy2']['iteration'] == $this->_sections['filmy2']['total']);
?>
			<tr>
				<td><?php echo $this->_tpl_vars['filmy2'][$this->_sections['filmy2']['index']]['files_name']; ?>
</td>
				<td><span>Wybierz kategorie</span>
					<select name="category" class="input_sug">
						<option value="" selected="selected">Wybierz</option>
						<?php $_from = $this->_tpl_vars['kategorie']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
							<option value="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
					</select></td>
				<?php if (! $this->_tpl_vars['filmy2'][$this->_sections['filmy2']['index']]['url'] == ""): ?>
					<td><a href="<?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['url']; ?>
</a></td>
				<?php else: ?>
					<td><p><?php echo $this->_tpl_vars['filmy2'][$this->_sections['filmy2']['index']]['files_code']; ?>
</p></td>
				<?php endif; ?>
				<td><a href="<?php echo $this->_tpl_vars['filmy2'][$this->_sections['filmy2']['index']]['thumb']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['filmy2'][$this->_sections['filmy2']['index']]['thumb']; ?>
" class="thumb"/></a></td>
				<td><?php echo $this->_tpl_vars['filmy2'][$this->_sections['filmy2']['index']]['user']; ?>
</td>
				<td><a href="#" data-id="<?php echo $this->_tpl_vars['filmy2'][$this->_sections['filmy2']['index']]['files_id']; ?>
" class="dodaj_sug"><img src="img/add.png" alt="Dodaj"/></a></td>
				<td><a href="index.php?nowe&usun_film=<?php echo $this->_tpl_vars['filmy2'][$this->_sections['filmy2']['index']]['files_id']; ?>
"><img src="img/delete.png" alt="Usuń"/></a></td>
			</tr>
		<?php endfor; endif; ?>
	</table>
	<?php endif; ?>
<?php else: ?>
	<br><br><h1>Brak filmów sugerowanych przez użytkowników</h1>
<?php endif; ?>
	
	
	<br><br><br><br>