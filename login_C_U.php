<?php

session_start();

require_once('cafe_load.php');

if (!isset($_REQUEST['last_message'])) {
    $_REQUEST['last_message'] = '';
}

// callPluginMethod('onBeforeLogin');

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
    
    if($userDao){
      $_SESSION['uid'] = $id;
      echo "Use is logging innn";
      // redirect to main page
      if (isset($_REQUEST['redirection'])) {
          redirect_visitor($_REQUEST['redirection']);
      } else {
          redirect_visitor('dashboard.php');
      }
    } else {
      echo "There is some error !!";
      // header('Location: error.php?ec=0');
    }

     
} elseif (!isset($_POST['login'])) {
    $redirection = (isset($_REQUEST['redirection']) ? $_REQUEST['redirection'] : '');

    $GLOBALS['smarty']->assign('redirection', htmlentities($redirection, ENT_QUOTES));
    display_smarty_template('login.tpl',"user");
} else {
    echo 'Check your config';
}
display_smarty_template('layouts/CustomFooter.tpl',"user");

?>