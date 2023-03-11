<?php
// include('./constant/layout/head.php');
session_start();

require_once('cafe_load.php');

if (!isset($_REQUEST['last_message'])) {
    $_REQUEST['last_message'] = '';
}

 
    draw_header("UserDashboard");
// include('./constant/layout/header.php');
// include('./constant/layout/sidebar.php');

// include('./constant/layout/customFooter.php');



?>