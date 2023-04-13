<?php

    class ProductDAO{
        public static function getAllProducts(){
            $conn=DBConnect::getConnection();
            
             
            //prepared statement
            $query="SELECT * FROM `products`";
            $stmt=$conn->prepare($query);
            $stmt->execute();
            $result=$stmt->fetchAll();
            if($stmt->rowCount()>0)
            {
                return $result;
            }
            else{
                echo "No Products Found !";   
                return false;
            }
        }

        public static function getProductById($Prod_id){
            $conn=DBConnect::getConnection();
            
             
            //prepared statement
            $query="SELECT * FROM `products` WHERE P_ID = '$Prod_id'";
            $stmt=$conn->prepare($query);
            $stmt->execute();
            $result=$stmt->fetchAll();
            if($stmt->rowCount()>0)
            {
                return $result;
            }
            else{
                echo "No Products Found !";   
                return false;
            }
        }


        public static function getNextProductId(){
            $conn=DBConnect::getConnection();
            $query="SELECT MAX(P_ID) FROM products ";

            $stmt=$conn->prepare($query);

            $stmt->execute();

            $result=$stmt->fetchColumn();
            $newCustomer="";
            if($stmt->rowCount()>0){
               
                $newCustomer="P".(intval(substr($result,1))+1);
            } 
            else
                $newCustomer="P101";
           
            
            return $newCustomer;
        }

        public static function addProduct($customer){

            $conn=DBConnect::getConnection();

            //setting connection auto commit false
            // $conn->autocommit(false);
            $prodid= ProductDAO::getNextProductId();
            $prodname=$customer->getUserName();
            $usertype="Customer";
            $phoneNo=$customer->getPhoneNo();
            $email=$customer->getEmail();
            $password=$customer->getPassword();
            $updatedOn=date("Y-m-d");
            $createdOn=date("Y-m-d");
            
            $query1="Insert into USERS values (:userid,:username,:usertype,:phoneNo,:updatedOn,:createdOn,:email,:password)";
            
            $stmt1=$conn->prepare($query1);

            $stmt1->bindParam('userid',$userid);
            $stmt1->bindParam('username',$username);
            $stmt1->bindParam('usertype',$usertype);
            $stmt1->bindParam('phoneNo',$phoneNo);
            $stmt1->bindParam('updatedOn',$updatedOn);
            $stmt1->bindParam('createdOn',$createdOn);
            $stmt1->bindParam('email',$email);
            $stmt1->bindParam('password',$password);
            $flag=true;
            if($stmt1->execute()){
                $query2="Insert into Customers values (:CId,:status);";

                $stmt2=$conn->prepare($query2);
                $stmt2->bindParam('CId',$userid);
                $stmt2->bindParam('status','Y');
                if($stmt2->execute()){
                    $flag=true;
                }
                else{
                    $flag=false;
                }
            }
            else {
                $flag=false;
            }

            if($flag==true){
                $conn->commit();
            }
            else{
                $conn->rollback();
            }


            return $flag;
        }

        
    }
?>