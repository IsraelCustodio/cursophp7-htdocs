<?php 

class Pessoa {

	public $nome; //Atributo
	public $sobrenome;

	//Método
	public function falar()	{
		return "O meu nome é " . $this->nome . ' ' . $this->sobrenome;
	}

}

$israel = new Pessoa();
$israel->nome = "Israel";
$israel->sobrenome = "Custódio";

echo $israel->falar();

 ?>