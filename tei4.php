<?php
	//PROBLEMA 4
	//echo tei(5 . 10);
	function tei( $a , $b ){
	if( $a >= $b ){
		for( $i = 1 ; $i <= $b ; $i++){
			$a++;
		}
		return $a;
	}
	else if( $a <= $b){
		for( $i = 1 ; $i <= $a ; $i++){
			$b++;
		}
		return $b;
	}
}

	//PROBLEMA 5
	//echo mult(99 , 10);
	function mult ($a ,$b){
		$a2 = $a;
		for( $i = 1 ; $i < $b ; $i++ ){
			$a = tei( $a , $a2 );
		}
		return $a;
	}
	//PROBLEMA 6
	//echo power(4 , 2);
	function power($a , $b){
		$a2 = $a;
		for( $i = 1 ; $i < $b ; $i++){
			$a = mult( $a , $a2 );
		}
		return $a;
	}

	//PROBLEMA 7
	//echo sete('ABCDEFGJJJJ');
	function sete($s){
		for( $i = 0 ; $i < strlen($s) ; $i++){
			if(ord($s[$i]) > 96){

			}
			else
			$s[$i] = chr(ord($s[$i])+32);
	}
		return $s;
	}
	//PROBLEMA 8
	//echo bin(12);
	function tei2( $a , $b ){
	if( $a >= $b ){
		for( $i = 1 ; $i <= $b ; $i++){
			$a--;
		}
		return $a;
	}
	else if( $a <= $b){
		for( $i = 1 ; $i <= $a ; $i++){
			$b--;
		}
		return $b;
	}
}
	function div($a , $b){

	}
	function concatena($stringA, $stringB) {
	$stringA .= " ";
	$stringA .= $stringB;
	return $stringA;
}
	$str = '';
	function bin($nat, $arg = 2){
    $num = "01";
    $str = '';
    do {
        $str = concatena($num[$nat % $arg] , $str) ;
        $nat = (int)($nat / $arg);
    }
    while($nat);
    return $str;
}
	//PROBLEMA 9
	//echo coord(2 , 4 , 5 , 90);
	function coord($x1 , $y1 , $x2 , $y2){
		$a = sqrt(tei(power(tei2($x2 , $x1) , 2) , power(tei2($y2 , $y1) , 2)));
		return $a;
	}



?>
