<?php

session_start();

include('./cafe_load.php');


if (isset($_SESSION['uid'])) {
    // redirect to main page
    if (isset($_REQUEST['redirection'])) {
        redirect_visitor($_REQUEST['redirection']);
    } else {
        redirect_visitor('out.php');
    }
}

session_destroy();
redirect_visitor('login_C_U.php');

?>