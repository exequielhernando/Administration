<?php
    Class Designer extends Employee{
        private $designerType;
        
        function __construct($id,$name,$last_name,$age,$designerType) {
            parent::__construct($id,$name,$last_name,$age);
            $this->designerType = $designerType;
        }
        public function getDesignerType(){
            return $this->designerType;
        }
        public function setDesignerType($designerType){
            $this->designerType = $designerType;
        }
    }

?>