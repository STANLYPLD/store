<?php /* Smarty version Smarty-3.1.18, created on 2016-09-05 20:38:28
         compiled from "./templates/regform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193594807357cda323e1cb43-43967578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb0412272be163348e72014ef4306fe99a56291c' => 
    array (
      0 => './templates/regform.tpl',
      1 => 1473097104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193594807357cda323e1cb43-43967578',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57cda323e2c977_53088534',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cda323e2c977_53088534')) {function content_57cda323e2c977_53088534($_smarty_tpl) {?><form id='register' action='register' method='post'
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
 
</fieldset>
</form><?php }} ?>
