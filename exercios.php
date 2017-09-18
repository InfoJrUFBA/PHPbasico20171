<?php
 /*A quarta atividade é criar uma função que recebe dois naturais, $a e $b, e retorna $a+$b. Mas usando APENAS loops, ifs, incremento e decremento. Ou seja, nada de '+', '-', '*', '/', etc. Nem funções prontas!
 */
	$a = 3;
	$b = 4;
    $contador=0;
	
    //3+4 = 1+1+1 + 1+1+1+1 = 7
	function contadora($a,$b){
	for($i = 0 ; $i < $a ; $i ++){
		$contador++;
	}

	for($i = 0 ; $i < $b ; $i++){
		$contador++;
	}
}
echo contadora;

/*A quinta atividade é criar uma função que recebe dois naturais, $a e $b, e retorna $a*$b. Mas usando APENAS loops, ifs, incremento e decremento. Ou seja, nada de '+', '-', '*', '/', etc. Nem funções prontas! Mas pode usar a função de soma feito na quarta atividade.
*/
	$a = 3;
	$b = 4;
    $contador=0;
	

    //3*4 = 4+4+4 = 1+1+1+1 + 1+1+1+1 + 1+1+1+1 = 12
    //3*4 = 3+3+3+3 = 1+1+1 + 1+1+1 + 1+1+1 + 1+1+1 = 12


	function contadora($a,$b){
	for($i = 0 ; $i < $a ; $i ++){
		for($i = 0 ; $i < $b ; $i++){
			$contador++;
		}
	}
}
echo contadora;




/* A sexta atividade é criar uma função que recebe dois naturais, $a e $b, e retorna pow($a, $b). Mas usando APENAS loops, ifs, incremento e decremento. Ou seja, nada de '+', '-', '*', '/', etc. Nem funções prontas! Mas pode usar a função de soma feito na quarta atividade e o de multiplicação feito na quinta atividade.*/
	$a = 3;
	$b = 4;
    $contador=0;
	

    //3^4 = 3*3*3*3 = (1+1+1 + 1+1+1 + 1+1+1) *3*3 = (3+3+3 + 3+3+3 + 3+3+3) *3  = (9+9+9 + 9+9+9+ 9+9+9) = 81

	function contadora($a,$b){
	for($i = 0 ; $i < $b ; $i ++){

		for($i = 0 ; $i < $a ; $i ++){

			for($i = 0 ; $i < $a ; $i++){

				$contador++;
			}
		}
	}	
}
//3*4 = 4+4+4 = 1+1+1+1 + 1+1+1+1 + 1+1+1+1 = 12
//3*4 = 3+3+3+3 = 1+1+1 + 1+1+1 + 1+1+1 + 1+1+1 = 12
echo contadora;







/*A sétima atividade é criar uma função, que recebe uma string $s e retorna strtolower($s), mas sem usar funções prontas, com a excessão de chr(), ord() e strlen()! Dica: Pesuise tabela ASCII, e sua relação com as funções chr() e ord().*/
	//PHP
	$string_s = "PHP";
	
	//$string_s = strtolower($string_s);
	function conversor ($string_s) {
		
		//$indice[int strlen($string_s)];

		for($i = 0;$i < strlen($string_s);$i++){
			//entre o intervalo maiusculo e ASCII
			if( ord ( $string_s[$i] ) >= 65 && ord ( $string_s[$i] ) <= 90  )
				
				//$indice[$i] = ord($string_s[$i]);

				$string_s[ ord($string_s[$i]) ] = $string_s[ ord($string_s[$i]) + 32 ];
			}
		}
	}
	//php
	echo $string_s;



/* A oitava atividade é criar uma função que recebe um número natural e retorna seu equivalente em binário. Não pode usar funções prontas, com a excessão dosa funçãos criados em atividades anteriores.*/
	$number = 123;
    function conversor($number){
    	$binario="":
    	while ($valor !+0): {
    		$resto = $valor % 2;
    		$binario=$resto.$binario;
    		endwhile;

    		return $binario;
    	}
    }

echo $number;



/* A nona atividade é criar uma função que recebe quatro inteiros $x1, $y1, $x2, $y2, coordenadas cartesianas de 2 pontos. Sua função deve retornar a distância entre os 2 pontos.*/
	$x1=1;
	$y1=1;
	$x2=4;
	$y2=4;
	function()


/*A décima atividade é criar uma função que recebe duas strings $agulha e $palheiro. A função deve retornar true se $agulha é uma substring de $palheiro, ou false se não. Essa função deve ser case sensitive. O uso de funções prontas é proibido, com a excessão de strlen().*/



/*A décima primeira atividade é criar uma função que tem a mesma responsabilidade que a décima atividade, mas dessa vez é case insensitive. O uso de funções prontas é proibido, com a excessão de chr(), ord(), strlen(), e outras atividades. Dica: Pesuise tabela ASCII, e sua relação com as funções chr() e ord().*/








  ?>