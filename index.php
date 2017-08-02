<?php
/* 4ª Atividade */
function soma($a, $b) {
    $num = $a;
    if ($b < 0) {
        $cont = -1;
        // A cada loop o número diminui uma unidade até $b
        while ($cont >= $b) {
            $num--;
            $cont--;
        }
    } elseif ($b > 0) {
        $cont = 1;
        // A cada loop o número aumenta uma unidade até $b
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
        // A cada loop o número aumenta uma unidade até $b
        while ($cont >= $b) {
            $num++;
            $cont--;
        }
    } elseif ($b > 0) {
        $cont = 1;
        // A cada loop o número diminui uma unidade até $b
        while ($cont <= $b) {
            $num--;
            $cont++;
        }
    }
    return $num;
}

/* 5ª Atividade */
function multiplica($a, $b) {
    $num2 = 0;

    if ($b < 0) {
        $cont = -1;
        // A cada loop o número atual é subtraído do valor inicial
        while ($cont >= $b) {
            $num2 = subtrai($num2, $a);
            $cont--;
        }

    } elseif ($b > 0) {
        $cont = 1;
        // A cada loop o número atual é somado com o valor inicial
        while ($cont <= $b) {
            $num2 = soma($num2, $a);
            $cont++;
        }
    }
    return $num2;
}

/* 6ª Atividade */
function eleva($a, $b) {
    $num2 = 1;
    $numero = "";
    if ($b < 0) {
        $cont = -1;
        while ($cont >= $b) {
            // A cada loop o número atual é multiplicado pelo valor inicial
            $num2 = multiplica($num2, $a);
            $cont--;
        }

        $numero = "1/";
        $numero .= $num2;
        $num2 = $numero;

    } elseif ($b > 0) {
        $cont = 1;
        while ($cont <= $b) {
            // A cada loop o número atual é multiplicado pelo valor inicial
            $num2 = multiplica($num2, $a);
            $cont++;
        }
    }
    return $num2;
}

/* 7ª Atividade */
function minusculo($str) {
    for ($i=0; $i<strlen($str); $i++) {
        // Condição para transformar de maíusculo para minúsculo
        if (ord($str[$i]) >= ord('A') && ord($str[$i]) <= ord('Z')) {
            $str[$i] = chr(ord($str[$i])-ord('A')+ord('a'));
        }
    }
    return $str;
}

/* 8ª Atividade */
function binario($a) {
    $num = array();
    $cont=0;

    // Loop para pegar o resto e o quociente.
    while ($a>=2) {
        $num[] = $a%2;
        $a = (int)$a/2;
        $cont++;
    }

    $num[] = $a;
    $bin = "";

    // Loop para inverter as posições e transformar numa string.
    for ($i=$cont; $i>=0; $i--) {
        $bin .= $num[$i];
    }

    return $bin;

}


/* 9ª Atividade */
function distancia($x1, $y1, $x2, $y2) {
    // Fórmula da distância entre 2 pontos
    return (($x1-$x2)**2 + ($y1-$y2)**2)**0.5;
}

/* 10 Atividade */
function substring1($agulha, $palheiro) {
    // Se $agulha for maior que $palheiro, obviamente não será uma substring.
    if (strlen($agulha) > strlen($palheiro)) return false; 
    // Se $agulha for igual a $palheiro, verifico o valor.
    elseif (strlen($agulha) == strlen($palheiro) && $agulha == $palheiro) return true; 
    // Se $agulha for menor que $palheiro, percorro a string $palheiro formando todas as substrings possíveis.
    else {
        for ($i=0; $i<strlen($palheiro); $i++) {
            $str = "";
            for ($j=$i; $j<strlen($palheiro); $j++) {
                // Adiciono cada caracter de $palheiro em $str e verifico a cada iteração se $str é igual a $agulha.
                $str .= $palheiro[$j];
                if ($str == $agulha) return true;
            }
        }
        return false;
    }
}

/* 11 Atividade */
function substring2($agulha, $palheiro) {
    $palheiro = minusculo($palheiro);
    $agulha = minusculo($agulha);

    // Se $agulha for maior que $palheiro, obviamente não será uma substring.
    if (strlen($agulha) > strlen($palheiro)) return false; 
    // Se $agulha for igual a $palheiro, verifico o valor.
    elseif (strlen($agulha) == strlen($palheiro) && $agulha == $palheiro) return true; 
    // Se $agulha for menor que $palheiro, percorro a string $palheiro formando todas as substrings possíveis.
    else {
        for ($i=0; $i<strlen($palheiro); $i++) {
            $str = "";
            for ($j=$i; $j<strlen($palheiro); $j++) {
                // Adiciono cada caracter de $palheiro em $str e verifico a cada iteração se $str é igual a $agulha.
                $str .= $palheiro[$j];
                if ($str == $agulha) return true;
            }
        }
        return false;
    }
}

    