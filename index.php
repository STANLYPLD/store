<?php
session_name('store');
session_start();

require_once 'libs/Smarty.class.php';
require_once 'logic/db.class.php';
    
$smarty = new Smarty;
$db  = new DB;

//$data = $logic->select("show tables");
//print_r($data);
if(isset($_GET['cat'])){
    $data = $db->select("select p.name, p.url, p.price from products p join category c on p.id_cat = c.id_cat where c.url= ?",
    array($_GET['cat']));    
    $smarty->assign('CATPRODUCTS', $data);
}
if(isset($_GET['product'])){
    $data = $db->select("select id_prod,name,opis,proizvoditel,price,price_2 from products where url= ?",
    array($_GET['product']));    
    $smarty->assign('PRODUCT', $data);
}

if(isset($_GET['clLogin'])){
    print_r($_POST);
}
if(isset($_GET['adminlogin'])){
    if(!empty($_POST)){
        print_r($_POST);
        $res = $db->select("select user, pass from users where user= ? and pass= ? ",
        array($_POST['user'], $_POST['pass']));
        
        if(!empty($res)){
            if($_POST['user'] == $res[0]['user'] && $_POST['pass'] == $res[0]['pass']){
                $_SESSION['admin'] = 555;
            }else $smarty->assign('ERR', 'Login incorrect.');
        }else $smarty->assign('ERR', 'Login incorrect.');
    }
    
}

$smarty->assign('CATEGORIES', $db->select("select id_cat,url,name from category order by name"));
$smarty->display('home.tpl');

?>
