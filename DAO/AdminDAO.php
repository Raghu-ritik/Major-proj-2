<?php 
 
    class AdminDAO{
        public static function validateAdmin($admin){
            $email = $admin->getEmail();
            $password = $admin->getPassword();
            $usertype = $admin->getUsertype();
            $conn=DBConnect::getConnection();
            //prepared statement
 
            $query= $query="select * from users where email=:email and password=:password and usertype=:usertype;";
            $stmt=$conn->prepare($query);
    
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':password',$password);
            $stmt->bindParam(':usertype',$usertype);
            $stmt->execute();
            $result=$stmt->fetchAll();
            $flag=true;
            if($stmt->rowCount()>0)
            {
                //store userProfile here
                print_r($result[0]['email']);
                $flag=true;
            }
            else{
                echo "Admin not found";
                $flag=false;
            }
            return $flag;
        }
    }
?>