<?php
	//quarta questão
	function soma($a, $b);{
		for($i = 0; $i < $b; $i++){
			$a++;
		}
		return $a;
	}
	//quinta questão
	function multiplicacao($a, $b){
		$cont=0;
		for($i = 0; $i < $a; $i++){
			$cont += soma($a, $b);
			}
		}
		return $cont;
	}
	//sexta questão
	function pow($a, $b){
		$c = $a
		for($i = 0; $i < $b-1; $i++){
			$c = multiplicacao($c, $a);
		}
		return $c;
	}
	//setima questão
	function nocaps($string){
		$a = 0;
		for($i = 0;$i < strlen($string); $i++){
			$a = ord($string[$i])
			if($a>65 && $a<90){
				$string[$i]=chr($a+32);
			}
		}
		return $string;
	}
	//oitava questão
	function binario($a){
		$string = "0";
		while($a!=0){
			if($a%2==0){
				"0" .= $string;
			}
			else{
				"1" .= $string;
			}
			$a=/2;
		}
		return $string;
	}
	//nona questão
	function distancia($x0, $y0, $x1, $y1){
		$dist=(($x1-$x0)*($x1-$x0) + ($y1-$y0)*($y1-$y0));
		return srqt($dist);
	}
	//décima questão
	function palheiro1($string1, $string2){
		$j=0;
		$flag=false;
		$cont=0;
		for($i = 0; $i < strlen($string1); $i++){
			if(ord($string1[$i])==ord($string2[$j])&&$j!=strlen($string2)){
				$j++;
			}
			else if(ord($string1[$i])!=ord($string2[$j])&&$j!=strlen($string2)){
				$j=0;
				$i-=1;
			}
			if($j==strlen($string2)){
				$flag=true;
			}
		}
		return $flag;
	}
	//décima primeira questão
	function palheiro2($string1, $string2){
		$string3 = nocaps($string1);
		$string4 = nocaps($string2);
		return palheiro1($string3, $string4);
	}


?>