<?php 

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'Thiago',
	'idade'=>'36'
));

array_push($pessoas, array(
	'nome'=>'Thatiana',
	'idade'=>'40'
));

echo json_encode($pessoas);
 ?>