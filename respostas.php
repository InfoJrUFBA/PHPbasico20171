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

    function caixaBaixa (string $str) {
        for ($i=0 ; $i<strlen($str) ; $i++ ) {
            if (ord($str[$i])>64 && ord($str[$i])<91) {
                $str[$i] = chr( soma( ord($str[$i]) , 32 ) );
            }
        }
        return $str;
    }

    $inteiroA = 2;
    $inteiroB = -3;
    $string = "Ata Po!";

	echo caixaBaixa ($string);

?>