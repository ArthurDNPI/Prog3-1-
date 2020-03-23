<?php
class Carro{
  public $modelo;
  public $velocidademax;
  public $velocidadeatual;

public function Carro($modelo,$velm){
  $this->modelo = $modelo;
  $this->velolocidademax = $velm;
  echo "{$this->setModelo()} \n";
  $this->ligaCarro();
  $this->acelera();
  $this->reduzir();
  $this->pararCarro();
  $this->desligaCarro();
}
  public function ligaCarro(){
      echo"Carro ligado \n";
  }
  public function desligaCarro(){
    echo "Carro Desligado \n ";
  }
  public function acelera(){
    $this->velocidadeatual = $this->velolocidademax;
    echo "Acelerando \nVelocidade = {$this->velocidadeatual} km/h \n";
  }
  public function setModelo(){
    return $this->modelo;
  }
  public function reduzir(){
    $this->velocidadeatual = $this->velocidadeatual/2;
    echo"Reduzindo velocidade! \nVelocidade = {$this->velocidadeatual} km/h \n";
  }
  public function pararCarro(){
    $this->velocidadeatual = 0;
    echo "Carro parado \nVelocidade = {$this->velocidadeatual} km/h\n";
  }

}

$c1 = new Carro("BMW X",80);
?>