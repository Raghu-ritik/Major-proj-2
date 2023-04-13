<?php

    class ContactDAO{
        public static function getAllContactMsg(){
            $conn=DBConnect::getConnection();
            
             
            //prepared statement
            $query="SELECT * FROM `contactus`";
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

 

        public static function addContactMSG($contact){

            $conn=DBConnect::getConnection();

            $name=$contact->getName();
            $email=$contact->getEmail();
            $Subject=$contact->getSubject();
            $Message=$contact->getMessage();
            $createdOn=date("Y-m-d");
            $query1="Insert into contactus (`name`, `email`, `subject`, `Message`, `created_on`)  values (:name, :email, :subject, :Message, :created_on)";
            
            $stmt1=$conn->prepare($query1);
            $stmt1->bindParam('name',$name);
            $stmt1->bindParam('email',$email);
            $stmt1->bindParam('subject',$Subject);
            $stmt1->bindParam('Message',$Message);
            $stmt1->bindParam('created_on',$createdOn);            
            if($stmt1->execute()){
                return true;
            }
            else {
                $flag=false;
            }

        }

        
    }
?>