<?php

    class IngredientsPOJO{

        private $IId;
        private $IItems;

        //getters
        public function getIId(){
            return $this->IId;
        }
        public function getIItems(){
            return $this->IItems;
        }

        //setters
        public function setIId($IId){
            $this->IId = $IId;
        }
        public function setIItems($IItems){
            $this->IItems = $IItems;
        }
    }
?>