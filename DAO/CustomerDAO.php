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
                    $flag=array("error"=>"Customer not active");
                }
                //store userProfile here
                else{
                    return $result[0];
                }
            }
            else{
                $flag=array("error"=>"Customer not found");
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
     
            $userid= CustomerDAO::getNextCustomerId();
            $username=$customer->getUserName();
            $usertype="Customer";
            $phoneNo=$customer->getPhoneNo();
            $email=$customer->getEmail();
            $password=$customer->getPassword();
            $updatedOn=date("Y-m-d");
            $createdOn=date("Y-m-d");
            
            $query1="Insert into users values (:userid,:username,:usertype,:phoneNo,:updatedOn,:createdOn,:email,:password)";
            
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
                $query2="Insert into customers values (:CId,:status);";

                $stmt2=$conn->prepare($query2);
                $stmt2->bindParam('CId',$userid);
                $Status = 'Y';
                $stmt2->bindParam('status',$Status);
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
            return $flag;
        }

        //two pojos are needed for parameter because of user details and customer's status
        public static function updateCustomer($user,$customer){
            $conn=DBConnect::getConnection();

            $userid= $user->getUserId();
            $username=$user->getUserName();
            $phoneNo=$user->getPhoneNo();
            $email=$user->getEmail();
            $password=$user->getPassword();
            $updatedOn=date("Y-m-d");

            //status will be fetched from customer details
            $status=$customer->getStatus();
            
            $query1="update users set username=:username,phone_no=:phoneNo,email=:email,updated_on=:updatedOn,password=:password where userid=:userid";
            
            $stmt1=$conn->prepare($query1);

            $stmt1->bindParam('username',$username);
            $stmt1->bindParam('phoneNo',$phoneNo);
            $stmt1->bindParam('email',$email);
            $stmt1->bindParam('updatedOn',$updatedOn);
            $stmt1->bindParam('password',$password);
            $stmt1->bindParam('userid',$userid);
            $flag=true;
            if($stmt1->execute()){
                $query2="update customers set status=:status where C_ID=:userid";

                $stmt2=$conn->prepare($query2);
                $stmt2->bindParam('status','Y');
                $stmt2->bindParam('userid',$userid);
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

            return $flag;
        }

    public static function deleteCustomer($CId){
        $conn=DBConnect::getConnection();

        $query1="update customers set status='N' where C_Id=:CId";
        $stmt1=$conn->prepare($query1);

        $stmt1->bindParam('CId',$CId);
        if($stmt1->execute()){
            return true;
        }
        else {
            $flag=false;
        }
    }

    public function getOnlyCustomer(){
        $conn=DBConnect::getConnection();
        $query="SELECT * FROM users WHERE usertype = 'Customer'";
        $stmt=$conn->prepare($query);
        $stmt->execute();
        $result=$stmt->fetchAll();
        if($stmt->rowCount()>0){    
           return $result;
        } 
        else
            return array();
       
    }


        
    }
?>