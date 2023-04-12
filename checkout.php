<?php
// include('./constant/layout/head.php');
session_start();

require_once('cafe_load.php');

if (!isset($_REQUEST['last_message'])) {
    $_REQUEST['last_message'] = '';
}

    draw_header("UserDashboard");
    
    $orderTotal = 0;
    $cart = array();
    foreach($_SESSION["cart"] as $keys => $values){
        $total = ($values["item_quantity"] * $values["item_price"]);
        $orderTotal = $orderTotal + $total;
    }

    $randNumber1 = rand(100000,999999); 
    $randNumber2 = rand(100000,999999); 
    $randNumber3 = rand(100000,999999);
    $orderNumber = $randNumber1.$randNumber2.$randNumber3;
    
    if(isset($_SESSION["cart"])){
        $cart = $_SESSION["cart"];
        $totalOrder = 0;
        $GLOBALS['smarty']->assign('orderNumber', $orderNumber);
        $GLOBALS['smarty']->assign('totalOrder', $orderTotal);
        $GLOBALS['smarty']->assign('cart', $cart);
    }

    $redirection = (isset($_REQUEST['redirection']) ? $_REQUEST['redirection'] : '');
    // drawUserSideBar();
    $GLOBALS['smarty']->assign('redirection', htmlentities($redirection, ENT_QUOTES));
    display_smarty_template('checkout.tpl',"user");