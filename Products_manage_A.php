
<?php
// include('./constant/layout/head.php');
session_start();

// echo "<pre>";
require_once('cafe_load.php');

print_r($_GET);
// die;
if (!isset($_REQUEST['last_message'])) {
    $_REQUEST['last_message'] = '';
}

if(isset($_GET['action']) && $_GET['action']=="AddProduct"){
    display_smarty_template('products_add.tpl',"product");
    exit;
}

draw_header("UserDashboard","admin");
drawAdminSideBar();

if(isset($_GET['action']) &&  isset($_GET['data']) && $_GET['action']=="editProduct"){
    $data = $_GET['data'];
    $Product = ProductDAO::getProductById($data);
    $GLOBALS['smarty']->assign('Product', $Product[0]);
    display_smarty_template('products_edit.tpl',"product");
    exit;
}

if(isset($_GET['action']) &&  isset($_GET['data']) && $_GET['action']=="viewProduct"){
    $data = $_GET['data'];
    $Product = ProductDAO::getProductById($data);
    $GLOBALS['smarty']->assign('Product', $Product[0]);
    display_smarty_template('products_view.tpl',"product");
    exit;
}

if(isset($_GET['action']) &&  isset($_GET['data']) && $_GET['action']=="deleteProduct"){
    $data = $_GET['data'];
    $Product = ProductDAO::getProductById($data);
    $GLOBALS['smarty']->assign('Product', $Product[0]);
    display_smarty_template('products_delete.tpl',"product");
    exit;
}




if(isset($_GET['addprod']) || isset($_POST['foodAddSubmit']) && $_POST['foodAddSubmit']=="Add Products"){
    print_r($_POST);
    print_r($_FILES);
    die;
    display_smarty_template('products.tpl',"product");
    exit;
}
if(isset($_GET['editprod']) || isset($_POST['foodEDITSubmit']) && $_POST['foodEDITSubmit']=="EDIT Product"){
    print_r($_POST);
    print_r($_FILES);
    die;
    display_smarty_template('products.tpl',"product");
    exit;
}




$products = ProductDAO::getAllProducts();
$GLOBALS['smarty']->assign('AllProducts', $products);




if (!isset($_POST['login'])) {
    $redirection = (isset($_REQUEST['redirection']) ? $_REQUEST['redirection'] : '');
    $GLOBALS['smarty']->assign('redirection', htmlentities($redirection, ENT_QUOTES));
    display_smarty_template('products.tpl',"product");
}
 
// display_smarty_template('layouts/footer.tpl',"user");
?>