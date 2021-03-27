<?php
/* Smarty version 3.1.39, created on 2021-03-27 13:00:12
  from 'C:\Serwery i inne szmery\xamp\htdocs\projekt3_szablonowanie\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605f1e4c97d0d7_69163866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9770d732d4e062dc70f4a075e13d98d566c102f2' => 
    array (
      0 => 'C:\\Serwery i inne szmery\\xamp\\htdocs\\projekt3_szablonowanie\\app\\calc.tpl',
      1 => 1616846410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605f1e4c97d0d7_69163866 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1775009423605f1e4c96fcc7_85658000', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_1775009423605f1e4c96fcc7_85658000 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1775009423605f1e4c96fcc7_85658000',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <div class="box">
	<div class="content">
            <h2 class="align-center">Oblicz rezystor</h2>
            <hr />
            <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
                    <fieldset>
		<div class="field half first">
                    <label for="v1">Napięcie zasilania (V):</label>
                    <input name="v1" id="v1" type="text" placeholder="Napięcie zasilania (V)" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['v1'];?>
">
		</div>
		<div class="field half">
                    <label for="v2">Napięcie przewodzenia (V):</label>
                    <input name="v2" id="v2" type="text" placeholder="Napięcie przewodzenia (V)" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['v2'];?>
">
		</div>
		<div class="field half first">
                    <label for="amp">Prąd przewodzenia (mA):</label>
                    <input name="amp" id="amp" type="text" placeholder="Prąd przewodzenia (mA)" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['amp'];?>
">
		</div>
		<ul class="actions align-center">
                    <li><input value="Oblicz wartość rezystora" class="button special" type="submit"></li>
		</ul>
                    </fieldset>
		</form>
	</div>
    </div>
    </div>

<div style="width:90%; margin: 2em auto;">
                    
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
	<h4>Wynik:</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['resistor']->value;?>
 Ohm
	</p>
<?php }?>
</div>
<?php
}
}
/* {/block 'content'} */
}
