<?php 

// basic example
$sum = function($a, $b) {
    return $a + $b;
};

echo $sum(2,6);


// passing closures as a callback functions
$arr = [1,2,3,4,5,6,7,8,9,10];

$even = array_filter($arr, function($item) {
    return $item % 2 == 0;
});
echo "\n";
echo "Even Numbers: \n";
print_r($even);
echo "\n";


$odd = array_filter($arr, function($item) {
    return $item % 2 == 1;
});

echo "\n";
echo "Odd Numbers: \n";
print_r($odd);
echo "\n";

// passing outside variable to a closure function
$modify = function() use($arr) {
    array_push($arr, 25);
    echo "Array Inside: \n";
    print_r($arr);
};

$modify();

echo "\n Array Outside:";
print_r($arr);







?>