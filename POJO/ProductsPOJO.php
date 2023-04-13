<?php

    class ProductsPOJO{
        private $PId;
        private $PName;
        private $price;
        private $description;
        private $images;
        private $Quantity;
        private $createdOn;
        private $updatedOn;
        private $IId;
        private $status;

        //getters
        public function getPId() {
            return $this->PId;
        }
        public function getPName(){
            return $this->PName;
        }
        public function getPrice(){
            return $this->price;
        }
        public function getDescription(){
            return $this->description;
        }
        public function getImages(){
            return $this->images;
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
        public function getStatus(){
            return $this->status;
        }
        //setters
        public function setPId($PId){
            $this->PId = $PId;
        }
        public function setPName($PName){
            $this->PName = $PName;
        }
        public function setPrice($price){
            $this->price=$price;
        }
        public function setDescription($description){
            $this->description=$description;
        }
        public function setImages($images){
            $this->images=$images;
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
        public function setStatus($status){
            $this->status=$status;
        }
    }
?>