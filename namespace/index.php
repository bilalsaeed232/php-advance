<?php

require __DIR__ . '/vendor/autoload.php';

echo "Generating random integers between 1 - 100 <br/>";

echo (new Rych\Random\Random())->getRandomInteger(1, 100);




?>