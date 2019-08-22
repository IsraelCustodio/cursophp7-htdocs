<?php 

class Carro {

	private $modelo;
	
	public function getModelo()	{
		return $this->modelo;
	}

	public function setModelo($modelo) {
		$this->modelo = $modelo;
	}

	private $motor;
	
	public function getMotor():float {
		return $this->motor;
	}

	public function setMotor($motor) {
		$this->motor = $motor;
	}

	private $ano;

	public function getAno():int {
		return $this->ano;
	}

	public function setAno($ano) {
		$this->ano = $ano;
	}

	public function exibir() {
		return array
		(
			"modelo" => $this->getModelo(),
			"motor" => $this->getMotor(),
			"ano" => $this->getAno()
		);
	}

}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

print_r($gol->exibir());

echo "<br><br>";

var_dump($gol->exibir());

 ?>