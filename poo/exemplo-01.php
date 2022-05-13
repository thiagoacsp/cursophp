<?php 

class Pessoa {

	public $nome;//Atributo

	public function falar(){//Método

		return "O meu nome é " . $this->nome;
	}
}

$thiago = new Pessoa();

$thiago->nome = "Thiago Alves";

echo $thiago->falar();
?>