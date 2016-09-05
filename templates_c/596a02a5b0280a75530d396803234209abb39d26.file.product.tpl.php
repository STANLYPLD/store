<?php /* Smarty version Smarty-3.1.18, created on 2016-09-05 21:54:04
         compiled from "./templates/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118237153257cdbf4c881f41-90388342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '596a02a5b0280a75530d396803234209abb39d26' => 
    array (
      0 => './templates/product.tpl',
      1 => 1473091590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118237153257cdbf4c881f41-90388342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PRODUCT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57cdbf4c88c1d2_74357368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cdbf4c88c1d2_74357368')) {function content_57cdbf4c88c1d2_74357368($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['PRODUCT']->value)) {?>

<div class="content">
    <h2><?php echo stripslashes($_smarty_tpl->tpl_vars['PRODUCT']->value[0]['name']);?>
</h2>
    <h4><?php echo stripslashes($_smarty_tpl->tpl_vars['PRODUCT']->value[0]['proizvoditel']);?>
</h4>
    <h4><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value[0]['price'];?>
</h4>
    <p><?php echo stripslashes($_smarty_tpl->tpl_vars['PRODUCT']->value[0]['opis']);?>
</p>
</div>
<?php } else { ?>

    No such product!!! Mother Fucker!!!

<?php }?><?php }} ?>
