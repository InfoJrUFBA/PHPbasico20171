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
    $a = (int) $a;
    $num = array();
    $cont=0;
    $neg = false;

    if ($a < 0) {
        $a = $a*-1;
        $neg = true;
    }
    // Loop para pegar o resto e o quociente.
    while ($a>=2) {
        $num[] = $a%2;
        $a = $a/2;
        $a = (int)$a;
        $cont++;
    }

    $num[] = $a;
    $bin = "";

    if ($a != "") {
        if ($neg == false) $bin .= "0|";
        else $bin .= "1|";
    } 
    
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

$soma1 = isset($_POST["soma1"])?$_POST["soma1"]:"";
$soma2 = isset($_POST["soma2"])?$_POST["soma2"]:"";
$mult1 = isset($_POST["mult1"])?$_POST["mult1"]:"";
$mult2 = isset($_POST["mult2"])?$_POST["mult2"]:"";
$pow1 = isset($_POST["pow1"])?$_POST["pow1"]:"";
$pow2 = isset($_POST["pow2"])?$_POST["pow2"]:"";
$min = isset($_POST["min"])?$_POST["min"]:"";
$bin = isset($_POST["bin"])?$_POST["bin"]:"-1";
$x1 = isset($_POST["x1"])?$_POST["x1"]:"";
$y1 = isset($_POST["y1"])?$_POST["y1"]:"";
$x2 = isset($_POST["x2"])?$_POST["x2"]:"";
$y2 = isset($_POST["y2"])?$_POST["y2"]:"";
$agulha1 = isset($_POST["agulha1"])?$_POST["agulha1"]:"";
$palheiro1 = isset($_POST["palheiro1"])?$_POST["palheiro1"]:"";
$agulha2 = isset($_POST["agulha2"])?$_POST["agulha2"]:"";
$palheiro2 = isset($_POST["palheiro2"])?$_POST["palheiro2"]:"";


$soma = !empty($soma1)||!empty($soma2)?soma($soma1, $soma2):"";
$mult = !empty($mult1)||!empty($mult2)?multiplica($mult1, $mult2):"";
$pow = !empty($pow1)||!empty($pow2)?eleva($pow1, $pow2):"";  
$minusculo = !empty($min)?minusculo($min):"";  
$binario = $bin!="" || $bin===0?binario($bin):""; 
$distancia = !empty($x1)||!empty($y1)||!empty($x2)||!empty($y2)?distancia($x1, $y1, $x2, $y2):"";
$substring1 = !empty($agulha1)||!empty($palheiro1)?(int)substring1($agulha1, $palheiro1):"";
$substring2 = !empty($agulha2)||!empty($palheiro2)?(int)substring2($agulha2, $palheiro2):"";
$n1 = 1;
$n0 = 0;
if ($substring1 === $n1) $substring1 = "TRUE";
elseif ($substring1 === $n0) $substring1 = "FALSE";
if ($substring2 === $n1) $substring2 = "TRUE";
elseif ($substring2 === $n0) $substring2 = "FALSE";
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        * {
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            padding: 0;
            margin: 0;
        }

        .layout {
            display: flex;
        }

        h1 {
            text-align: center;
        }

        h1, h2 {
            font-family: Arial, sans-serif;
            margin: 0;
            margin-top: 10px;
            margin-bottom: 15px;
            color: #333;
        }

        .block {
            border: 4px ridge #333;
            flex: 1;
            padding: 10px;
            margin: 5px 10px;
        }

        span {
            display: block;
            margin-bottom: 5px;
        }

        .inputs {
            display: grid;
            margin-bottom: 10px;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr;
            grid-gap: 10px;
        }

        #inp4, #inp5 {
            grid-template-columns: 1fr;
        }

        #inp6 {
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }

        input {
            width: 100%;
            flex: 1;
        }

        button, span {
            width: 100%;
            margin-top: 10px;
            font-weight: bold;
            color: #333;
        }


        .outputs input {
            font-weight: bold;
        }

        button[type="reset"] {
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <h1>Capacitação PHP</h1>
    <div class="layout">
        <div class="block">
            <h2>Entradas</h2>
            <form method="post">
                <span>Soma</span>
                <div id="inp1" class="inputs">
                    <input type="number" name="soma1" placeholder="Valor 1" value="">
                    <input type="number" name="soma2" placeholder="Valor 2" value="">
                </div>
                <span>Multiplicação</span>
                <div id="inp2" class="inputs">
                    <input type="number" name="mult1" placeholder="Valor 1" value="">
                    <input type="number" name="mult2" placeholder="Valor 2" value="">
                </div>
                <span>Potência</span>
                <div id="inp3" class="inputs">
                    <input type="number" name="pow1" placeholder="Valor 1" value="">
                    <input type="number" name="pow2" placeholder="Valor 2" value="">
                </div>
                <span>Minúsculo</span>
                <div id="inp4" class="inputs">
                    <input type="text" name="min" placeholder="String" value="">
                </div>
                <span>Binário</span>
                <div id="inp5" class="inputs">
                    <input type="number" name="bin" placeholder="Valor" value="">
                </div>
                <span>Distância entre 2 pontos</span>
                <div id="inp6" class="inputs">
                    <input type="number" name="x1" placeholder="X1" value="">
                    <input type="number" name="y1" placeholder="Y1" value="">
                    <input type="number" name="x2" placeholder="X2" value="">
                    <input type="number" name="y2" placeholder="Y2" value="">
                </div>
                <span>Substring 1</span>
                <div id="inp7" class="inputs">
                    <input type="text" name="agulha1" placeholder="Agulha" value="">
                    <input type="text" name="palheiro1" placeholder="Palheiro" value="">
                </div>
                <span>Substring 2</span>
                <div id="inp8" class="inputs">
                    <input type="text" name="agulha2" placeholder="Agulha" value="">
                    <input type="text" name="palheiro2" placeholder="Palheiro" value="">
                </div>
                <button type="submit">Enviar</button>
            </form>
        </div>
        <div class="block">
            <h2>Saídas</h2>
            <form method="post">
                <span>Soma</span>
                <div id="inp1" class="outputs">
                    <input type="text" name="soma1" placeholder="Resultado " value="<?php echo $soma; ?>">
                </div>
                <span>Multiplicação</span>
                <div id="inp2" class="outputs">
                    <input type="text" name="mult1" placeholder="Resultado " value="<?php echo $mult; ?>">
                </div>
                <span>Potência</span>
                <div id="inp3" class="outputs">
                    <input type="text" name="pow1" placeholder="Resultado " value="<?php echo $pow; ?>">
                </div>
                <span>Minúsculo</span>
                <div id="inp4" class="outputs">
                    <input type="text" name="min" placeholder="Resultado " value="<?php echo $minusculo; ?>">
                </div>
                <span>Binário</span>
                <div id="inp5" class="outputs">
                    <input type="text" name="bin" placeholder="Resultado " value="<?php echo $binario; ?>">
                </div>
                <span>Distância entre 2 pontos</span>
                <div id="inp6" class="outputs">
                    <input type="text" name="x1" placeholder="Resultado " value="<?php echo $distancia; ?>">
                </div>
                <span>Substring 1</span>
                <div id="inp7" class="outputs">
                    <input type="text" name="substring11" placeholder="Resultado" value="<?php echo $substring1; ?>">
                </div>
                <span>Substring 2</span>
                <div id="inp8" class="outputs">
                    <input type="text" name="substring21" placeholder="Resultado " value="<?php echo $substring2; ?>">
                </div>
                <button type="reset">Resetar</button>
            </form>
        </div>
    </div>
</body>
</html>


    