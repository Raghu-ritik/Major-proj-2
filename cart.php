<?php
// include('./constant/layout/head.php');
session_start();

require_once('cafe_load.php');

if (!isset($_REQUEST['last_message'])) {
    $_REQUEST['last_message'] = '';
}

 
    draw_header("UserDashboard");

    if(isset($_POST["add"])){
        if(isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"], "food_id");
            if(!in_array($_GET["id"], $item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'food_id' => $_GET["id"],
                    'item_name' => $_POST["item_name"],
                    'item_price' => $_POST["item_price"],
                    'item_id' => $_POST["item_id"],
                    'item_quantity' => $_POST["item_quantity"]
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="cart.php"</script>';
            } else {					
                echo '<script>window.location="cart.php"</script>';
            }
        } else {
            $item_array = array(
                'food_id' => $_GET["id"],
                'item_name' => $_POST["item_name"],
                'item_price' => $_POST["item_price"],
                'item_id' => $_POST["item_id"],
                'item_quantity' => $_POST["item_quantity"]
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if(isset($_GET["action"])){
        if($_GET["action"] == "delete"){
            foreach($_SESSION["cart"] as $keys => $values){
                if($values["food_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);						
                    echo '<script>window.location="cart.php"</script>';
                }
            }
        }
    }
    
    if(isset($_GET["action"])){
        if($_GET["action"] == "empty"){
            foreach($_SESSION["cart"] as $keys => $values){
                unset($_SESSION["cart"]);					
                echo '<script>window.location="cart.php"</script>';
            }
        }
    }
    $cart = array();
    if(isset($_SESSION["cart"])){
        $cart = $_SESSION["cart"];
        $totalOrder = 0;
        $GLOBALS['smarty']->assign('totalOrder', $totalOrder);
        $GLOBALS['smarty']->assign('cart', $cart);
    }
    $redirection = (isset($_REQUEST['redirection']) ? $_REQUEST['redirection'] : '');
    // drawUserSideBar();
    $GLOBALS['smarty']->assign('redirection', htmlentities($redirection, ENT_QUOTES));
    display_smarty_template('cart.tpl',"user");
 
display_smarty_template('layouts/footer.tpl',"user");
?>