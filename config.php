<?php

if (!defined('config')) {
    define('config', 'true', false);

    // config.php - you should not need to change these
    define('APP_DB_NAME', isset($_ENV['APP_DB_NAME']) ? $_ENV['APP_DB_NAME'] : 'cafeteen');

    /** MySQL database username */
    define('APP_DB_USER', isset($_ENV['APP_DB_USER']) ? $_ENV['APP_DB_USER'] : 'root');

    /** MySQL database password */
    define('APP_DB_PASS', isset($_ENV['APP_DB_PASS'])? $_ENV['APP_DB_PASS'] : '');

    /** MySQL hostname */
    define('APP_DB_HOST', isset($_ENV['APP_DB_HOST']) ? $_ENV['APP_DB_HOST'] : 'localhost');

  
    $GLOBALS['CONFIG']['db_prefix'] = isset($_ENV['DB_PREFIX']) ? $_ENV['DB_PREFIX'] : 'odm_';

    /*** DO NOT EDIT BELOW THIS LINE ***/


 
    if (!defined('ABSPATH')) {
        if(isset($_ENV['IS_DOCKER'])) {
            define('ABSPATH', dirname(__FILE__) . '/../');
        } else {
            define('ABSPATH', dirname(__FILE__) . '/');
        }
    }
}


?>