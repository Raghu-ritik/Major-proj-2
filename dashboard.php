<?php
// include('./constant/layout/head.php');
session_start();

require_once('cafe_load.php');

if (!isset($_REQUEST['last_message'])) {
    $_REQUEST['last_message'] = '';
}

 
    draw_header("UserDashboard");
// include('./constant/layout/header.php');
// include('./constant/layout/sidebar.php');

// include('./constant/layout/customFooter.php');

if (!isset($_POST['checkout'])) {
    $allProducts = ProductDAO::getAllProducts();
    // print_r($allProducts);
    // die;
    $GLOBALS['smarty']->assign('allProducts',$allProducts);
    $redirection = (isset($_REQUEST['redirection']) ? $_REQUEST['redirection'] : '');
    drawUserSideBar();
    $GLOBALS['smarty']->assign('redirection', htmlentities($redirection, ENT_QUOTES));
    display_smarty_template('dashboard.tpl',"user");
}
 
display_smarty_template('layouts/footer.tpl',"user");
?>