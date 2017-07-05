<?php /* Smarty version 2.6.26, created on 2014-03-13 13:39:16
         compiled from filmy.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'filmy.html', 13, false),)), $this); ?>
﻿	<table id="table_film">
		<tr>
			<td colspan="7"><a href="#" class="link_dodaj" id="dodaj_film">Dodaj film</a></td>
		</tr>
		<tr>
			<td colspan="7">Filmy w kategorii: <?php echo $this->_tpl_vars['filmy'][0]['category_name']; ?>
</td>
		</tr>
		<tr>
			<td></td><td>Nazwa</td><td>Kategoria</td><td>URL / Kod</td><td>Miniaturka</td><td>Edytuj</td><td>Usuń</td>
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
				<td><?php echo smarty_function_counter(array(), $this);?>
</td>
				<td><a href="../index.php?film=<?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['files_id']; ?>
" data-id="<?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['files_id']; ?>
" data-name="<?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['name']; ?>
" class="a2"><?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['name']; ?>
</a>
				<span style="display:none" class="a3" data-description="<?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['description']; ?>
"><?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['description']; ?>
</span></td>
				<td><a href="../index.php?kategoria=<?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['category_id']; ?>
" data-id="<?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['category_id']; ?>
" class="a1"><?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['category_name']; ?>
</a></td>
				<?php if (! $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['url'] == ""): ?>
					<td><a href="<?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['url']; ?>
" target="_blank" class="a0"><?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['url']; ?>
</a></td>
				<?php else: ?>
					<td><span class="a5" ><?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['code']; ?>
</span></td>
				<?php endif; ?>
				<td><a href="<?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['thumb']; ?>
" target="_blank" class="a4"><img src="<?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['thumb']; ?>
" class="thumb"/></a></td>
				<td><a href="#" class="edytuj_film"><img src="img/pencil.png" alt="Edytuj"/></a></td>
				<td><a href="#" data-url="index.php?filmy=<?php echo $this->_tpl_vars['filmy'][0]['category_id']; ?>
&usun=<?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['files_id']; ?>
" data-name="<?php echo $this->_tpl_vars['filmy'][$this->_sections['filmy']['index']]['name']; ?>
" class="usun_film"><img src="img/delete.png" alt="Usuń"/></a></td>
			</tr>
		<?php endfor; endif; ?>
	</table>
	<br><br><br><br>
	<div class="page_box" id="usun_f">
		<div id="usun_fi">
			<h1>Usuń film: <span></span></h1>
			<a href="#" class="link_dodaj" id="tak_usun_film">Tak</a><a href="#" class="link_dodaj nie">Nie</a>
		</div>
	</div>
	<div class="page_box" id="dodaj_f">
		<div id="dodaj_fi">
			<h1>Dodaj film:</h1>
			<form method="post" action="index.php?filmy=<?php echo $this->_tpl_vars['kategoria_filmy']; ?>
&dodaj">
			<table>
				<tr>
					<td><label for="url">Adres URL (YouTube):</label></td>
					<td><input class="input" type="text" name="url"></td>
				</tr>
				<tr>
					<td><label for="code">Kod filmu (inne serwisy):</label></td>
					<td><input class="input" type="text" name="code"></td>
				</tr>
				<tr>
					<td><label for="category">Kategoria:</label></td>
					<td><select name="category" class="input">
							<?php $_from = $this->_tpl_vars['kategorie']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
								<option value="<?php echo $this->_tpl_vars['item']['id']; ?>
" <?php if ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['kategoria_filmy']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['item']['name']; ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select></td>
				</tr>	
				<tr>
					<td><label for="title">Tytuł:</label></td>
					<td><input class="input" type="text" name="title"></td>
				</tr>
				<tr>
					<td><label for="description">Opis:</label></td>
					<td><textarea class="input" type="text" name="description"></textarea></td>
				</tr>
				<tr>
					<td><label for="url">Miniaturka z URL:<br>(inne serwisy)</label></td>
					<td><input class="input" type="text" name="thumburl"></td>
				</tr>
			</table><br>
				<input type="submit" name="add" value="Dodaj" class="link_dodaj"/>
				<input type="reset" name="cancel" value="Anuluj" class="link_dodaj nie"/>
			</form>
		</div>
	</div>
	<div class="page_box" id="edytuj_f">
		<div id="edytuj_film">
			<h1>Edytuj film:</h1>
			<form method="post" action="index.php?filmy=<?php echo $this->_tpl_vars['kategoria_filmy']; ?>
&edytuj">
			<table>
				<tr>
					<td><label for="url">Adres URL:</label></td>
					<td><input class="input e0" type="text" name="url"></td>
				</tr>
				<tr>
					<td><label for="code">Kod filmu (inne serwisy):</label></td>
					<td><input class="input e6" type="text" name="code"></td>
				</tr>
				<tr>
					<td><label for="category">Kategoria:</label></td>
					<td><select name="category" class="input e1">
							<?php $_from = $this->_tpl_vars['kategorie']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
								<option value="<?php echo $this->_tpl_vars['item']['id']; ?>
" <?php if ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['kategoria_filmy']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['item']['name']; ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select></td>
				</tr>	
				<tr>
					<td><label for="title">Tytuł:</label></td>
					<td><input class="input e2" type="text" name="title"></td>
				</tr>
				<tr>
					<td><label for="description">Opis:</label></td>
					<td><textarea class="input e3" type="text" name="description"></textarea></td>
				</tr>
				<tr>
					<td><label for="url">Miniaturka z URL:<br>(inne serwisy)</label></td>
					<td><input class="input e4" type="text" name="thumburl">
					<input class="e5" type="text" name="id" style="display:none"></td>
				</tr>
			</table><br>
				<input type="submit" name="add" value="Zapisz" class="link_dodaj"/>
				<input type="reset" name="cancel" value="Anuluj" class="link_dodaj nie"/>
			</form>
		</div>
	</div>