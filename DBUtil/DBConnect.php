<?php
class DBConnect{
    static $conn;
    public static function getConnection(){

                // $APP_DB_HOST="localhost";
                // $APP_DB_USER="root";
                // $APP_DB_PASS="";
                // $APP_DB_NAME="cafeteen";
                
                // While Push into the Serve
                $APP_DB_HOST="localhost";
                $APP_DB_USER="cafeteen";
                $APP_DB_PASS="RrEmail@1word";
                $APP_DB_NAME="cafeteen";
        /*
        * Connect to Database
        */

        $dsn = "mysql:host=" . $APP_DB_HOST . ";dbname=" . $APP_DB_NAME . ";charset=utf8";
        try {
            $pdo = new PDO($dsn, $APP_DB_USER, $APP_DB_PASS);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $GLOBALS['pdo'] = $pdo;
        return $pdo;
        // $conn=new mysqli($APP_DB_HOST,$APP_DB_USER,$APP_DB_PASS,$APP_DB_NAME);

        // if($conn->connect_error){
        //     die("Connection failed:".$conn->connect_error);
        // }
        // else
        // {
        //     echo "Connection successful";
        // }
        // return $conn;
    }
}
?>