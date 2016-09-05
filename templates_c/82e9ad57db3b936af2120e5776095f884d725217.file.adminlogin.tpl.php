<?php /* Smarty version Smarty-3.1.18, created on 2016-09-03 16:46:16
         compiled from ".\templates\adminlogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:969157cadbfa5d37b7-88875416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82e9ad57db3b936af2120e5776095f884d725217' => 
    array (
      0 => '.\\templates\\adminlogin.tpl',
      1 => 1472913968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '969157cadbfa5d37b7-88875416',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57cadbfa5d5338_38084938',
  'variables' => 
  array (
    'ERR' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cadbfa5d5338_38084938')) {function content_57cadbfa5d5338_38084938($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['ERR']->value)) {?><?php echo $_smarty_tpl->tpl_vars['ERR']->value;?>
<?php }?>
<form method="post" action="/admin-login/">
        <input type="text" name="user" placeholder="Username">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" name="login" class="login loginmodal-submit" value="Login">
</form><?php }} ?>
