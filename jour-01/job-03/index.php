<?php
function my_is_multipe(int $divide, int $multiple) : bool {
    if ($divide % $multiple == 0){
        return true;
    }
    else{
        return false;
    }
}

echo my_is_multipe(10, 5); // true