<?php

    class ProductsPOJO{
        private $PId;
        private $PName;
        private $Quantity;
        private $createdOn;
        private $updatedOn;
        private $IId;

        //getters
        public function getPId() {
            return $this->PId;
        }
        public function getPName(){
            return $this->PName;
        }
        public function getQuantity(){
            return $this->Quantity;
        }
        public function getcreatedOn(){
            return $this->createdOn;
        }
        public function getupdatedOn(){
            return $this->updatedOn;
        }
        public function getIId(){
            return $this->IId;
        }

        //setters
        public function setPId($PId){
            $this->PId = $PId;
        }
        public function setPName($PName){
            $this->PName = $PName;
        }
        public function setQuantity($Quantity){
            $this->Quantity=$Quantity;
        }
        public function setcreatedOn($createdOn){
            $this->createdOn=$createdOn;
        }
        public function setupdatedOn($updatedOn){
            $this->updatedOn=$updatedOn;
        }
        public function setIId($IId){
            $this->IId=$IId;
        }

    }
?>