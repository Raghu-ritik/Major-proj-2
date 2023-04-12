<?php

    class ManagersPOJO{
        
        private $MId;
        private $status;

        //getters
        public function getMId(){
            return $this->MId;
        }
        public function getStatus(){
            return $this->status;
        }

        //setters
        public function setMId($MId){
            $this->MId = $MId;
        }
        public function setStatus($status){
            $this->status = $status;
        }
    }
?>