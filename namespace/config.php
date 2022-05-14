<?php 

spl_autoload_register(function($nameClass){

	var_dump($nameClass). "<br/>";
	$barra = DIRECTORY_SEPARATOR;
	$dirClass = "class";
	$filename = $dirClass . $barra . $nameClass . ".php";

	if (file_exists($filename)){

		require_once($filename);
	}

});
?>