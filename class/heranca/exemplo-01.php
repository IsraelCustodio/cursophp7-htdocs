<?php 

class Documento {

	private $numero;

	public function getNumero() {
		return $this->numero;
	}

	public function setNumero($n) {
		$this->numero = $n;
	}
}

class Cpf extends Documento {

	public function validar():bool {
		$numeroCpf = $this->getNumero();
		//Validação do CPF
		return true;
	}
}

$doc = new Cpf();
$doc->setNumero("111111111-12");

var_dump($doc->validar());

echo "<br/><br/>";

echo $doc->getNumero();

 ?>