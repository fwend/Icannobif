<?php

const GoldenRatioConjugate = 0.61803398874989;

function iccanobif($a) {
    $result = [];
    $b = round($a * GoldenRatioConjugate);
    
    while ($b >= 0) {
        $result[] = $a;
        $t = $b;
        $b = $a - $b;
        $a = $t;
    }
    
    return $result;
}

print_r(iccanobif(317811));