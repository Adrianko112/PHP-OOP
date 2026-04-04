<?php



//Completa la classe Fiat con le strutture mancanti e, utilizzando il livello di severita' che ritieni piu' opportuno, estendi i metodi per stampare a terminale la seguente frase: “La mia macchina e' Opel, con targa ND 123 OJ e nmero di Telaio 1234“.

class Car {
  private $num_telaio;

  protected function setNumTelaio($num_telaio) 
  {
   return $this->num_telaio = $num_telaio;
  }

  protected function getNumTelaio() 
    {
        return $this->num_telaio;
    }
};

class Fiat extends Car {
  protected $license;
  protected $name;

  public function __construct($license, $name,) {
   $this->license = $license;  
  $this->name = $name;
  }

  public function SetMyCarTelaio($num_telaio) {
    return $this->setNumTelaio($num_telaio);
  }

    public function GetMyCarTelaio() {
        return $this->getNumTelaio();
    }

    public function printCarInfo() {
        echo "La mia macchina e' $this->name, con targa $this->license e numero di Telaio " . $this->GetMyCarTelaio() . ".";
    }
}

$myCar = new Fiat("ND 123 OJ", "Opel");
$myCar->SetMyCarTelaio("1234");
$myCar->printCarInfo();

