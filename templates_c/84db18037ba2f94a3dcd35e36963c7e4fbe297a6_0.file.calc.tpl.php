<?php
/* Smarty version 3.1.39, created on 2021-03-26 19:14:47
  from 'C:\Serwery i inne szmery\xamp\htdocs\projekt3_szablonowanie\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605e24974851d8_73422316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84db18037ba2f94a3dcd35e36963c7e4fbe297a6' => 
    array (
      0 => 'C:\\Serwery i inne szmery\\xamp\\htdocs\\projekt3_szablonowanie\\app\\calc.tpl',
      1 => 1616782380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605e24974851d8_73422316 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1998870530605e2497476de1_26433069', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1860310293605e2497477988_43299849', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'footer'} */
class Block_1998870530605e2497476de1_26433069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1998870530605e2497476de1_26433069',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1860310293605e2497477988_43299849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1860310293605e2497477988_43299849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<section>
    <div class="box">
	<div class="content">
            <h2 class="align-center">Oblicz rezystor</h2>
            <hr />
		<form action="<?php echo '<?php ';?>
print(_APP_ROOT); <?php echo '?>';?>
/app/calc.php" method="post">
		<div class="field">
                    <label for="v1">Napięcie zasilania (V):</label>
                    <input name="v1" id="v1" type="text" placeholder="Napięcie zasilania (V)" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['v1'];?>
>
		</div>
		<div class="field">
                    <label for="v2">Napięcie przewodzenia (V):</label>
                    <input name="v2" id="v2" type="text" placeholder="Napięcie przewodzenia (V)" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['v2'];?>
>
		</div>
		<div class="field">
                    <label for="amp">Prąd przewodzenia (mA):</label>
                    <input name="amp" id="amp" type="text" placeholder="Prąd przewodzenia (mA)" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['amp'];?>
>
		</div>
		<ul class="actions align-center">
                    <li><input value="Oblicz" class="button special" type="submit"></li>
		</ul>
		</form>
	</div>
    </div>
</section>
    
<?php if ((isset($_smarty_tpl->tpl_vars['msg']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['msg']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msg']->value, 'msgs');
$_smarty_tpl->tpl_vars['msgs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msgs']->value) {
$_smarty_tpl->tpl_vars['msgs']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msgs']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['info']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['info']->value) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value, 'msgs');
$_smarty_tpl->tpl_vars['msgs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msgs']->value) {
$_smarty_tpl->tpl_vars['msgs']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msgs']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['resistor']->value))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['resistor']->value;?>

	</p>
<?php }?>
                    
<?php
}
}
/* {/block 'content'} */
}
