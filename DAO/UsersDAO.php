<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 0452cdaf7d084ad40d06787566337105de86dd64
<?php
    class UsersDAO{
        public static function getUserByEmailId($email){
            $conn=DBConnect::getConnection();
            $query="SELECT * from users where email=:email";
            $stmt=$conn->prepare($query);

            $stmt->bindParam(':email',$email);
            $stmt->execute();
            $result=$stmt->fetchAll();
            if(count($result)==1){
                $u=new UsersPOJO();
                $row=$result;
                $u->setUserId($row[0]['userid']);
                $u->setUserName($row[0]['username']);
                $u->setUserType($row[0]['usertype']);
                $u->setPhoneNo($row[0]['phone_no']);
                $u->setUpdatedOn($row[0]['updated_on']);
                $u->setCreatedOn($row[0]['created_on']);
                $u->setEmail($row[0]['email']);
                $u->setPassword($row[0]['password']);
            }
            else{
                $u=null;
<<<<<<< HEAD
                return false;
            }
            return $u;
=======
                echo "user not found";
                return false;
            }
            return $u;
=======
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
>>>>>>> baa08fb136b2f9687213a0879046da78503f2860
>>>>>>> 0452cdaf7d084ad40d06787566337105de86dd64
        }
    }
?>