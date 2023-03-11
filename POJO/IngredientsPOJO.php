<?php

    class IngredientsPOJO{
        private $I_ID;
        private $I_Items;

        //getters
        public function getI_ID(){
            return $this->I_ID;
        }
        public function getI_Items(){
            return $this->I_Items;
        }

        //setters
        public function setI_ID($I_ID){
            $this->I_ID = $I_ID;
        }
        public function setI_Items($I_Items){
            $this->I_Items = $I_Items;
        }
    }
?>