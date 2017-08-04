<?php
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

?>