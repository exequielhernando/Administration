<?php
    Class Company {

        private $id;
        private $nombre;
        private $employees;

        function __construct($id,$name) {
            $this->id = $id;
            $this->name = $name;
            $this->employees = [];
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
        public function getEmployees(){
            return $this->employees;
        }
        public function setEmployees($employees){
            $this->employees = $employees;
        }
        public function addEmployee($employee){
            $this->employees[] = $employee;
        }
        public function getEmployee($id){
            foreach ($this->employees as $employee) {
                if ($employee->getId() == $id) {
                    return $this->employee;
                }
            }
            return null;
        }
        public function getAverageAgeEmployee(){
            $totalAge = 0;
            $totalEmployees = count($this->employees);
            foreach ($this->employees as $employee) {
                $totalAge += $employee->getAge();
            }
            return $totalAge/$totalEmployees;
        }
    }
?>