<?php 

function ola($texto = "mundo", $periodo = "Bom dia"){

	return "Olá $texto! $periodo!";
}

echo ola();
echo "<br/>";
echo ola("Thiago","Boa noite");
echo "<br/>";
echo ola("Thatiana","");
echo "<br/>";

?>