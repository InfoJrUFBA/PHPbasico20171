<?php

	$inteiroA = 2;
	$inteiroB = 3;

	// Atividade 4

	function soma ( $a , $b ) { 
		for ( $i = 0 ; $i < $b ; $i++ ) {
			$a++;
		}
		return $a;
	}

	// Atividade 5

	function multiplicacao ( $a , $b ) {
		for ( $i = 0 ; $i < $b ; $i++ ) {
			soma($a, $a);
		}
		return $a; 
	}

	echo multiplicacao($inteiroA, $inteiroB);

?>