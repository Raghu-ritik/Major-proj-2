<?php
    class UsersPOJO{
        private $userid;
        private $username;
        private $usertype;
        private $phone_no;
        private $updated_on;
        private $created_on;
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
        public function setPhoneNo($phone_no){
            $this->phone_no=$phone_no;
        }
        public function setUpdatedOn($updated_on){
            $this->updated_on=$updated_on;
        }
        public function setCreatedOn($created_on){
            $this->created_on=$created_on;
        }
        public function setEmail($email){

            $this->email=$email;
        }
        public function setPassword($password){
            $this->password=$password;
        }
        
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
            return $this->phone_no;
        }
        public function getUpdatedOn(){
            return $this->updated_on;
        }
        public function getCreatedOn(){
            return $this->created_on;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getPassword(){
            return $this->password;
        }
    }
?>