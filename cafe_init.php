<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    require_once("DBUtil\DBConnect.php");
    require_once('functions.php');
    require('./DAO/CustomerDAO.php');
    require('./DAO/AdminDAO.php');
    require('./DAO/UsersDAO.php');
    require('./DAO/ProductDAO.php');
    require('./DAO/ContactUSDAO.php');

    require('./POJO/UsersPOJO.php');

    require('./POJO/OrdersPOJO.php');
    require('./DAO/OrdersDAO.php');
    require('./POJO/contactusPOJO.php');
  
    /*
    * Common functions
    */

?>