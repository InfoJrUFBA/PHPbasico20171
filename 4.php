<?php
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

?>