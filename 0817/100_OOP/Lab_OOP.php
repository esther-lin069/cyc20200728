<?php

    $dogs = new Animal(3);
    
    $dogs->species = "Dogs";
    @$dog->location = "Taiwan";
    $dogs->sayHello();

    echo "<hr>";
    echo "weight: ", $dogs->getWeight(), "<br>";
    //echo $dogs->_weight;

    


    Class Animal{
        public $species;        
        private $_weight;

        function __construct($weightValue=0){
            echo "Object Created.<br>";
            $this->setWeight($weightValue);
        }

        function __destruct() {
            echo "Object destroyed.";
        }

        function __set($k,$v){ 
            echo "__set is running <br>";
        }

        function __get($v){
            echo "__get is called <br>";
        }

        public function sayHello(){
            echo("Hey,I'm $this->species");
        }

        public function setWeight($value){
            if($value >= 0)
                $this->_weight = $value;
        }

        public function getWeight(){
            return $this->_weight;
        }

    }
?>