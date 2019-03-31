<?php 
/**
 * 1. should be the first line in php file
 * 2. would only make this file strict, doesn't apply to other files
 * 3. if a function defined here uses a particular type, the caller from outside 
 * is not bound unless stricttypes are declared there as well
 * 
 * 
 */
declare(strict_types=1);


function display_message(?string $msg) {
    if($msg){
        echo "Message: {$msg}\n";
    } else {
        echo "Message: Nothing...\n";
    }
}

function add(float $a, float $b): float {
    return $a + $b;
}


display_message('Hello everyone');

// now php supports nullable values
display_message(null); // nullable types are allowed
// display_message(12.2); // generates typeerror
// display_message(true); // generates typeerror

$res = add(2,5);
echo "RESULT: {$res}\n";

$res = add(3.2,5.1);
echo "RESULT: {$res}\n";

//generates type error
// $res = add(true,false);
// echo "RESULT: {$res}\n";




?>