<?php

//IronMan

require_once "jammer.php";
require_once "raggioDistruttore.php";
require_once "pugnoDiFerro.php";
require_once "scudoImpenetrabile.php";

class IronMan
{
    public $attack;
    public $defense;
    public static $counter = 0;

    public function __construct(Attack $attack, Defense $defense)
    {
        $this->attack = $attack;
        $this->defense = $defense;
        self::$counter++;
    }

    public function goAttack()
    {
        $this->attack->attack();
    }

    public function goDefense()
    {
        $this->defense->defense();
    }
}   

//esercito di IronMan
$ironMan = new IronMan(new RaggioDistruttore(), new ScudoImpenetrabile());
$ironMan->goAttack(); 
$ironMan->goDefense();

$ironMan2 = new IronMan(new PugnoDiFerro(), new Jammer());
$ironMan2->goAttack();
$ironMan2->goDefense();

$ironMan3 = new IronMan(new RaggioDistruttore(), new Jammer());
$ironMan3->goAttack();
$ironMan3->goDefense();

$ironMan4 = new IronMan(new PugnoDiFerro(), new ScudoImpenetrabile());
$ironMan4->goAttack();
$ironMan4->goDefense();


echo "Numero di IronMan creati: " . IronMan::$counter . "\n";