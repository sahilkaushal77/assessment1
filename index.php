<?php

//  Assesment 1
function checkPrime($n) {
    for ($i=2; $i <= (sqrt($n)+1); $i++) {
        if ($n % $i == 0 && $n != $i) {
            return false;
        }
    }
    return true;
}
function prime($maxSum, $currentSum, $currentNumber) {
    while (($currentSum + $currentNumber) < $maxSum) {
        if (($currentSum + $currentNumber) > $maxSum) {
            break;
        }
        if (checkPrime($currentNumber)) {
            $currentSum += $currentNumber;
        }
        $currentNumber++;
    }
    return $currentSum;
}
print prime(1000000, 0, 6);
?>