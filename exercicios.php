<?php 
	//Declara as variáveis para as operações
	$num1 = 76;
	$num2 = 6;

	//Cria função que soma 2 numeros naturais
	function soma ($a, $b){
		/*Verifica o menor número. Incrementa  em loop o valor do menor no maior
		(Caso o segundo núemro seja muito maior, não precisará fazer tantos loops)*/
		if ($a>=$b) {
			for($i=0; $i<$b; $i ++){
			$a++;		
			}
			return $a;
		}
		
		else {
			for($i=0; $i<$a; $i ++){
			$b++;		
			}
			return $b;
		}
	}

	//Cria função que multiplica 2 numeros naturais
	function produto ($a, $b){
		$result = 0;
		if ($a>=$b) {
			for($i=0; $i<$b; $i ++){
			$result = soma($result,$a);		
			}
		}
		
		else {
			for($i=0; $i<$a; $i ++){
			$result = soma($result,$b);		
			}
		}
		return $result;
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Atv. PHP Básico</title>
	</head>
	<body>
		<h3>Função de Soma</h3>
		<p>
			<?php
				//Guarda o retorno da fuñção em uma variável
				$result1 = soma($num1, $num2);
				//Exibe o resultado
				echo "$num1 + $num2 = $result1";
		 	?>
		 	
		 </p>

		 <h3>Função de Multiplicação</h3>
		<p>
			<?php
				//Guarda o retorno da fuñção em uma variável
				$result2 = produto($num1, $num2);
				//Exibe o resultado
				echo "$num1 x $num2 = $result2";
		 	?>
		 	
		 </p>
	</body>
</html>