<?php 
    // include_once ('../POJO/UsersPOJO.php');
    include_once ('../DBUtil/DBConnect.php');
    class UsersDAO{
        public static function validateUser($user){
            $email = $user->getEmail();
            $password = $user->getPassword();
            $usertype = $user->getUsertype();
            $conn=DBConnect::getConnection();
            //prepared statement
            if($usertype=='Customer')
                $query="select * from users INNER JOIN customers ON users.userid=customers.C_ID where email=:email and password=:password and usertype=:usertype ";
            
            elseif($usertype=='Manager')
                $query="select * from users INNER JOIN managers ON users.userid=managers.M_ID where email=:email and password=:password and usertype=:usertype ";
            else
                $query= $query="select * from users where email=:email and password=:password and usertype=:usertype;";
            $stmt=$conn->prepare($query);
    
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':password',$password);
            $stmt->bindParam(':usertype',$usertype);
            $stmt->execute();
            $result=$stmt->fetchAll();
            if($stmt->rowCount()>0)
            {
                //if customer or manager is deactivated by admin
                if(($usertype=='Customer' || $usertype=='Manager') && $result[0]['status']=='N'){
                    echo "User not active";
                    return false;
                }
                //store userProfile here
                print_r($result[0]['email']);
                return true;
            }
            else{
                echo "User not found";
                return false;
            }

            //loop
            // foreach ($result as $row) {
            //     print_r($row['email']." ".$row['usertype']);
            // }
        }
    }
?>