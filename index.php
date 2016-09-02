<?php
require_once 'libs/Smarty.class.php';
require_once 'logic/logic.php';

$smarty = new Smarty;
$logic  = new Logic;

//$data = $logic->select("show tables");
//print_r($data);
if(isset($_GET['cat'])){
    $data = $logic->select("select p.name, p.url, p.price from products p join category c on p.id_cat = c.id_cat where c.url= ?",
    array($_GET['cat']));    
    $smarty->assign('CATPRODUCTS', $data);
}
if(isset($_GET['product'])){
    $data = $logic->select("select id_prod,name,opis,proizvoditel,price,price_2 from products where url= ?",
    array($_GET['product']));    
    $smarty->assign('PRODUCT', $data);
}



$smarty->assign('CATEGORIES', $logic->select("select id_cat,url,name from category order by name"));
$smarty->display('home.tpl');

?>
