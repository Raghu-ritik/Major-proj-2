
<?php
session_start();
require_once('cafe_load.php');
$userID = $_SESSION['userid'];
if (!isset($_REQUEST['last_message'])) {
    $_REQUEST['last_message'] = '';
}
    $UserCustomer = array();
    draw_header("UserDashboard","user");
    $CustomerObj = new CustomerDAO();
    $UserCustomer = $CustomerObj->getAnCustomer($userID);
 
    if(isset($_SESSION)){
        $currUser = $_SESSION['userid'];
        $OrderDao = new OrdersDAO();
        $allactivecount = $OrderDao->getOrderCount($userID);   
    }
    $GLOBALS['smarty']->assign('allactivecount', $allactivecount);


    if($UserCustomer){
        $GLOBALS['smarty']->assign('user', $UserCustomer);
    }
  
if (!isset($_POST['login'])) {
    $redirection = (isset($_REQUEST['redirection']) ? $_REQUEST['redirection'] : '');
 
    $GLOBALS['smarty']->assign('redirection', htmlentities($redirection, ENT_QUOTES));
    display_smarty_template('profile.tpl',"user");
}
 
// display_smarty_template('layouts/footer.tpl',"user");
?>

    