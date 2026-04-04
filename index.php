<?php


class Company
{
    //attributi
    public $name;
    public $location;
    public $tot_employees;

    //attributo statico
    public static $salario = 1500;
    public static $totale = 0;
    
    
    //costruttore
    public function __construct($_name, $_location, $_tot_employees)
    {
        $this->name = $_name;
        $this->location = $_location;
        $this->tot_employees = $_tot_employees;
    }
    //metodi
    public function checkDipendenti($int1, $int2)
    {
        if ($int1 > $int2) {
            return true;
        } 
        return false;
    }

    public function numeroDipendenti($num=0)
    {
        if ($this->checkDipendenti($this->tot_employees, $num)) {
            echo "l'azienda $this->name con sede in $this->location ha ben $this->tot_employees dipendenti. \n";
        } else {
            echo "l'azienda $this->name con sede in $this->location non ha abbastanza dipendenti. \n";
        }
        
    }

    public function calcolaStipendioAnnuale($num)
    {
        return $this->tot_employees * (self::$salario * $num);
    }

    public function stampaStipendioAnnuale($month=12)
    {
        echo "----$this->name----\n";
        echo "Il costo annuale dell'azienda $this->name è di " . $this->calcolaStipendioAnnuale($month) . " euro \n";
    }

    public function calcoloCostoTotale($month=12)
    {
       return self::$totale += $this->calcolaStipendioAnnuale($month);
    }

     public static function stampaCostoTotale()
    {
        echo "Il costo totale di tutte le aziende è di " . self::$totale . " euro \n";
    }

}

//istanzio 5 oggetti 

$company1 = new Company("Aulab", "Italia", 50);
// applico funzioni
$company1->numeroDipendenti();
$company1->stampaStipendioAnnuale();
$company1->calcoloCostoTotale();


$company2 = new Company("Google", "Mountain View", 1505560);
$company2->numeroDipendenti();
$company2->stampaStipendioAnnuale();
$company2->calcoloCostoTotale();


$company3 = new Company("Microsoft", "Redmond", 204500);
$company3->numeroDipendenti();
$company3->stampaStipendioAnnuale();
$company3->calcoloCostoTotale();


$company4 = new Company("Amazon", "Seattle", 303400);
$company4->numeroDipendenti();
$company4->stampaStipendioAnnuale();
$company4->calcoloCostoTotale();


$company5 = new Company("Facebook", "Menlo Park", 0);
$company5->numeroDipendenti();
$company5->stampaStipendioAnnuale();
$company5->calcoloCostoTotale();

Company::stampaCostoTotale();




