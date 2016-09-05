<?php /* Smarty version Smarty-3.1.18, created on 2016-09-05 21:54:02
         compiled from "./templates/catproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153021603957cdbf4ae59de7-98018564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d6f0628bd6b64796b6bdfd0eb8616160e97ac63' => 
    array (
      0 => './templates/catproducts.tpl',
      1 => 1473091590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153021603957cdbf4ae59de7-98018564',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CATPRODUCTS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57cdbf4ae71fd4_40113065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cdbf4ae71fd4_40113065')) {function content_57cdbf4ae71fd4_40113065($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['name'] = 'cp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['CATPRODUCTS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['total']);
?>

<a href="product/<?php echo $_smarty_tpl->tpl_vars['CATPRODUCTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cp']['index']]['url'];?>
">
<div class="col-sm-4 content">
    <h3><?php echo stripslashes($_smarty_tpl->tpl_vars['CATPRODUCTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cp']['index']]['name']);?>
</h3>
    <p><?php echo $_smarty_tpl->tpl_vars['CATPRODUCTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cp']['index']]['price'];?>
</p>
</div>
</a>

<?php endfor; endif; ?><?php }} ?>
