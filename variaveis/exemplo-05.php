<?php

$nome = "Thiago";

function teste(){

	global $nome;
	echo $nome;

}

function teste2(){

	$nome = "Alves";

	echo $nome . " agora no teste 2";

}

teste();

echo "<br/>";

teste2();

?>