<?php /* Smarty version Smarty-3.1.18, created on 2016-09-06 16:18:28
         compiled from ".\templates\regform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:803857cea44381f3d7-50944712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef75011b4a338d8978bf73f09cbfb5a7b946d464' => 
    array (
      0 => '.\\templates\\regform.tpl',
      1 => 1473171504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '803857cea44381f3d7-50944712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57cea443880810_27880542',
  'variables' => 
  array (
    'res' => 0,
    'YES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cea443880810_27880542')) {function content_57cea443880810_27880542($_smarty_tpl) {?><form id='register' action='register' method='post'
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
</form>
<h1><?php if (isset($_smarty_tpl->tpl_vars['res']->value)) {?><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
<?php }?></h1><?php }} ?>
