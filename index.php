<?php

function soma($a, $b) {
    $num = $a;
    if ($b < 0) {
        $cont = -1;
        while ($cont >= $b) {
            $num--;
            $cont--;
        }
    } elseif ($b > 0) {
        $cont = 1;
        while ($cont <= $b) {
            $num++;
            $cont++;
        }
    }
    return $num;
}

function subtrai($a, $b) {
    $num = $a;
    if ($b < 0) {
        $cont = -1;
        while ($cont >= $b) {
            $num++;
            $cont--;
        }
    } elseif ($b > 0) {
        $cont = 1;
        while ($cont <= $b) {
            $num--;
            $cont++;
        }
    }
    return $num;
}

function multiplica($a, $b) {
    $num2 = 0;

    if ($b < 0) {
        $cont = -1;
        while ($cont >= $b) {
            $num2 = subtrai($num2, $a);
            $cont--;
        }

    } elseif ($b > 0) {
        $cont = 1;
        while ($cont <= $b) {
            $num2 = soma($num2, $a);
            $cont++;
        }
    }
    return $num2;
}

echo soma(-24, 21);