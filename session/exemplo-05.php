<?php 
require_once("config.php");

echo session_save_path() . "<br/>";

// var_dump(session_status()) . "<br/>";;

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "As sessões estiverem desabilitadas.";
		break;
	case PHP_SESSION_NONE:
		echo "As sessões estiverem habilitadas, mas nenhuma existir.";
		break;
	case PHP_SESSION_ACTIVE:
		echo "As sessões estiverem habilitadas, e uma existir.";
		break;
}

 ?>