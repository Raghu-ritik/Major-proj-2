<?php

    class ProductsPOJO{
<<<<<<< HEAD
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
=======
        private $P_ID;
        private $P_Name;
        private $Quantity;
        private $created_on;
        private $updated_on;
        private $I_ID;

        //getters
        public function getP_ID() 
            return $this->P_ID;
        public function getP_Name()
            return $this->P_Name;
        public function getQuantity()
            return $this->Quantity;
        public function getcreated_on()
            return $this->created_on;
        public function getupdated_on()
            return $this->updated_on;
        public function getI_ID()
            return $this->I_ID;

        //setters
        public function setP_ID($P_ID)
            $this->P_ID = $P_ID;
        public function setP_Name($P_Name)
            $this->P_Name = $P_Name;
        public function setQuantity($Quantity)
            $this->Quantity=$Quantity;
        public function setcreated_on($created_on)
            $this->created_on=$created_on;
        public function setupdated_on($updated_on)
            $this->updated_on=$updated_on;
        public function setI_ID($I_ID)
            $this->I_ID=$I_ID;
>>>>>>> baa08fb136b2f9687213a0879046da78503f2860
    }
?>