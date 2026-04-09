<?php

require_once "class.php";

class Post {
    private $title;
    private $category;
    private $tag; 

    public function __construct($title, Category $category, $tag){
        $this->title = $title;
        $this->category = $category;
        $this->tag = $tag;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getCategory(){
        return $this->category->getMyCategory();
    }

    public function getTag(){
        return $this->tag;
    }

}

$post = new Post("Il titolo del mio primo post", new Attualita(), "Tag1, Tag2, Tag3");
echo $post->getTitle() . "\n";
echo $post->getCategory() ;
echo $post->getTag() . "\n";

$post2 = new Post("Il titolo del mio secondo post", new Sport(), "Tag4, Tag5, Tag6");
echo $post2->getTitle() . "\n";
echo $post2->getCategory();  
echo $post2->getTag() . "\n";