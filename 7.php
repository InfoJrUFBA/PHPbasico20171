<?php
/*- A sétima atividade é criar uma função, que recebe uma string $s e retorna strtolower($s), mas sem usar funções prontas, com a excessão de chr(), ord() e strlen()! Dica: Pesuise tabela ASCII, e sua relação com as funções chr() e ord().*/

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
?>