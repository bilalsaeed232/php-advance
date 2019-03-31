<?php 

class Calculator {
    function add($a, $b) {
        echo "\n";
        echo "Addition: ". ($a + $b);
        echo "\n";
    }
    
    function subtract($a, $b) {
        echo "\n";
        echo "Subtraction: ". ($a - $b);
        echo "\n";    
    }
    
    function multiply($a, $b) {
        echo "\n";
        echo "Multiplication: ". ($a * $b);
        echo "\n";        
    }
    
    function divide($a, $b) {
        echo "\n";
        echo "Division: ". ($a / $b);
        echo "\n";        
    }

    function __invoke($method, $a, $b) {
        $this->$method($a,$b);
    }
}


$calc = new Calculator();
$calc("add", 2, 6);
$calc("multiply", 5, 5);
$calc("divide", 125, 5);

?>