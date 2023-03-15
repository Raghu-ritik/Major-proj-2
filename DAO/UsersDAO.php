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
                return false;
            }
            return $u;
        }
    }
?>