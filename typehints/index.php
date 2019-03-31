<?php 

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