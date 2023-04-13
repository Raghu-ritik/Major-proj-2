<?php
    class UsersPOJO{
        private $userid;
        private $username;
        private $usertype;
        private $phoneNo;
        private $updatedOn;
        private $createdOn;
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
        public function setPhoneNo($phoneNo){
            $this->phoneNo=$phoneNo;
        }
        public function setUpdatedOn($updatedOn){
            $this->updatedOn=$updatedOn;
        }
        public function setCreatedOn($createdOn){
            $this->createdOn=$createdOn;
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
            return $this->phoneNo;
        }
        public function getUpdatedOn(){
            return $this->updatedOn;
        }
        public function getCreatedOn(){
            return $this->createdOn;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getPassword(){
            return $this->password;
        }
    }
?>