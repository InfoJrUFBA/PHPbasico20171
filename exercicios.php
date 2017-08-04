<?php 

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

	//Cria função que verifica se uma string é substring da outra (case sensitive)
	function substringSen ($agulha, $palheiro){
		
		//Para cada char de $palheiro, itera x  vezes $palheiro à direita (x=tamanho da string $agulha), concatenando cada char em uma string temporária $teste.
		$sub = false;
		if (strlen($agulha) <= strlen($palheiro)) {
			for ($i=0; $i<strlen($palheiro); $i++) { 
			$teste = "";
				for ($j=$i; $j<($i+strlen($agulha)) ; $j++) { 
					if ($i+strlen($agulha) > strlen($palheiro)) break;
					else $teste .= $palheiro[$j];
				}
			/*Compara se $teste é igual a $agulha. Caso seja, termina o loop e retorna "true".
			Caso contrário continua o loop. Se o loop terminar sem mudar o valor de $sub, retorna "false*/	
				if ($teste == $agulha){
			 		$sub = true;
			 		break;
				}
			}
		}
		return $sub;
	}

	//Cria função que verifica se uma string é substring da outra (case insensitive)
	function substringIn ($agulha, $palheiro){
		//Usa a função "minusculas" para converter as duas strings para letras minúsculas
		$agulha = minusculas($agulha);
		$palheiro = minusculas($palheiro);
		
		//Usa a função de verificação de substring com as strings convertidas
		return substringSen ($agulha, $palheiro);

		/*Mais uma vez, no caso de caracteres especiais, vai dar errado, pelos mesmos motivos ditos anteriormente*/
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Atv. PHP Básico</title>
		<link href="style.css" type="text/css" rel="stylesheet">
		<?php
			echo "<link rel=”stylesheet” type=”text/css” href=”estilo.css” />"
		?>
	</head>
	<body>
		<h1>Funções: PHP Básico</h1>
		<h3>InfoJr UFBA 2017.1 - Vinícius Pinto</h3>
		<div><h3>Função de Soma</h3>
		<p>
			<?php
				$num1 = 78945; $num2 = 55541;
				//Guarda o retorno da fuñção em uma variável
				$result1 = soma($num1, $num2);
				//Exibe o resultado
				echo "$num1 + $num2 = $result1";
		 	?>
		 	
		</p></div>

		<div><h3>Função de Multiplicação</h3>
		<p>
			<?php
				$num3 = 46; $num4 = 8945;
				//Guarda o retorno da fuñção em uma variável
				$result2 = produto($num3, $num4);
				//Exibe o resultado
				echo "$num3 x $num4 = $result2";
		 	?>
		 	
		</p></div>

		<div><h3>Função de Potência</h3>
		<p>
			<?php
				$num5 = 56; $num6 = 4;
				//Guarda o retorno da fuñção em uma variável
				$result3 = potencia ($num5, $num6);
				//Exibe o resultado
				echo "$num5 ^ $num6 = $result3";
		 	?>
		 	
		</p></div>

		<div><h3>Função de LowerCase</h3>
		<p>
			<?php
				$s = "Eu sou o DOUGLAS, vC nao e o DOUGLAS";
				//Guarda o retorno da fuñção em uma variável
				$result4 = minusculas($s);
				//Exibe o resultado
				echo "$s >> $result4";
		 	?>
		</p></div>

		<div><h3>Função de Conversão (Base 10 >> Base 2)</h3>
			<?php
				$num7 = 7555; $num8 = 211;
				$result5 = binario($num7);
				$result6 = binario($num8);
		 	?>
		 	<p><?php echo "$num7 >> $result5"; ?></p>
		 	<p><?php echo "$num8 >> $result6"; ?></p>
		</div>

		<div><h3>Função de Distância entre pontos</h3>
		<p>
			<?php
				$x1 = 7; $y1 = 3; $x2 = 5;  $y2 = 2; 
				$result7 = distancia($x1, $y1, $x2, $y2);
				//Exibe o resultado
				echo "Dados os pontos A = ($x1,$y1) e B = ($x2,$y2):
				<br /> Distância entre A e B = $result7";
		 	?>
		</p></div>

		<div><h3>Função de Substring Case Sensitive</h3>
		<p>
			<?php
				
				$str1 = "Arya Stark, de Winterfell";
				$str2 = "sTARK";
				$result8 = substringSen($str2, $str1);
				if ($result8 == true) echo "'$str2' é substring de '$str1'";
				else echo "'$str2' não é substring de '$str1'";
		 	?>
		</p></div>

		<div><h3>Função de Substring Case Insensitive</h3>
		<p>
			<?php
				
				$str3 = "Arya Stark, de Winterfell";
				$str4 = "sTARK";
				$result9 = substringIn($str4, $str3);
				if ($result9 == true) echo "'$str4' é substring de '$str3'";
				else echo "'$str4' não é substring de '$str3'";
		 	?>
		</p></div>
		
	</body>
</html>