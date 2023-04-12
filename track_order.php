<?php
session_start();

require_once('cafe_load.php');

// if (!isset($_REQUEST['last_message'])) {
//     $_REQUEST['last_message'] = '';
// }

    draw_header("UserDashboard");
    if(isset($_SESSION)){
        $currUser = $_SESSION['userid'];
        $OrderDao = new OrdersDAO();
        $allactive = $OrderDao->getActiveOrderStatus($currUser);
        $GLOBALS['smarty']->assign('allactive', $allactive);

    }
    $redirection = (isset($_REQUEST['redirection']) ? $_REQUEST['redirection'] : '');
    // drawUserSideBar();
    $GLOBALS['smarty']->assign('redirection', htmlentities($redirection, ENT_QUOTES));
    display_smarty_template('track_order.tpl',"user");


?>