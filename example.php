<?php

function concatenate($stringA, $stringB) { //Aqui define a função concatenate, que recebe duas strings e concatena elas com espaço entre elas
	$stringA .= " ";
	$stringA .= $stringB;
	return $stringA;
}

function printConcatenatedStrings($strA, $strB) {
	$answer = concatenate($strA, $strB); //Aqui o método chama o método que definimos acima
	echo $answer; //Essa função não tem return, por que ela só imprime o que a outra retorna
}

printConcatenatedStrings("Boa", "Sorte"); //Aqui simplesmente chama a função acima, imprimindo na tela. Acima nós só definimos as funções, aqui é que botamos uma delas pra rodar.

?>