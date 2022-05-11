<?php 

session_id('5uk3n2n1o56eec2f9vrnv7s6nf');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

 ?>