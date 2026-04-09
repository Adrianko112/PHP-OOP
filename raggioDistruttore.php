<?php

require_once "classe1.php";

class RaggioDistruttore extends Attack
{
    public function attack()
    {
        echo "Raggio Distruttore: elimina il nemico! \n";
    }
}