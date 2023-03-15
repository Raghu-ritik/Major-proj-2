<?php

    class OrdersPOJO{
        private $OId;
        private $Quantity;
        private $updatedOn;
        private $createdOn;
        private $CId;
        private $PId;
        private $MId;

        //getters
        public function getOId(){
            return $this->OId;
        }
        public function getQuantity(){
            return  $this->Quantity;
        }
        public function getUpdatedOn(){
            return $this->updatedOn;
        }
        public function getCreatedOn(){
            return $this->createdOn;
        }
        public function getCId(){
            return $this->CId;
        }
        public function getPId(){
            return $this->PId;
        }
        public function getMId(){
            return $this->MId;
        }

        //setters
        public function setOId($OId){
            $this->OId = $OId;
        }
        public function setQuantity($Quantity){
            $this->Quantity = $Quantity;
        }
        public function setUpdatedOn($updatedOn){
            $this->updatedOn=$updatedOn;
        }
        public function setCreatedOn($createdOn){
            $this->createdOn=$createdOn;
        }
        public function setCId($CId){
            $this->CId=$CId;
        }
        public function setPId($PId){
            $this->PId=$PId;
        }
        public function setMId($MId){
            $this->MId=$MId;
        }
    }
?>