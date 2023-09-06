<?php

function my_is_prime(int $number):bool {
    if ($number == 1){
        return false;
    }
    for ($i = 2; $i < $number; $i++){
        if ($number % $i == 0){
            return false;
        }
    }
    return true;
}

echo my_is_prime(3); // true
echo my_is_prime(6); // false

foreach ([0,1,2,3,4] as &$value) {
    echo $value . '<br>';
}


?>