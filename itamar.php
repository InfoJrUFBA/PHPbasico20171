<?php
	// DESAFIO 04;
	function naturais_Som($a, $b){
		if($a <= $b){
			for($a; $a != 0; $a--){
				 $b++;
			}
		echo "Soma: ". $b;
		}
		
		if($a > $b){
			for($b; $b != 0; $b--){
				$a++;
			}
		echo  "Soma: ". $a;
	}
		}
	// DESAFIO 05;
	function naturais_Mult($a, $b){
        $z;
        if($a >= $b){
             $z = $a;
            for($b; $b > 1; $b--){
                 for( $i = 0; $i < $z; $i++){
                    $a++;
                 }
            }
            echo "Multiplicação: ". $a;
        }
        if($b > $a){
             $z = $b;
            for($a; $a > 1; $a--){
                 for( $i = 0; $i < $z; $i++){
                    $b++;
                 }
            }
            echo "Multiplicaçao: ". $b;
        }
	}
    // DESAFIO 06;
     // DESAFIO 07;

	function texto($string){
		$x = strlen($string);
		$x--;

		for($x; $x != -1; $x--){

			if(($string[$x] >= chr(65)) && ($string[$x]) <= chr(90)){				
				$b = ord($string[$x]);
				 $b = $b + 32;
				 $string[$x] = chr($b);  
			}
		}
		echo $string;
	}		

	function binario($decimal){
		$z = -1;
		$x = 0;
		while($z != 1){
			$z = $decimal/2;
			$vet[$x] = $decimal%2;
			$decimal = $z;
			$x++;
		}
		for($x; $x > 0; $x--){
			echo $vet[$x];
		}

	}

	function naturais_Potenc($a, $b){
        $c = $b;
          if($a > $b){
             $z = $a;
                while($c > 0){
        	    for($b; $b > 1; $b--){
            	     for($i = 0; $i < $z; $i++){
                	    $a++;
                	 }
            	}
            	$c--;
            	$b++;
        	}
          }
        echo "Potência: ". $a;
    }

    function cartesiano($x2, $x1, $y2, $y1){
    	$p = 1;
    	$d = ((($x2 - $x1) * ($x2 - $x1)) + (($y2 - $y1) * ($y2 - $y1)));
    	echo "Raiz de: " . $d;
    }
?>

<!DOCTYPE html>

<html> 
	<head>
		<meta charset="utf-8">
	 </head>
	<body>
		<p> <?php   naturais_Som(10, 40) ?> </p>
		<p> <?php  naturais_Mult(3, 3) ?> </p>
		<p> <?php  texto("itamaRIRI") ?> </p>
		<p> <?php  binario(10) ?> </p>
		<p> <?php  naturais_Potenc(3, 2) ?> </p>
		<p> <?php  cartesiano(4, 2, 5, -3) ?> </p>
		
	</body>
</html>