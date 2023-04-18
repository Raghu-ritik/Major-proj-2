<?php

require_once("..\DBUtil\DBConnect.php");
        /**
         * provides with the active order of user by using userID
         */
        function getActiveOrderStatus($userID){
            $conn=DBConnect::getConnection();
            //prepared statement
            
            $query="SELECT * FROM `orders` where C_ID = :CID AND current_status < 500 ORDER BY `orders`.`O_ID` DESC";
            $stmt=$conn->prepare($query);
            $stmt->bindParam(':CID',$userID);
            $stmt->execute();
            $result=$stmt->fetchAll();
            if($stmt->rowCount()>0)
            {
                foreach($result as $key => $valo){
                    $queryP="SELECT * FROM `products` where P_ID = :pid";
                    $stmtP=$conn->prepare($queryP);
                    $stmtP->bindParam(':pid',$valo['P_ID']);
                    $stmtP->execute();
                    $resultPNew=$stmtP->fetchAll();
                    $result[$key]['P_Name'] = $resultPNew[0]['P_Name'];

                    $queryO="SELECT * FROM `status` where status_order = :st_or";
                    $stmt1=$conn->prepare($queryO);
                    $stmt1->bindParam(':st_or',$valo['current_status']);
                    $stmt1->execute();
                    $resultNew=$stmt1->fetchAll();
                    $result[$key]['current_status'] = $resultNew[0]['status_name'];
                }
                return $result;
            }
            else{
                return "No Orders Found !";
            }
        }

        function getAllOrders(){
            $conn=DBConnect::getConnection();
            
             
            //prepared statement
            $query="SELECT * FROM `orders` ORDER BY `orders`.`O_ID` DESC";
            $stmt=$conn->prepare($query);
            
            $stmt->execute();
            $result=$stmt->fetchAll();
            if($stmt->rowCount()>0)
            {
                foreach($result as $key => $valo){
                    $queryP="SELECT * FROM `products` where P_ID = :pid";
                    $stmtP=$conn->prepare($queryP);
                    $stmtP->bindParam(':pid',$valo['P_ID']);
                    $stmtP->execute();
                    $resultPNew=$stmtP->fetchAll();
                    $result[$key]['P_Name'] = $resultPNew[0]['P_Name'];

                    $queryO="SELECT * FROM `status` where status_order = :st_or";
                    $stmt1=$conn->prepare($queryO);
                    $stmt1->bindParam(':st_or',$valo['current_status']);
                    $stmt1->execute();
                    $resultNew=$stmt1->fetchAll();
                    $result[$key]['current_status'] = $resultNew[0]['status_name'];
                    
                    
                    $queryU="SELECT * FROM `users` where userid = :usr_or";
                    $stmt2=$conn->prepare($queryU);
                    $stmt2->bindParam(':usr_or',$valo['C_ID']);
                    $stmt2->execute();
                    $resultNew=$stmt2->fetchAll();
                    $result[$key]['customer'] = $resultNew[0]['username'];

                }
                return $result;
            }
            else{
                echo "No Orders Found !";   
                return false;
            }
        }

 if($_GET['action']="Manager"){
    $Results = getAllOrders();
    $Results = json_encode($Results);
    print_r($Results);

 }
 else{
     $Results = getActiveOrderStatus();
     if($Results){
         $Results = json_encode($Results);
         print_r($Results);
     }
     else{
        print_r(array());
     }
 }
 
    
?>