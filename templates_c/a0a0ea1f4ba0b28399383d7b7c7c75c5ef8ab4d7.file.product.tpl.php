<?php /* Smarty version Smarty-3.1.18, created on 2016-09-03 16:50:32
         compiled from ".\templates\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1759157cae338168590-72902156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0a0ea1f4ba0b28399383d7b7c7c75c5ef8ab4d7' => 
    array (
      0 => '.\\templates\\product.tpl',
      1 => 1472834338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1759157cae338168590-72902156',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PRODUCT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57cae3381ca3a9_13942245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cae3381ca3a9_13942245')) {function content_57cae3381ca3a9_13942245($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['PRODUCT']->value)) {?>

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
