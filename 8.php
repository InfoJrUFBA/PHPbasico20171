- A oitava atividade é criar uma função que recebe um número natural e retorna seu equivalente em binário. Não pode usar funções prontas, com a excessão dosa funçãos criados em atividades anteriores.
<?php
    $number = 123;
    function conversor($number){
    	$binario="":
    	while ($valor !+0): {
    		$resto = $valor % 2;
    		$binario=$resto.$binario;
    		endwhile;

    		return $binario;
    	}
    }

echo $number;
?>