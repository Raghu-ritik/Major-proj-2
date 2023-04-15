<?php
// include('./constant/layout/head.php');
session_start();

require_once('cafe_load.php');

if (!isset($_REQUEST['last_message'])) {
    $_REQUEST['last_message'] = '';
}
$allCustomer = array();
draw_header("UserDashboard","admin");
$CustomerObj = new CustomerDAO();
    $allCustomer = $CustomerObj->getOnlyCustomer();
    if($allCustomer){
        $GLOBALS['smarty']->assign('allusers', $allCustomer);
    }
     


    if (!isset($_POST['login'])) {
        $redirection = (isset($_REQUEST['redirection']) ? $_REQUEST['redirection'] : '');
        drawAdminSideBar();
        $GLOBALS['smarty']->assign('redirection', htmlentities($redirection, ENT_QUOTES));
        display_smarty_template('user_show.tpl',"modifyUser");
    }
     
    display_smarty_template('layouts/footer.tpl',"user");
    ?>