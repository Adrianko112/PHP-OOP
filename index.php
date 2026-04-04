<?php

class Vertebrate {
    public function __construct() {
        $this->printVertebrate();
    }

    protected function printVertebrate() {
        echo "Sono un vertebrato. \n";
    }
};

class WarmBlooded extends Vertebrate {
    public function __construct() {
        parent::__construct();
        $this->printWarmBlooded();
    }

    protected function printWarmBlooded() {
        echo "Sono a sangue caldo. \n";
    }
};

class ColdBlooded extends Vertebrate {
    public function __construct() {
        parent::__construct();
        $this->printColdBlooded();
    }

    protected function printColdBlooded() {
        echo "Sono a sangue freddo. \n";
    }
};

class Mammal extends WarmBlooded {
    public function __construct() {
        parent::__construct();
        $this->printMammal();
    }

    protected function printMammal() {
        echo "Sono un mammifero. \n";
    }
};

class Bird extends WarmBlooded {
    public function __construct() {
        parent::__construct();
        $this->printBird();
    }

    protected function printBird() {
        echo "Sono un uccello. \n";
    }
};

class Fish extends ColdBlooded {
    public function __construct() {
        parent::__construct();
        $this->printFish();
    }

    protected function printFish() {
        echo "Sono un pesce. \n";
        echo "SPLASH! \n";
    }
};

class Reptile extends ColdBlooded {
    public function __construct() {
        parent::__construct();
        $this->printReptile();
    }

    protected function printReptile() {
        echo "Sono un rettile. \n";
    }
};

class Amphibian extends ColdBlooded {
    public function __construct() {
        parent::__construct();
        $this->printAmphibian();
    }

    protected function printAmphibian() {
        echo "Sono un anfibio. \n";
    }
};

$magikarp = new Fish();

