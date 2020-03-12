<?php
    Class Developer extends Employee{
        
        private $programmingLanguage;
        
        function __construct($id,$name,$last_name,$age,$programmingLanguage) {
            parent::__construct($id,$name,$last_name,$age);
            $this->programmingLanguage = $programmingLanguage;
        }
        public function getProgrammingLanguage(){
            return $this->programmingLanguage;
        }
        public function setProgrammingLanguage($programmingLanguage){
            $this->programmingLanguage = $programmingLanguage;
        }
    }
?>