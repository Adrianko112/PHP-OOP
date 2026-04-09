<?php

trait Calculator {

public function sum($a, $b) {
  return $a + $b;
}

public function sub($a, $b) {
  return $a - $b;
}

public function mul($a, $b) {
  return $a * $b;
}

public function div($a, $b) {
  return $a / $b;
}

public function sqr($a){
  return sqrt($a);
}

}

class Rettangolo {
    use Calculator;

  public $base;
  public $altezza;

    public function __construct($base, $altezza) {
        $this->base = $base;
        $this->altezza = $altezza;
    }

    public function area() {
        return $this->mul($this->base, $this->altezza);
    }

    public function perimetro() {
        $sumBaseAltezza = $this->sum($this->base, $this->altezza);
        $result= $this->mul(2, $sumBaseAltezza);
        return $result;
    }

    public function diagonal() {
        $baseSquared = $this->mul($this->base, $this->base);
        $altezzaSquared = $this->mul($this->altezza, $this->altezza);
        $sumSquares = $this->sum($baseSquared, $altezzaSquared);
        $result = $this->sqr($sumSquares);
        return $result;
    }
  

}

$rettangolo = new Rettangolo(7, 4); 
echo "Area: " . $rettangolo->area() . "\n";
echo "Perimetro: " . $rettangolo->perimetro() . "\n";
echo "Diagonale: " . $rettangolo->diagonal() . "\n";
