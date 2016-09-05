<?php /* Smarty version Smarty-3.1.18, created on 2016-09-05 20:36:24
         compiled from "./templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:480358857cda2faa63c23-42195793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ef71fa9bffee4b2e45ea97bf20c2caac4cf263' => 
    array (
      0 => './templates/home.tpl',
      1 => 1473096978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '480358857cda2faa63c23-42195793',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57cda2fab08556_87702038',
  'variables' => 
  array (
    'ERR' => 0,
    'CATEGORIES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cda2fab08556_87702038')) {function content_57cda2fab08556_87702038($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <base href="/">
        <meta charset="utf-8"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>


 <div id="wrapper">
 <?php if (isset($_SESSION['admin'])&&$_SESSION['admin']=='555') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('adminMenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 <?php }?>

                <!-- login -->

   
    
        <div class="loginmodal-container">
            <h1><?php if (isset($_smarty_tpl->tpl_vars['ERR']->value)) {?><?php echo $_smarty_tpl->tpl_vars['ERR']->value;?>
<?php } else { ?>Login to Your Account<?php }?></h1>
            <form method="post" action="/client-login/">
                <input type="text" name="mail" placeholder="E-mail address">
                <input type="password" name="pass" placeholder="Password">
                <input type="submit" name="login" class="login loginmodal-submit" value="Login">
            </form>
        <div class="register">
           
           <form metod='post' action="/register/">
           <input type="submit" name="register" class="register" value="Register">
            </form>
            
            </div>
        </div>

              
        
        <!-- Sidebar -->
        <div class="col-sm-2 sidenav">
            <ul class="sidebar-nav">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kk'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['name'] = 'kk';
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['CATEGORIES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total']);
?>
                <li>
                    <a href="category/<?php echo $_smarty_tpl->tpl_vars['CATEGORIES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kk']['index']]['url'];?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['CATEGORIES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kk']['index']]['name']);?>
</a>
                </li>
            <?php endfor; endif; ?>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <div class="col-sm-10 content">
            <?php if (isset($_GET['cat'])) {?>         <?php echo $_smarty_tpl->getSubTemplate ('catproducts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
        <?php }?>
            <?php if (isset($_GET['product'])) {?>     <?php echo $_smarty_tpl->getSubTemplate ('product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
            <?php }?>
            <?php if (isset($_GET['adminlogin'])) {?>     <?php echo $_smarty_tpl->getSubTemplate ('adminlogin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
            <?php }?>
        </div>

    </div>
    



    </body>
</html>
<?php }} ?>
