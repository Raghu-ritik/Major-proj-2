<?php
 
if (file_exists('config.php')) {
    require_once('config.php');
} else {
    header('Location: index.php');
}

require_once(ABSPATH . 'cafe_init.php');


?>