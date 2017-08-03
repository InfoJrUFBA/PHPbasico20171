<?php 

	//Declara as variáveis para as operações
	$num1 = 59;
	$num2 = 3;
	$s = "ERA uma VEZ um LUGARZINHO no MEIO do NADA";

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
		
		//Variável de resultado vai ser um somatório de $(número menor) parcelas, cada uma de valor '$(número maior)'
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

	//Cria função que eleva o primeiro número natural pelo segundo
	function potencia ($a, $b){
		
		//Variável de resultado vai ser um produtório de $b parcelas, cada uma de valor '$a'
		$result = 1;
			
			for($i=0; $i<$b; $i ++){
			$result = produto($result,$a);		
			}
		
		return $result;
	}

	//Cria função que transforma uma string para letras minúsculas
	function minusculas($str){
		
		/*Verifica cada char da string, analisando se seu valor na tabela ASCII está entre 'A' e 'Z'.
		Caso esteja, soma a esse char o valor de ('a'-'A'), que é a distância entre qualquer letra minuscula e maiúcula na tabela ASCII, tendo em vista que MAIÚSCULA < minúscula.*/
		for($i=0; $i<strlen($str); $i++){
			if(ord($str[$i]) >= ord('A') && ord($str[$i]) <= ord('Z')){
				$str[$i] = chr(ord($str[$i]) + ord('a') - ord('A'));
			}
		}
		return $str;

		/* Tentei ao máximo tratar das letras maiúsculas com acento, mas tudo que eu pesquisei na internet dizia a respeito da função já pronta strtolower(). 
		Quando faz-se ord() de qualquer letra com acento, ele retorna "195". 
		E quando faz-se chr() de qualquer número maior que 127 ele retorna uma "?". 
		Portanto, não consegui tratar dos caracteres especiais.*/
	}

	//Cria função que converte base 10 em base 2
	function binario($a){
		//Declara uma string sem caracteres.
		$convert = "";
		//Converte para base 2, dividindo o quociente por 2 até o resultado ser menor que 1 e concatenando o resto de cada divisão na string $convert.
		while (true){
			$convert .= ($a%2);
			if($a/2 < 1) break;
			$a = $a/2;
		}
		
		//Como os algarismos de $convert estão na ordem invertida do resultado que queremos, declara uma nova string $bin vazia e concatena os algarismos de $convert do último ao primeiro, deixando a ordem do resultado correta. 
		$bin = "";
		for($i=(strlen($convert)-1); $i>=0; $i--){
			$bin .= $convert[$i];
		}

		return $bin;
	}

	//Cria função que calcula a distância entre 2 pontos
	function distancia ($x1, $y1, $x2, $y2){
		//Fórmula da distância entre dois pontos #IloveGA
		$dist = sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));

		return $dist;
	}

	function substring ($agulha, $palheiro){
		
		$sub = false;
		if (strlen($agulha) <= strlen($palheiro)) {
			for ($i=0; $i<strlen($palheiro); $i++) { 
			$teste = "";
				for ($j=$i; $j<($i+strlen($agulha)) ; $j++) { 
					if ($i+strlen($agulha) > strlen($palheiro)) break;
					else $teste .= $palheiro[$j];
				}
			if ($teste == $agulha) $sub = true;
			}
		}
		return $sub;
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Atv. PHP Básico</title>
	</head>
	<body>
		<div><h3>Função de Soma</h3>
		<p>
			<?php
				//Guarda o retorno da fuñção em uma variável
				$result1 = soma($num1, $num2);
				//Exibe o resultado
				echo "$num1 + $num2 = $result1";
		 	?>
		 	
		</p></div>

		<div><h3>Função de Multiplicação</h3>
		<p>
			<?php
				//Guarda o retorno da fuñção em uma variável
				$result2 = produto($num1, $num2);
				//Exibe o resultado
				echo "$num1 x $num2 = $result2";
		 	?>
		 	
		</p></div>

		<div><h3>Função de Potência</h3>
		<p>
			<?php
				//Guarda o retorno da fuñção em uma variável
				$result3 = potencia ($num1, $num2);
				//Exibe o resultado
				echo "$num1 ^ $num2 = $result3";
		 	?>
		 	
		</p></div>

		<div><h3>Função de LowerCase</h3>
		<p>
			<?php
				//Guarda o retorno da fuñção em uma variável
				$result4 = minusculas($s);
				//Exibe o resultado
				echo "$s >> $result4";
		 	?>
		</p></div>

		<div><h3>Função de Conversão (Base 10 >> Base 2)</h3>
			<?php
				//Guarda os retornos das fuñções em duas variáveis
				$result5 = binario($num1);
				$result6 = binario($num2);
		 	?>
		 	<p><?php echo "$num1 >> $result5"; ?></p>
		 	<p><?php echo "$num2 >> $result6"; ?></p>
		</div>

		<div><h3>Função de Distância entre pontos</h3>
		<p>
			<?php
				//Guarda o retorno da fuñção em uma variável
				$x1 = 7; $y1 = 3; $x2 = 5;  $y2 = 2; 
				$result7 = distancia($x1, $y1, $x2, $y2);
				//Exibe o resultado
				echo "Dados os pontos A = ($x1,$y1) e B = ($x2,$y2):
				<br /> Distância entre A e B = $result7";
		 	?>
		</p></div>

		<div><h3>Função de Substring</h3>
		<p>
			<?php
				
				//Guarda o retorno da fuñção em uma variável
				$str1 = "Aqui é a PULIÇa";
				$str2 = "PUL";
				$result8 = substring($str2, $str1);
				if ($result8 == true) echo "'$str2' é substring de '$str1'";
				else echo "'$str2' não é substring de '$str1'";
		 	?>
		</p></div>
	</body>
</html>