<?php /* Smarty version 2.6.26, created on 2014-03-13 20:11:51
         compiled from kategorie.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'kategorie.html', 41, false),)), $this); ?>
﻿	<div class="page_box" id="usun_kat">
		<div id="usun_k">
			<h1>Usuń kategorie: <span></span></h1>
			<h3><span>35</span> filmów</h3>
			<a href="#" class="link_dodaj" id="tak_usun_kat">Tak</a><a href="#" class="link_dodaj nie">Nie</a>
		</div>
	</div>
	<div class="page_box" id="edytuj_kat">
		<div id="edyt_k">
			<h1>Edytuj nazwę: <span></span></h1>
			<form method="post" action="?zmien_kategorie=">
				<input class="input" type="text" name="kategoria_zmien"><br>
				<input type="submit" name="add" value="Zapisz" class="link_dodaj"/>
				<input type="reset" name="cancel" value="Anuluj" class="link_dodaj nie"/>
			</form>
		</div>
	</div>
	<div class="page_box" id="dodaj_kat">
		<div id="dodaj_k">
			<h1>Dodaj kategorie: </h1>
			<form method="post" action="?dodaj_kategorie">
				<input class="input" type="text" name="kategoria"><br>
				<input type="submit" name="add" value="Dodaj" class="link_dodaj"/>
				<input type="reset" name="cancel" value="Anuluj" class="link_dodaj nie"/>
			</form>
		</div>
	</div>
	
	<table id="table_kat">
		<tr>
			<td colspan="5"><a href="#" class="link_dodaj" id="dodaj_kategorie">Dodaj kategorie</a></td>
		</tr>
		<tr>
			<td colspan="5">Kategorie</td>
		</tr>
		<tr>
			<td></td><td>Nazwa</td><td>Ilość</td><td>Edytuj</td><td>Usuń</td>
		</tr>
			<?php $_from = $this->_tpl_vars['kategorie']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
				<tr>
					<td><?php echo smarty_function_counter(array(), $this);?>
</td>
					<td><a href="http://bajkaonline.pl/?kategoria=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</a></td>
					<td><?php echo $this->_tpl_vars['item']['count']; ?>
</td><td><a href="#" data-id="<?php echo $this->_tpl_vars['item']['id']; ?>
" data-name="<?php echo $this->_tpl_vars['item']['name']; ?>
" class="edytuj_kategorie"><img src="img/pencil.png" alt="Edytuj"/></a></td>
					<td><a href="#" data-url="<?php echo $this->_tpl_vars['item']['id']; ?>
" data-name="<?php echo $this->_tpl_vars['item']['name']; ?>
" data-count="<?php echo $this->_tpl_vars['item']['count']; ?>
" class="usun_kategorie"><img src="img/delete.png" alt="Usuń"/></a></td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
	</table>
	<br><br><br><br>