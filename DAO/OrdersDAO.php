<?php

    class OrdersDAO{
        /**
         * provides with the active order of user by using userID
         */
        public function getActiveOrderStatus($userID){
            $conn=DBConnect::getConnection();
            //prepared statement
            
            $query="SELECT * FROM `orders` where C_ID = :CID AND current_status < 500";
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

        public static function getAllOrders(){
            $conn=DBConnect::getConnection();
            
             
            //prepared statement
            $query="SELECT * FROM `orders`";
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

        public static function getNextOrderId(){
            $conn=DBConnect::getConnection();
            $query="SELECT MAX(O_ID) FROM orders";

            $stmt=$conn->prepare($query);

            $stmt->execute();

            $result=$stmt->fetchColumn();
            $newOrder="";
            if($stmt->rowCount()>0){
                $newOrder="O".(intval(substr($result,1))+1);
            } 
            else{
                $newOrder="O101";
            }
            return $newOrder;
        }

        public static function addOrder($Order){

            $conn=DBConnect::getConnection();

            $orderid= OrdersDAO::getNextOrderId();
            $Quantity=$Order->getQuantity();
            $C_ID=$Order->getCId();
            $P_ID=$Order->getPId();
            $M_ID=$Order->getMId();
            $order_token=$Order->getOrderToken();
            $Payment_type=$Order->getPaymentType();
            $updatedOn=date("Y-m-d");
            $createdOn=date("Y-m-d");
            
            $query1="Insert into orders values (:O_ID, :Quantity, :updated_on, :created_on, :C_ID, :P_ID, :M_ID, :order_token, :payment_type,:current_status)";
            
            $stmt1=$conn->prepare($query1);
            $rest=$stmt1->execute(
                array(
                    ':O_ID' => $orderid,
                    ':Quantity' => $Quantity,
                    ':updated_on' => $updatedOn,
                    ':created_on' => $createdOn,
                    ':C_ID' => $C_ID,
                    ':P_ID' => $P_ID,
                    ':M_ID' => $M_ID,
                    ':order_token' => $order_token,
                    ':payment_type' => $Payment_type,
                    ':current_status' => 100
                )
            ); 
            if($rest){
                return true;
            }
            return false;
        }

        
    }
?>