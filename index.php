<?php
require_once 'libs/Smarty.class.php';
require_once 'logic/logic.php';
$smarty = new Smarty;

if(isset($_GET['test'])){
    if($_GET['test'] == 6) $smarty->assign('AAA', 'oioi');
}

$smarty->assign('NAME', 'Muncho');
$smarty->assign('TABLES', $q);
$smarty->display('home.tpl');

?>
