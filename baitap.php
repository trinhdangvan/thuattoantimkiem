<?php
function countNumber($numbers, $value)
{
    $count = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] === $value) {
            $count++;
        }
    }
    return $count;
}

//echo countNumber([3, 4, 5, 3, 1, 9, 3, 1], 1);
// $arr=[1,3,4,5,1,1,3,4,6];
// echo '<pre>';
// print_r(array_count_values($arr));