<?php

abstract class Category{
    abstract public function getMyCategory();
};

class Attualita extends Category{
    public function getMyCategory(){
        return "Sono nella categoria Attualità.";
    }
};

class Sport extends Category{
    public function getMyCategory(){
        return "Sono nella categoria Sport.";
    }
};

class Gossip extends Category{
    public function getMyCategory(){
        return "Sono nella categoria Gossip.";
    }
};

class Storia extends Category{
    public function getMyCategory(){
        return "Sono nella categoria Storia.";
    }
};

$storia = new Storia();
echo $storia->getMyCategory();

