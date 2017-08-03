<?php
	//4
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

	//7

	function sete($s){
		$s = 'ABCDEFGJJJJ';
		for( $i = 0 ; $i < strlen($s) ; $i++){
			if(ord($s[$i]) > 96){

			}
			else
			$s[$i] = chr(ord($s[$i])+32);
	}
		return $s;
	}
	//8
$str = '';
	function bin($nat, $arg = 2){	
    $num = "0123456789abcdefghijklmnopqrstuvwxyz";
    $str = '';
    do {
        $str = $num[$nat % $arg] . $str;
        $nat = (int)($nat / $arg);
    }
    while($nat);
    return $str;
}

	echo bin($str);
?>