
<?php
// include('./constant/layout/head.php');
session_start();

require_once('cafe_load.php');

if (!isset($_REQUEST['last_message'])) {
    $_REQUEST['last_message'] = '';
}
    $allManagers = array();
    draw_header("UserDashboard","admin");

    $ManagerObj = new ManagerDAO();
    $allManagers = $ManagerObj->getOnlyManagers();
    if($allManagers){
        $GLOBALS['smarty']->assign('allusers', $allManagers);
    }
     

  
if (!isset($_POST['login'])) {
    $redirection = (isset($_REQUEST['redirection']) ? $_REQUEST['redirection'] : '');
    drawAdminSideBar();
    $GLOBALS['smarty']->assign('redirection', htmlentities($redirection, ENT_QUOTES));
    display_smarty_template('user_show.tpl',"modifyUser");
}
 
// display_smarty_template('layouts/footer.tpl',"user");
?>