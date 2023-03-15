<?php

    class CustomerDAO{
        public static function validateCustomer($customer){
            $conn=DBConnect::getConnection();
            
            $email = $customer->getEmail();
            $password = $customer->getPassword();
            $usertype = $customer->getUsertype();
            
            //prepared statement
            $query="select * from users INNER JOIN customers ON users.userid=customers.C_ID where email=:email and password=:password and usertype=:usertype ";
            $stmt=$conn->prepare($query);
    
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':password',$password);
            $stmt->bindParam(':usertype',$usertype);
            $stmt->execute();
            $result=$stmt->fetchAll();
            $flag=true;
            if($stmt->rowCount()>0)
            {
                //if customer or manager is deactivated by admin
                if($result[0]['status']=='N'){
                    echo "Customer not active";
                    $flag=false;
                }
                //store userProfile here
                else{
                    print_r($result[0]['email']);
                    $flag=true;
                }
            }
            else{
                echo "Customer not found";
                
                $flag=false;
            }
 
            return $flag;

        }

        public static function getNextCustomerId(){
            $conn=DBConnect::getConnection();
            $query="SELECT MAX(userid) FROM users WHERE usertype = 'Customer'";

            $stmt=$conn->prepare($query);

            $stmt->execute();

            $result=$stmt->fetchColumn();
            $newCustomer="";
            if($stmt->rowCount()>0){
               
                $newCustomer="C".(intval(substr($result,1))+1);
            } 
            else
                $newCustomer="C101";
           
            
            return $newCustomer;
        }

        public static function addCustomer($customer){

            $conn=DBConnect::getConnection();

            //setting connection auto commit false
            mysqli_autocommit($conn, false);
            $userid= CustomerDAO::getNextCustomerId();
            $username=$customer->getUserName();
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