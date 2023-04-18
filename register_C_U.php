<?php

session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
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
$registerMSG = '';
$usertype='Customer';
if (isset($_POST['register'])) {
    $u= new UsersPOJO();
    if($_POST['Passwd'] !== $_POST['ConfPasswd']){
        $registerMSG = "Password and Confirm Password don't match";
        $GLOBALS['smarty']->assign('registerMSG', $registerMSG);
    }
    if(UsersDAO::getUserByEmailId($_POST['Emails'])){
        $registerMSG = "Email already Exists";
        $GLOBALS['smarty']->assign('registerMSG', $registerMSG);
    }
    else{
        $u->setUserName($_POST['FullName']);
        $u->setEmail($_POST['Emails']);
        $u->setPhoneNo($_POST['PhoneNums']);
        $u->setPassword($_POST['ConfPasswd']);
        $u->setUserType($usertype);
        $userDao = CustomerDAO::addCustomer($u);
        
        if($userDao){
            $_SESSION['uid'] = $id;
            $registerMSG = "SuccessFully Registered Please Verify your Account & login.";
            $GLOBALS['smarty']->assign('registerMSG', $registerMSG);
            // redirect to main page
            if (isset($_REQUEST['redirection'])) {
                redirect_visitor($_REQUEST['redirection']);
            } else {
                $registerMSG = "SuccessFully Registered Please Verify your Account & login.";
                $GLOBALS['smarty']->assign('loginMessage', $registerMSG);
                redirect_visitor('login_C_U.php');
            }
        } else {
            $registerMSG = "There is some configuration error !!<br> Please Try Later!";
        }     
    }
} elseif (!isset($_POST['login'])) {
    $GLOBALS['smarty']->assign('registerMSG', $registerMSG);
    $redirection = (isset($_REQUEST['redirection']) ? $_REQUEST['redirection'] : '');
    $GLOBALS['smarty']->assign('redirection', htmlentities($redirection, ENT_QUOTES));
    display_smarty_template('register.tpl',"user");
} else {
    echo 'Check your config';
}
display_smarty_template('layouts/CustomFooter.tpl',"user");

?>
