<!DOCTYPE html>
<html>
<head>
	<title>O melhor de todos</title>
	 <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="chris.css">
</head>
<body>
<section class="pe">
	<h1>Perguntas: </h1>
	<form method="post" action="chris.php">
		<h3>Exercício 1 (a+b):</h3>
		a: <input type="number" min="0" name="a" >
		b: <input type="number" min="0" name="b" >
		<h3>Exercício 2 (a*b):</h3>
		a: <input type="number" min="0" name="c" >
		b: <input type="number" min="0" name="d" >
		<h3>Exercício 3 (a^b):</h3>
		a: <input type="number" min="0" name="e" >
		b: <input type="number" min="0" name="f" >
		<h3>Exercício 4 (strtolower):</h3>
		texto: <input type="text" name="s">
		<h3>Exercício 101 (Decimal -> Binário)):</h3>
		número: <input type="number" name="n" min='0'>
		<h3>Exercício 6 (Distância entre pontos):</h3>
		Ponto 1- x: <input type="number" name="x1" min='0'>
		y: <input type="number" name="y1" min='0'><br>
		Ponto 2- x: <input type="number" name="x2" min='0'>
		y: <input type="number" name="y2" min='0'><br>
		<h3>Exercício 7 (Agulha no Palheiro):</h3>
		Agulha: <input type="text" name="a">
		Palheiro: <input type="text" name="p">
		<h3>Exercício 8 (Agulha no Palheiro - Case Insensitive):</h3>
		Agulha: <input type="text" name="ag">
		Palheiro: <input type="text" name="pa">
		<input class="btn" type="submit" name="send">
	</form>
</section>

<section class="re">
	<?php
	echo "<h1>Respostas: </h1>";
		$a=$_POST["a"];
		$b=$_POST["b"];
		function ex1($a, $b){
			$tot=$a;
			for ($i=0; $i <$b; $i++) { 
				$tot++;
			}
			return $tot;
		}
		$re1 = ex1($a,$b);
		echo "<h2>1: $re1</h2>";

	
		$a=$_POST["c"];
		$b=$_POST["d"];
		function ex2($a, $b){
			$tot=0;
			for ($i=0; $i <$b; $i++) {
				$tot=ex1($tot,$a);
			}
			return $tot;
		}

		$re2=ex2($a,$b);
		echo "<h2>2: $re2</h2>";
	
		$a=$_POST["e"];
		$b=$_POST["f"];
		function ex3($a, $b){
			$tot=1;
			for ($i=0; $i <$b; $i++) {
				$tot = ex2($tot,$a);
			}
			return $tot;
		}

		$re3 = ex3($a,$b);
		echo "<h2>3: $re3</h2>";
	
		$s=$_POST["s"];
		function ex4($s){
			for ($i=0; $i < strlen($s) ; $i++) { 
				if (ord($s[$i])>=ord("A") and ord($s[$i])<=ord("Z")) {
					$s[$i]=chr(ord($s[$i])+32);
				}
			}
			return $s;
		}

		$re4 = ex4($s);
		echo "<h2>4: $re4</h2>";
	
		$n=$_POST["n"];
		function ex101($n){
			$tot=0;
			$j=0;
			$re = array();
			while($n>=1){
				$re[$j++]=$n%2;
				(int)$n/=2;
			}
			for ($i= count($re)-1; $i > -1 ; $i--) { 
				$tot+=$re[$i]*pow(10,$i);
			}
			return $tot;
		}

		$re101 = ex101($n);
		echo "<h2>101: $re101</h2>";

		$x1=$_POST["x1"];
		$y1=$_POST["y1"];
		$x2=$_POST["x2"];
		$y2=$_POST["y2"];

		function ex6($x1, $x2,$y1,$y2){
			$tot=0;
			if($x1>$x2){
				$tot+=pow($x1-$x2, 2);
			}else $tot+=pow($x2-$x1, 2);
			if($y1>$y2){
				$tot+=pow($y1-$y2, 2);
			}else $tot+=pow($y2-$y1, 2);
			return sqrt($tot);
		}
		$re6 = ex6($x1, $x2,$y1,$y2);
		echo "<h2>6: $re6</h2>";

		$a=$_POST["a"];
		$p=$_POST["p"];
		function exsete($a, $p){
			$j=0;
			for ($i=0; $i < strlen($p); $i++) { 
				if (ord($a[$j])==ord($p[$i])) {
					while (ord($a[$j])==ord($p[$i]) and $i<=strlen($p)) {
						$j++;
						if ($j==strlen($a)) {
							return "True";
						}
						$i++;
					}
					$j=0;
				}
			}
			return "False";
		}
		$resete = exsete($a,$p);
		echo "<h2>Sete: $resete</h2>";

		$ag=$_POST["ag"];
		$pa=$_POST["pa"];
	
		$re8 = exsete(ex4($ag),ex4($pa));
		echo "<h2>8: $re8</h2>";
	?>
<p>(Obs: O teclado não tinha os botões do cinco e do sete)</p>
</section>
</body>
