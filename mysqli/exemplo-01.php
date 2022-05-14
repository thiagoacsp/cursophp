<?php 

$conn = new mysqli("localhost","root","","dpphp7");

if ($conn->connect_error){

	echo "Error: " . $conn->connect_erro;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?,?)");

$stmt->bind_param("ss", $login, $senha);

$login = "user";
$senha = "12345";

$stmt->execute();

$login = "root";
$senha = "!@#$";

$stmt->execute();
?>