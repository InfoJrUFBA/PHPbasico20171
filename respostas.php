<?php

    // Funções auxiliares

        // retorna o valor absoluto
        function vAbs ( $a ) {
            $aux=$a;
            if ($a<0) {
                for ( $i=0 ; $i>$aux ; $i-- ) {
                    $a++;
                    $a++;
                }
            }
            return $a;
        }

	// Atividade 4

	function soma ( $a , $b ) { 
        // inverte para ter o menor número de loops no for
		if ( vAbs($a) < vAbs($b) ) {
            $aux=$a;
            $a=$b;
            $b=$aux;
        }
        // se b for negativo decrementa a, senão encrementa
        if ($b<0) {
    		for ( $i = 0 ; $i < vAbs($b) ; $i++ ) {
    			$a--;
    		}
        } else {
            for ( $i = 0 ; $i < $b ; $i++ ) {
                $a++;
            }
        }
		return $a;
	}

	// Atividade 5

	function multiplicacao ( $a , $b ) {
		// inverte para ter o menor número de loops no for
        if ( vAbs($a) < vAbs($b) ) {
            $aux=$a;
            $a=$b;
            $b=$aux;
        }
        $aux=$a;
        if ($b<0) {
    		for ( $i = 1 ; $i < vAbs($b) ; $i++ ) {
    			$a=soma($a, $aux);
    		}
            return -$a;
        } else {
            for ( $i = 1 ; $i < $b ; $i++ ) {
                $a=soma($a, $aux);
            }
		    return $a;
        }
	}

    // Atividade 6

    function potencia ( $a , $b ) {
        $aux=$a;
        if ($b<0) {
            for ( $i = 1 ; $i < vAbs($b) ; $i++ ) {
                $a=multiplicacao($a, $aux);
            }
            // como não estou lidando com double, preferi retornar como string para representar uma fração
            if ($a<0) { 
                // para o menos ficar no valor de cima
                return "-1/".vAbs($a);
            } else {
                return "1/".$a;
            }
        } else {
            for ( $i = 1 ; $i < $b ; $i++ ) {
                $a=multiplicacao($a, $aux);
            }
            return $a;
        }
    }

    // Atividade 7

    function caixaBaixa ( $str ) { //se o char está maiúsculo somo a 32 para pegar o equilavalente pela tabela ascii
        for ($i=0 ; $i<strlen($str) ; $i++ ) {
            if (ord($str[$i])>64 && ord($str[$i])<91) {
                $str[$i] = chr( soma( ord($str[$i]) , 32 ) );
            }
        }
        return $str;
    }

    // Atividade 8

    function binario ( $a ) {
        if (vAbs($a)<2) { // último caso
            return $a<0? 1 . vAbs($a) : 0 . $a; // retorna o sinal (0 positivo, 1 negativo)
        }
        return (binario($a/2) . $a%2); // deixei o return em string pois se for int o 0 a esquerda que identifica posivo é excluído
    }

    // Atividade 9

    function reta ( $x1 , $y1 , $x2 , $y2 ) { // apenas aplicação de fórmula
        return (soma (potencia( ($x2-$x1), 2) , potencia( ($y2-$y1), 2)))**0.5; // **eleva a 1/2 que é raiz de 2
    }

    // Atividade 10

    function procuraStr ( $agulha , $palheiro ) {
        for ( $i=0 ; $i<strlen($palheiro); $i++) { //roda o palheiro procurando um 1 caso parecido
            if ($palheiro[$i]===$agulha[0]) { // se achar começo a olhar a partir dali
                $aux=true;
                for ( $j=1 ; $j<strlen($agulha) ; $j++) {
                    if ($agulha[$j]!==$palheiro[$j+$i]) { // se tiver algum diferente paro o for
                        $aux=false;
                        break;
                    }
                }
                if ($aux) {
                    return true;
                }
                $i+=$j; //pulo o $i pela parte q já chequei
            }
        }
        return false;
    }

    // Atividade 11

    function procuraStr2 ( $agulha , $palheiro) { //deixo tudo em caixa baixa e confiro depois
        return procuraStr( caixaBaixa($agulha), caixaBaixa($palheiro));
    }

    $inteiroA = ;
    $inteiroB = ;
    $stringA = "";
    $stringB = "";

	var_dump();

?>