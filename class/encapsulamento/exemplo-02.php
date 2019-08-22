<?php 

class Pessoa 
{

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	private function verDados()	{

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";

	}

}

class Programador extends Pessoa {

	private function verDados()	{

		echo get_class($this) . "<br/><br/>";

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";

	}

	public function vendoDados() {
		$this->verDados();
	}

}

$objeto = new Programador();

//echo $objeto -> nome . "<br/>";

//echo $objeto -> idade . "<br/>";

//echo $objeto -> senha . "<br/>";

//$objeto -> verDados();

$objeto->vendoDados();

 ?>