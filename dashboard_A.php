<?php
// include('./constant/layout/head.php');
session_start();

require_once('cafe_load.php');

if (!isset($_REQUEST['last_message'])) {
    $_REQUEST['last_message'] = '';
}
$orderObj = array();
$countofAllCutomer = 0;
    draw_header("UserDashboard","admin");
    $orderObj = OrdersDAO::getAllOrders();
    if($orderObj){
        $GLOBALS['smarty']->assign('orderObj', $orderObj);
    }
    $CustomerObj = new CustomerDAO();
    $allCustomer = $CustomerObj->getOnlyCustomer();
    // $allActiveOrders =  $orderObj->getActiveOrderStatus();
    // echo "<pre>";
    if($CustomerObj){
        $countofAllCutomer = count($allCustomer);
        $GLOBALS['smarty']->assign('countofAllCutomer', $allCustomer);
    }
    print_r($countofAllCutomer);

  
if (!isset($_POST['login'])) {
    $redirection = (isset($_REQUEST['redirection']) ? $_REQUEST['redirection'] : '');
    drawAdminSideBar();
    $GLOBALS['smarty']->assign('redirection', htmlentities($redirection, ENT_QUOTES));
    display_smarty_template('dashboard.tpl',"admin");
}
 
display_smarty_template('layouts/footer.tpl',"user");
?>