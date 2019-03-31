<?php

function fibonacci($position = 1) {
    $last = 0;
    $current = 1;
    $i = 0;

    yield $i => 0;

    while($i < $position) {
        $current = $last + $current;
        $last = $current - $last;
        yield $i => $current;
        $i++;
    }

    return;
}


foreach (fibonacci(10) as $key => $value) {
    echo "{$key}. {$value} \n";
}



?>