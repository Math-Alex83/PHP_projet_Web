<?php

function getSum(int $a, int $b):string
{
    $sum = $a + $b;
    return $a.' + '.$b.' = '.$sum;
}
getSum(5,3);
echo getSum(5,3);
