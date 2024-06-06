<?php

$n = 62343;
$n_str = strval($n);

$sum = 0;

for ($i = 0; $i < strlen($n_str); $i++) {
    $sum += intval($n_str[$i]);
}

echo "The sum of the digits is: $sum\n";

?>
