<?php

    class OrdersPOJO{
<<<<<<< HEAD
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
=======
        private $O_ID;
        private $Quantity;
        private $updated_on;
        private $created_on;
        private $C_ID;
        private $P_ID;
        private $M_ID;

        //getters
        public function getO_ID()
            return $this->O_ID;
        public function getQuantity()
            return  $this->Quantity;
        public function getUpdatedOn()
            return $this->UpdatedOn;
        public function getCreatedOn()
            return $this->CreatedOn;
        public function getC_ID()
            return $this->C_ID;
        public function getP_ID()
            return $this->P_ID;
        public function getM_ID()
            return $this->M_ID;

        //setters
        public function setO_ID($O_ID)
            $this->O_ID = $O_ID;
        public function setQuantity($Quantity)
            $this->Quantity = $Quantity;
        public function setUpdatedOn($updated_on)
            $this->updated_on=$updated_on;
        public function setCreatedOn($created_on)
            $this->created_on=$created_on;
        public function setC_ID($C_ID)
            $this->C_ID=$C_ID
        public function setP_ID($P_ID)
            $this->P_ID=$P_ID
        public function setM_ID($M_ID)
            $this->M_ID=$M_ID
>>>>>>> baa08fb136b2f9687213a0879046da78503f2860
    }
?>