<?php

    class ManagersPOJO{
        private $MId;
        private $status;

        //getters
        public function getMId()
            return $this->MId;
        public function getStatus()
            return $this->status;

        //setters
        public function setMId($MId)
            $this->MId = $M_ID;
        public function setStatus($status)
            $this->status = $status;
    }
?>