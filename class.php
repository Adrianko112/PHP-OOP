<?php

abstract class Category{
    abstract public function getMyCategory();
};

class Attualita extends Category{
    public function getMyCategory(){
        return "Sono nella categoria Attualità. \n";
    }
};

class Sport extends Category{
    public function getMyCategory(){
        return "Sono nella categoria Sport. \n";
    }
};

class Gossip extends Category{
    public function getMyCategory(){
        return "Sono nella categoria Gossip. \n";
    }
};

class Storia extends Category{
    public function getMyCategory(){
        return "Sono nella categoria Storia. \n";
    }
};

$storia = new Storia();
//echo $storia->getMyCategory();
