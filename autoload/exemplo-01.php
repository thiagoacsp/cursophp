<?php 

function spl_autoload_register($nomeClasse){

	require_once("$nomeClasse.php");
}
//require_once("DelRey.php");

$carro = new DelRey();

?>