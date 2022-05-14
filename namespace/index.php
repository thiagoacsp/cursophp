<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Thiago Alves");
$cad->setEmail("thiagoacsp@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();
?>