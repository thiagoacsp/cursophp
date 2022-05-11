<?php 
$json = '
[{"nome":"Thiago","idade":"36"},{"nome":"Thatiana","idade":"40"}]';

$data = json_decode($json, true);

var_dump($data);

 ?>