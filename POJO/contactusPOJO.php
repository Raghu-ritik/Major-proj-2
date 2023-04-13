<?php

    class ContactUsPOJO{
        private $MID;
        private $Name;
        private $Email;
        private $Subject;
        private $Message;

        //getters
        public function getMID() {
            return $this->MID;
        }
        public function getName(){
            return $this->Name;
        }
        public function getEmail(){
            return $this->Email;
        }
        public function getSubject(){
            return $this->Subject;
        }
        public function getMessage(){
            return $this->Message;
        }
        public function getCreatedOn(){
            return $this->CreatedOn;
        }

        //setters
        public function setMID($MID){
            $this->MID = $MID;
        }
        public function setName($Name){
            $this->Name = $Name;
        }
        public function setEmail($Email){
            $this->Email=$Email;
        }
        public function setSubject($Subject){
            $this->Subject=$Subject;
        }
        public function setMessage($Message){
            $this->Message=$Message;
        }
        public function setCreatedOn($CreatedOn){
            $this->CreatedOn=$CreatedOn;
        }

    }
?>