<?php

class Continent {
    public $nameContinent;

    public function __construct($continent) {
        $this->nameContinent = $continent;
    }

};

class Country extends Continent {
    public $nameCountry;

    public function __construct($continent, $country) {
        parent::__construct($continent);
        $this->nameCountry = $country;
    }

};

class Region extends Country{
    public $nameRegion;

    public function __construct($continent, $country, $region) {
        parent::__construct($continent, $country);
        $this->nameRegion = $region;
    }

};

class Province extends Region {
    public $nameProvince;

    public function __construct($continent, $country, $region, $province) {
        parent::__construct($continent, $country, $region);
        $this->nameProvince = $province;
    }

};

class City extends Province {
    public $nameCity;

    public function __construct($continent, $country, $region, $province, $city) {
        parent::__construct($continent, $country, $region, $province);
        $this->nameCity = $city;
    }

};

class Street extends City {
    public $nameStreet;

    public function __construct($continent, $country, $region, $province, $city, $street) {
        parent::__construct($continent, $country, $region, $province, $city);
        $this->nameStreet = $street;
    }

    public function getMyCurrentLocation() {
       echo "Mi trovo in $this->nameStreet, $this->nameCity, $this->nameProvince, $this->nameRegion, $this->nameCountry, $this->nameContinent.";
    }

};

$myLocation = new Street("Europa", "Italia", "Puglia", "Le", "Lecce", "Via Aldo Moro");
$myLocation->getMyCurrentLocation();