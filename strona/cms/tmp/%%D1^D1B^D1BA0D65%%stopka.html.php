<?php /* Smarty version 2.6.26, created on 2014-03-17 19:07:33
         compiled from stopka.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'stopka.html', 12, false),)), $this); ?>
﻿	<div class="center"><a href="#" class="link_dodaj" id="stopka_link">Dodaj link</a></div>
	<?php if ($this->_tpl_vars['footer']): ?>
	<table id="stopka_table">
		<tr>
			<td colspan="5">Stopka "<?php echo $this->_tpl_vars['foo_nazwa']; ?>
"</td>
		</tr>
		<tr>
			<td></td><td>Tytuł</td><td>Url</td><td>Edytuj</td><td>Usuń</td>
		</tr>
			<?php unset($this->_sections['footer']);
$this->_sections['footer']['name'] = 'footer';
$this->_sections['footer']['loop'] = is_array($_loop=$this->_tpl_vars['footer']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['footer']['show'] = true;
$this->_sections['footer']['max'] = $this->_sections['footer']['loop'];
$this->_sections['footer']['step'] = 1;
$this->_sections['footer']['start'] = $this->_sections['footer']['step'] > 0 ? 0 : $this->_sections['footer']['loop']-1;
if ($this->_sections['footer']['show']) {
    $this->_sections['footer']['total'] = $this->_sections['footer']['loop'];
    if ($this->_sections['footer']['total'] == 0)
        $this->_sections['footer']['show'] = false;
} else
    $this->_sections['footer']['total'] = 0;
if ($this->_sections['footer']['show']):

            for ($this->_sections['footer']['index'] = $this->_sections['footer']['start'], $this->_sections['footer']['iteration'] = 1;
                 $this->_sections['footer']['iteration'] <= $this->_sections['footer']['total'];
                 $this->_sections['footer']['index'] += $this->_sections['footer']['step'], $this->_sections['footer']['iteration']++):
$this->_sections['footer']['rownum'] = $this->_sections['footer']['iteration'];
$this->_sections['footer']['index_prev'] = $this->_sections['footer']['index'] - $this->_sections['footer']['step'];
$this->_sections['footer']['index_next'] = $this->_sections['footer']['index'] + $this->_sections['footer']['step'];
$this->_sections['footer']['first']      = ($this->_sections['footer']['iteration'] == 1);
$this->_sections['footer']['last']       = ($this->_sections['footer']['iteration'] == $this->_sections['footer']['total']);
?>
				<tr>
					<td><?php echo smarty_function_counter(array(), $this);?>
</td>
					<td><?php echo $this->_tpl_vars['footer'][$this->_sections['footer']['index']]['title']; ?>
</a></td>
					<td><?php echo $this->_tpl_vars['footer'][$this->_sections['footer']['index']]['url']; ?>
</td>
					<td><a href="#" data-id="<?php echo $this->_tpl_vars['footer'][$this->_sections['footer']['index']]['id']; ?>
" data-title="<?php echo $this->_tpl_vars['footer'][$this->_sections['footer']['index']]['title']; ?>
" data-url="<?php echo $this->_tpl_vars['footer'][$this->_sections['footer']['index']]['url']; ?>
" class="edytuj_footer_link"><img src="img/pencil.png" alt="Edytuj"/></a></td>
					<td><a href="#" data-id="<?php echo $this->_tpl_vars['footer'][$this->_sections['footer']['index']]['id']; ?>
" data-title="<?php echo $this->_tpl_vars['footer'][$this->_sections['footer']['index']]['title']; ?>
" class="usun_footer"><img src="img/delete.png" alt="Usuń"/></a></td>
				</tr>
			<?php endfor; endif; ?>
	</table>

	<?php else: ?>
	<br><br><h1>Nie dodano jeszcze żadnych linków w kategorii "<?php echo $this->_tpl_vars['foo_nazwa']; ?>
"</h1>
	<?php endif; ?>
	
	<div class="page_box" id="stopka_box">
		<div id="stopka">
			<h1 data-type="<?php echo $this->_tpl_vars['foo_type']; ?>
">Dodaj link:</h1>
			<span class="red title"></span>
			<input class="input" type="text" name="title" id="title" placeholder="Tytuł linka"><br>
			<span class="red url"></span>
			<input class="input" type="text" name="url" id="url" placeholder="Adres URL"><br>
			<input type="submit" name="add" value="Dodaj" class="link_dodaj" id="tak_footer"/>
			<input type="reset" name="cancel" value="Anuluj" class="link_dodaj nie"/>
		</div>
	</div>
	
	<div class="page_box" id="stopka_box2">
		<div id="stopka2">
			<h1>Edytuj link:</h1>
			<span class="red title2"></span>
			<input class="input" type="text" name="title2" id="title2"><br>
			<span class="red url2"></span>
			<input class="input" type="text" name="url2" id="url2"><br>
			<input type="submit" name="add" value="Zapisz" class="link_dodaj" id="ed_footer"/>
			<input type="reset" name="cancel" value="Anuluj" class="link_dodaj nie"/>
		</div>
	</div>
	
	<div class="page_box" id="stopka_box3">
		<div id="stopka3">
			<h1>Usuń link:</h1>
			<h2></h2><br>
			<input type="submit" name="add" value="Usuń" class="link_dodaj" id="usun_footer"/>
			<input type="reset" name="cancel" value="Anuluj" class="link_dodaj nie"/>
		</div>
	</div>
	