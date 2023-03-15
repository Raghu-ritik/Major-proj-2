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
if (isset($_POST['register'])) {
    $u= new UsersPOJO();
    if($_POST['Passwd'] !== $_POST['ConfPasswd']){
        die("Password and Confirm Password don't match");
    }
    if(!UsersDAO::getUserByEmailId($_POST['Emails'])){
        die("Email already Exists");
    }
    $u->setUserName($_POST['FullName']);
    $u->setEmail($_POST['Emails']);
    $u->setPhoneNo($_POST['PhoneNums']);
    $u->setPassword($_POST['ConfPasswd']);
    $u->setUserType($usertype);
    print_r($u);
    die();
    $userDao = CustomerDAO::addCustomer($u);
    
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
    display_smarty_template('register.tpl',"user");
} else {
    echo 'Check your config';
}
display_smarty_template('layouts/CustomFooter.tpl',"user");

?>
