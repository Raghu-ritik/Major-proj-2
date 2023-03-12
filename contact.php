<?php
    session_start();
    include("cafe_load.php");
    draw_header("UserDashboard");
    
    display_smarty_template("contact.tpl","user");
?>