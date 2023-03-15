<?php
    class UsersPOJO{
        private $userid;
        private $username;
        private $usertype;
<<<<<<< HEAD
        private $phoneNo;
        private $updatedOn;
        private $createdOn;
=======
        private $phone_no;
        private $updated_on;
        private $created_on;
>>>>>>> baa08fb136b2f9687213a0879046da78503f2860
        private $email;
        private $password;
        //setters
        public function setUserId($userid){
            $this->userid=$userid;
        }
        public function setUserName($username){
            $this->username=$username;
        }
        public function setUserType($usertype){
            $this->usertype=$usertype;
        }
<<<<<<< HEAD
        public function setPhoneNo($phoneNo){
            $this->phoneNo=$phoneNo;
        }
        public function setUpdatedOn($updatedOn){
            $this->updatedOn=$updatedOn;
        }
        public function setCreatedOn($createdOn){
            $this->createdOn=$createdOn;
=======
        public function setPhoneNo($phone_no){
            $this->phone_no=$phone_no;
        }
        public function setUpdatedOn($updated_on){
            $this->updated_on=$updated_on;
        }
        public function setCreatedOn($created_on){
            $this->created_on=$created_on;
>>>>>>> baa08fb136b2f9687213a0879046da78503f2860
        }
        public function setEmail($email){

            $this->email=$email;
        }
        public function setPassword($password){
            $this->password=$password;
        }
<<<<<<< HEAD
=======
        
>>>>>>> baa08fb136b2f9687213a0879046da78503f2860
        //getters
        public function getUserId(){
            return $this->userid;
        }
        public function getUserName(){
            return $this->username;
        }
        public function getUserType(){
            return $this->usertype;
        }
        public function getPhoneNo(){
<<<<<<< HEAD
            return $this->phoneNo;
        }
        public function getUpdatedOn(){
            return $this->updatedOn;
        }
        public function getCreatedOn(){
            return $this->createdOn;
=======
            return $this->phone_no;
        }
        public function getUpdatedOn(){
            return $this->updated_on;
        }
        public function getCreatedOn(){
            return $this->created_on;
>>>>>>> baa08fb136b2f9687213a0879046da78503f2860
        }
        public function getEmail(){
            return $this->email;
        }
        public function getPassword(){
            return $this->password;
        }
    }
?>