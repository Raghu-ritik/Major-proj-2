<?php

    class CustomersPOJO{

        private $CId;
        private $status;

        //getters
        public function getCId(){
            return $this->CId;
        }
        public function getStatus(){
            return $this->status;
        }

        //setters
        public function setCId( $CId ){
            $this->CId = $CId;
        }
        public function setStatus($status){
            $this->status = $status;
        }
    }
?>