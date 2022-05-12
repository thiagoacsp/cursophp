<?php 

$pessoa = array(
	'nome'=>'Thiago',
	'idade'=>36
);

foreach ($pessoa as &$value) {
	if(gettype($value) === 'integer') $value += 10;
	echo $value;
	echo "<br/>";
}

print_r($pessoa);
?>