<?php /* Smarty version Smarty-3.1.18, created on 2016-09-05 22:17:08
         compiled from "./templates/regform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69591268757cdb90f6251f4-85526762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb0412272be163348e72014ef4306fe99a56291c' => 
    array (
      0 => './templates/regform.tpl',
      1 => 1473103023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69591268757cdb90f6251f4-85526762',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57cdb90f626177_93377158',
  'variables' => 
  array (
    'ERR2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cdb90f626177_93377158')) {function content_57cdb90f626177_93377158($_smarty_tpl) {?><form id='register' action='register' method='post'
    accept-charset='UTF-8'>
<fieldset >
<legend>Register</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<label for='name' >Your Full Name*: </label>
<input type='text' name='name' id='name' maxlength="50" />
<label for='email' >Email Address*:</label>
<input type='text' name='mail' id='email' maxlength="50" />
<label for='phone' >Phone number*:</label>
<input type='text' name='phone' id='Phone' maxlength="50" />
<label for='password' >Password*:</label>
<input type='password' name='pass' id='password' maxlength="50" />
<input type='submit' name='Submit' value='Submit' />
<h1><?php if (isset($_smarty_tpl->tpl_vars['ERR2']->value)) {?><?php echo $_smarty_tpl->tpl_vars['ERR2']->value;?>
<?php }?></h1>
 
</fieldset>
</form><?php }} ?>
