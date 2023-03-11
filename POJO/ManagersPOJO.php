<?php

    class ManagersPOJO{
        private $M_ID;
        private $status;

        //getters
        public function getM_ID()
            return $this->M_ID;
        public function getStatus()
            return $this->status;

        //setters
        public function setM_ID($M_ID)
            $this->M_ID = $M_ID;
        public function setStatus($status)
            $this->status = $status;
    }
?>