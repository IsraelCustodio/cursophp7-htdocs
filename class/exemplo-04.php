<?php 

class Endereco {

	private $logradouro;

	public function getLogradouro()	{
		return $this->logradouro;
	}

	public function setLogradouro($logradouro) {
		$this->logradouro = $logradouro;
	}

	private $numero;

	private $cidade;

	// método mágico ou construtor com 3 parâmetros
	public function __construct($a, $b, $c)	{
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}

	public function __destruct() {
		var_dump("DESTRUIR");
	}

	public function __toString() {
		return $this->logradouro . ", " . $this->numero . " - " . $this->cidade;
	}

}

$meuEndereco = new Endereco("Rua José Guidotti", "137", "Artur Nogueira");

var_dump($meuEndereco);

echo "<br><br>";

echo $meuEndereco;

echo "<br><br>";

unset($meuEndereco);

 ?>