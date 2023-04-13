<?php

session_start();

require_once('cafe_load.php');

if (!isset($_REQUEST['last_message'])) {
    $_REQUEST['last_message'] = '';
}

// callPluginMethod('onBeforeLogin');
$loginMessage = '';
$GLOBALS['smarty']->assign('loginMessage', $loginMessage);
if (isset($_SESSION['uid'])) {
    // redirect to main page
    if (isset($_REQUEST['redirection'])) {
        redirect_visitor($_REQUEST['redirection']);
    } else {
        redirect_visitor('out.php');
    }
}
draw_Custom_Header();
$usertype='Customer';
if (isset($_POST['login'])) {
    $u= new UsersPOJO();
    $u->setEmail($_POST['frmuser']);
    $u->setPassword($_POST['frmpass']);
    $u->setUserType($usertype);
    $userDao = CustomerDAO::validateCustomer($u);
    
    if(isset($userDao['userid'])){
      $_SESSION['userid'] = $userDao['userid'];
      // redirect to main page
      if (isset($_REQUEST['redirection'])) {
          redirect_visitor($_REQUEST['redirection']);
      } else {
            $last_message = "Contact Message is saved !";
            Display_last_msg($last_message,"success");
            redirect_visitor('dashboard.php');
      }
    } else {
        $last_message = $userDao['error'];
        $GLOBALS['smarty']->assign('loginMessage', $last_message);
    }
} 

$redirection = (isset($_REQUEST['redirection']) ? $_REQUEST['redirection'] : '');

$GLOBALS['smarty']->assign('redirection', htmlentities($redirection, ENT_QUOTES));
display_smarty_template('login.tpl',"user");

display_smarty_template('layouts/CustomFooter.tpl',"user");

?>
