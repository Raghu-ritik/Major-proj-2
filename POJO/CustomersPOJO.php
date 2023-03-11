<?php

    class CustomersPOJO{
        private $C_ID;
        private $status;

        //getters
        public function getC_ID(){
            return $this->C_ID;
        }
        public function getStatus(){
            return $this->status;
        }

        //setters
        public function setC_ID( $C_ID ){
            $this->C_ID = $C_ID;
        }
        public function setStatus($status){
            $this->status = $status;
        }
    }
?>