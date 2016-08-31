<?php /* Smarty version Smarty-3.1.18, created on 2016-08-29 23:52:38
         compiled from "./templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173326318554182f37ef3e70-97896772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ef71fa9bffee4b2e45ea97bf20c2caac4cf263' => 
    array (
      0 => './templates/home.tpl',
      1 => 1472503909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173326318554182f37ef3e70-97896772',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54182f3807dd93_40455123',
  'variables' => 
  array (
    'NAME' => 0,
    'TABLES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54182f3807dd93_40455123')) {function content_54182f3807dd93_40455123($_smarty_tpl) {?><html>
<body>
<p>
	Az sym <?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>

</p>

<?php if ($_GET['test']==6) {?>
    <?php echo $_smarty_tpl->getSubTemplate ('mainMenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_GET['test']==5) {?>
    <p>
        evala bace, mashaala
    </p>
<?php } else { ?>
    <p>
        nishtooo
    </p>
<?php }?>


<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ss'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ss']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['name'] = 'ss';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TABLES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['total']);
?>
    <?php echo $_smarty_tpl->tpl_vars['TABLES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ss']['index']]['Tables_in_store'];?>
 <br>
<?php endfor; endif; ?>



</body>
</html>
<?php }} ?>
