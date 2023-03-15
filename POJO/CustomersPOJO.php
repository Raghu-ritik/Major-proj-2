<?php

    class CustomersPOJO{
<<<<<<< HEAD
        private $CId;
        private $status;

        //getters
        public function getCId(){
            return $this->CId;
=======
        private $C_ID;
        private $status;

        //getters
        public function getC_ID(){
            return $this->C_ID;
>>>>>>> baa08fb136b2f9687213a0879046da78503f2860
        }
        public function getStatus(){
            return $this->status;
        }

        //setters
<<<<<<< HEAD
        public function setCId( $CId ){
            $this->CId = $CId;
=======
        public function setC_ID( $C_ID ){
            $this->C_ID = $C_ID;
>>>>>>> baa08fb136b2f9687213a0879046da78503f2860
        }
        public function setStatus($status){
            $this->status = $status;
        }
    }
?>