<?php
    Class Employee{
        private $id;
        private $name;
        private $lastName;
        private $age;
        
        function __construct($id,$name, $lastName, $age) {
            $this->id;
            $this->name;
            $this->lastName;
            $this->age;
        }
        public function getId(){
            return $this->id;
        }
        public function setId($id){
                $this->id = $id;
        }
        public function getName(){
            return $this->name;
        }
        public function setName($name){
                $this->name = $name;
        }
        public function getLastName(){
            return $this->lastName;
        }
        public function setLastName($lastName){
                $this->lastName = $lastName;
        }
        public function getAge(){
            return $this->age;
        }
        public function setAge($age){
                $this->age = $age;
        }
       
    }


?>