<?php 
 
    class ManagerDAO{
        public static function validateManager($manager){
            $email = $manager->getEmail();
            $password = $manager->getPassword();
            $usertype = $manager->getUsertype();
            $conn=DBConnect::getConnection();
            //prepared statement

            $query="select * from users INNER JOIN managers ON users.userid=managers.M_ID where email=:email and password=:password and usertype=:usertype ";
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
                    echo "Manager not active";
                    $flag=false;
                }
                else{
                //store userProfile here
                print_r($result[0]['email']);
                $flag=true;
                }
            }
            else{
                echo "Manager not found";
                $flag=false;
            }
            
            return $flag;
        }

        public static function getNextManagerId(){
            $conn=DBConnect::getConnection();
            $query="SELECT MAX(userid) FROM users WHERE usertype = 'Manager'";

            $stmt=$conn->prepare($query);

            $stmt->execute();

            $result=$stmt->fetchColumn();
            $newManager="";
            if($stmt->rowCount()>0){
 
                $newManager="M".(intval(substr($result,1))+1);
            } 
            else
                $newManager="M101";
            
            return $newManager;
        }

        public static function addManager($manager){

            $conn=DBConnect::getConnection();

            //setting connection auto commit false
<<<<<<< HEAD
            // $conn->autocommit(false);
            try{

                $userid=ManagerDAO::getNextManagerId();
                $username=$manager->getUserName();
                $usertype="Manager";
                $phoneNo=$manager->getPhoneNo();
                $email=$manager->getEmail();
            $password=$manager->getPassword();
=======
            mysqli_autocommit($conn, false);

            $userid=getNextManagerId();
            $username=$customer->getUserName();
            $usertype="Manager";
            $phoneNo=$customer->getPhoneNo();
            $email=$customer->getEmail();
            $password=$customer->getPassword();
>>>>>>> 0452cdaf7d084ad40d06787566337105de86dd64
            $updatedOn=date("Y-m-d");
            $createdOn=date("Y-m-d");
            
            $query1="Insert into USERS values (:userid,:username,:usertype,:phoneNo,:updatedOn,:createdOn,:email,:password)";
            
            $stmt1=$conn->prepare($query1);
<<<<<<< HEAD
            
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
                $status = "Y" ;//Default status
                $query2="Insert into Managers values (:MId,:status);";
                
                $stmt2=$conn->prepare($query2);
                $stmt2->bindParam('MId',$userid);
                $stmt2->bindParam('status',$status);
=======

            $stmt1->bind_param('userid',$userid);
            $stmt1->bind_param('username',$username);
            $stmt1->bind_param('usertype',$usertype);
            $stmt1->bind_param('phoneNo',$phoneNo);
            $stmt1->bind_param('updatedOn',$updatedOn);
            $stmt1->bind_param('createdOn',$createdOn);
            $stmt1->bind_param('email',$email);
            $stmt1->bind_param('password',$password);
            $flag=true;
            if($stmt1->execute()){
                $query2="Insert into Managers values (:MId,:status);";

                $stmt2=$conn->prepare($query2);
                $stmt2->bind_param('MId',$userid);
                $stmt2->bind_param('status','Y');
>>>>>>> 0452cdaf7d084ad40d06787566337105de86dd64
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
<<<<<<< HEAD
            return $flag;
            // if($flag==true){
            //     $conn->commit();
            // }
            // else{
            //     $conn->rollback();
            // }
        }
        catch(Exception  $e){
            return False;
        }
            
=======

            if($flag==true){
                $conn->commit();
            }
            else{
                $conn->rollback();
            }

>>>>>>> 0452cdaf7d084ad40d06787566337105de86dd64
 

            return $flag;
        }

    }
?>