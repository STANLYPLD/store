<?php /* Smarty version Smarty-3.1.18, created on 2016-09-05 16:20:58
         compiled from ".\templates\regform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:503957cd7f4a378525-19214035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef75011b4a338d8978bf73f09cbfb5a7b946d464' => 
    array (
      0 => '.\\templates\\regform.tpl',
      1 => 1473082844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '503957cd7f4a378525-19214035',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57cd7f4a3bfdd8_89202240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cd7f4a3bfdd8_89202240')) {function content_57cd7f4a3bfdd8_89202240($_smarty_tpl) {?><form id='register' action='register.php' method='post'
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
