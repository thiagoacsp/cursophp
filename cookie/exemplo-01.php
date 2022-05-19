<?php 

$data = array(
	"empresa"=>"Engloba Digital"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";


?>