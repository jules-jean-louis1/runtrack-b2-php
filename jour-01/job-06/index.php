<?php

function my_array_sort(array $array, string $order): array
{
    $lenght = 0;
    while (isset($array[$lenght])) {
        $lenght++;
    }
    if ($lenght > 1) {
        for ($i = 0; $i < $lenght; $i++) {
            for ($j = 0; $j < $lenght - 1; $j++) {
                if ($order === 'ASC' && $array[$j] > $array[$j + 1]) {
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                } elseif ($order === 'DESC' && $array[$j] < $array[$j + 1]) {
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                }
            }
        }
        return $array;
    } else {
        return $array;
    }
}
$test = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$test2 = [9, 8, 7, 6, 5, 4, 3, 2, 1];
$list = my_array_sort($test, 'ASC');
foreach ($list as $value) {
    echo $value . '<br>';
}

