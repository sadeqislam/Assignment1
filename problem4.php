<?php
function printPattern($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n - $i; $j++) {
            echo " ";
        }
        
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }
        
        echo "\n";
    }
}

$n = 5;
printPattern($n);
?>