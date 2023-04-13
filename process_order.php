<?php
// include('./constant/layout/head.php');
session_start();

require_once('cafe_load.php');

if (!isset($_REQUEST['last_message'])) {
    $_REQUEST['last_message'] = '';
}

    draw_header("UserDashboard");
    
    if(isset($_POST['placeorder'])){
        $GLOBALS['smarty']->assign('orderNumber',$_POST['orderNumber']);
        $total = 0;
        if(isset($_SESSION["cart"])) {
            foreach($_SESSION["cart"] as $keys => $values){
                $order = new OrdersPOJO();				
                $order->setPId($values["item_id"]);
                $order->setCId($_SESSION['userid']);
                $order->setMId("M101");
                $order->setQuantity($values["item_quantity"]);
                $order->setOrderToken($_POST['orderNumber']);
                $order->setPaymentType($_POST['PaymentType']);
                $OrderDao = OrdersDAO::addOrder($order);
            }
            $_SESSION["cart"] = array();
            unset($_SESSION["cart"]);	
        }
    }
    $redirection = (isset($_REQUEST['redirection']) ? $_REQUEST['redirection'] : '');
    // drawUserSideBar();
    $GLOBALS['smarty']->assign('redirection', htmlentities($redirection, ENT_QUOTES));
    display_smarty_template('process_order.tpl',"user");