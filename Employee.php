<?php
    Class Employee{
        private $id;
        private $name;
        private $lastName;
        private $age;
        private $employeeType;
        
        function __construct($id,$name, $lastName, $age, $employeeType) {
            $this->id;
            $this->name;
            $this->lastName;
            $this->age;
            $this->employeeType;
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
        public function setLastaName($lastName){
                $this->lastName = $lastName;
        }
        public function getAge(){
            return $this->age;
        }
        public function setAge($age){
                $this->age = $age;
        }
        public function getEmployeeType(){
            return $this->employeeType;
        }
        public function setEmployeeType($employeeType){
                $this->employeeType = $employeeType;
        }
    }


?>