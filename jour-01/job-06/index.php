<?php
function my_array_sort(array $arrayToSort, string $order): array
{
    $length = 0;
    while (isset($arrayToSort[$length])) {
        $length++;
    }

    if ($length <= 1) {
        return $arrayToSort; // No need to sort if the array has 0 or 1 element
    }

    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($order === 'ASC' && $arrayToSort[$j] > $arrayToSort[$j + 1]) {
                // Swap elements for ascending order
                $temp = $arrayToSort[$j];
                $arrayToSort[$j] = $arrayToSort[$j + 1];
                $arrayToSort[$j + 1] = $temp;
            } elseif ($order === 'DESC' && $arrayToSort[$j] < $arrayToSort[$j + 1]) {
                // Swap elements for descending order
                $temp = $arrayToSort[$j];
                $arrayToSort[$j] = $arrayToSort[$j + 1];
                $arrayToSort[$j + 1] = $temp;
            }
        }
    }

    return $arrayToSort;
}


$myArray = [2, 24, 12, 7, 34];
$myArray = my_array_sort($myArray, 'ASC');
foreach ($myArray as $value) {
    echo $value . '<br>';
}