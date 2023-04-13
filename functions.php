<?php

use Aura\Html\Escaper as e;

require_once('includes/smarty/libs/Smarty.class.php');
$GLOBALS['smarty'] = new Smarty();
$GLOBALS['smarty']->template_dir = dirname(__FILE__) . '/templates/common/';
$GLOBALS['smarty']->compile_dir = dirname(__FILE__) . '/templates_c/';

$GLOBALS['CONFIG']['base_url'] = base_url();

/**** SET g_ vars from Global Config arr ***/
foreach ($GLOBALS['CONFIG'] as $key => $value) {
    $GLOBALS['smarty']->assign('g_' . $key, $value);
}

function draw_Custom_Header(){
    display_smarty_template('layouts/CustomHeader.tpl',"user");
}



function draw_header($pageTitle,$userType="user", $lastmessage = '')
{
    // global $pdo;

    // $uid = (isset($_SESSION['uid']) ? $_SESSION['uid'] : '');

    // Is the uid set?
    // if ($uid != null) {
    //     $current_user_obj = new User($uid, $pdo);
    //     $GLOBALS['smarty']->assign('userName', $current_user_obj->getName());
    //     $GLOBALS['smarty']->assign('can_add', $current_user_obj->can_add);
    //     $GLOBALS['smarty']->assign('can_checkin', $current_user_obj->can_checkin);
    // }

    // // Are they an Admin?
    // if ($uid != null && $current_user_obj->isAdmin()) {
    //     $GLOBALS['smarty']->assign('isadmin', 'yes');
    // }

    // if (!isset($_REQUEST['state'])) {
    //     $_REQUEST['state'] = 1;
    // }

    // $lastmessage = (isset($_REQUEST['last_message']) ? $_REQUEST['last_message'] : $lastmessage);

    // // Set up the breadcrumbs
    // $crumb = new crumb();
    // $crumb->addCrumb(e::h($_REQUEST['state']), e::h($pageTitle), e::h($_SERVER['PHP_SELF']) . (isset($_SERVER['QUERY_STRING']) ? '?' . e::h($_SERVER['QUERY_STRING']) : ''));
    // $breadCrumb = $crumb->printTrail(e::h($_REQUEST['state']));

    // $GLOBALS['smarty']->assign('breadCrumb', $breadCrumb);
    // $GLOBALS['smarty']->assign('site_title', $GLOBALS['CONFIG']['title']);
    // $GLOBALS['smarty']->assign('base_url', $GLOBALS['CONFIG']['base_url']);
    // $GLOBALS['smarty']->assign('page_title', $pageTitle);
    // $GLOBALS['smarty']->assign('lastmessage', urldecode($lastmessage));
    display_smarty_template('/layouts/header.tpl',$userType);

}

function drawAdminSideBar(){
    display_smarty_template('layouts/dashboardSidebar.tpl',"admin");
}
function drawUserSideBar(){
    display_smarty_template('layouts/dashboardSidebar.tpl',"user");
}
/**
 * Custom redirection handler
 * @param string $url the internal page to redirect them to
 */
function redirect_visitor($url = '')
{
    if ($url == '') {
        header('Location:login_C_U.php');
        exit;
    } else {
        // Lets make sure its not an outside URL
        if (!preg_match('#^(http|https|ftp)://#', $url)) {
            header('Location:' . htmlentities($url, ENT_QUOTES));
            exit;
        } else {
            header('Location:login_C_U.php');
            exit;
        }
    }
}
/**
 * Translate a string using the global lang set.
 * @param string $s
 * @return string
 */
function msg($s)
{
    if (isset($GLOBALS['lang'][$s])) {
        return e::h($GLOBALS['lang'][$s]);
    } else {
        return $s;
    }
}
/*
 * callPluginMethod
 * @param string $method The name of the plugin method being envoked.
 * @param string $args Any arguments that should be passed to the plugin method
 * @return null
 */

 function callPluginMethod($method, $args = '')
 {
     foreach ($GLOBALS['plugin']->pluginslist as $value) {
         if (!valid_username($value)) {
             echo 'Sorry, your plugin ' . e::h($value) . ' is not setup properly';
         }
         $plugin_obj = new $value;
         $plugin_obj->$method($args);
     }
 }

 function valid_username($username)
{
    if (preg_match('/^\w+$/', $username)) {
        return true;
    } else {
        return false;
    }
}
function Display_last_msg($lastmessage,$typeof){
    $GLOBALS['smarty']->assign('lastmessage', $lastmessage);
    $GLOBALS['smarty']->assign('typeof', $typeof);
    display_smarty_template('layouts/StatusMsg.tpl',"user");
}
/*
 * This function will check for the existence of a template file
 * in the current template folder and if not there will search for it
 * in the templates/common folder. This is a form of over-ride for customizations
 * @param string $template_file The name of the template file ending in .tpl
*/
function display_smarty_template($template_file,$WhoseTemplate)
{
    /* @var $template_file string */
    if (file_exists(ABSPATH . '/templates/' .  $template_file)) {
        $GLOBALS['smarty']->display($template_file);
    } else {
        $GLOBALS['smarty']->display(ABSPATH . '/templates/' . $WhoseTemplate. '/'.  $template_file);
    }
}

function draw_footer($whoseTemplate)
{
    display_smarty_template('layouts/footer.tpl',$whoseTemplate);
}

function base_url(){
    // We don't want to re-write the base_url value when we are being called by a plugin
    if(!preg_match('/plug-ins*/', $_SERVER['REQUEST_URI'])) {
        return sprintf(
            "%s://%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['HTTP_HOST'].dirname($_SERVER['REQUEST_URI'])
        );
    } else {
        // Set the base url relative to the plug-ins folder when being called from there
        return "../../";

    }
}


?>