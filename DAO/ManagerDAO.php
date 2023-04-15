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

            $userid=getNextManagerId();
            $username=$customer->getUserName();
            $usertype="Manager";
            $phoneNo=$customer->getPhoneNo();
            $email=$customer->getEmail();
            $password=$customer->getPassword();
            $updatedOn=date("Y-m-d");
            $createdOn=date("Y-m-d");
            
            $query1="Insert into users values (:userid,:username,:usertype,:phoneNo,:updatedOn,:createdOn,:email,:password)";
            
            $stmt1=$conn->prepare($query1);

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
                $query2="Insert into managers values (:MId,:status);";

                $stmt2=$conn->prepare($query2);
                $stmt2->bind_param('MId',$userid);
                $stmt2->bind_param('status','Y');
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
        //two pojos are needed for parameter because of user details and manager's status
        public static function updatemanager($user,$manager){
            $conn=DBConnect::getConnection();

            $userid= $user->getUserId();
            $username=$user->getUserName();
            $phoneNo=$user->getPhoneNo();
            $email=$user->getEmail();
            $password=$user->getPassword();
            $updatedOn=date("Y-m-d");

            //status will be fetched from manager details
            $status=$manager->getStatus();
            
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
                $query2="update managers set status=:status where M_ID=:userid";

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

        public static function deleteCustomer($MId){
            $conn=DBConnect::getConnection();

            $query1="update managers set status='N' where M_Id=:MId";
            $stmt1=$conn->prepare($query1);

            $stmt1->bindParam('MId',$MId);
            if($stmt1->execute()){
                return true;
            }
            else {
                $flag=false;
            }
        }


        public function getOnlyManagers(){
            $conn=DBConnect::getConnection();
            $query="SELECT * FROM users WHERE usertype = 'Manager'";
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