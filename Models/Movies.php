<?php
/**
 * ## Class Movie
 * Define a Movie object
 */
class Movie extends Production{

    /**
     * @var $profits = Movie profits
     * @var $length = Movie length
     */

    public $profits;
    public $length;
   


    //constructor

    public function __construct(string $title, string $language, int $vote, Genre $genre, string $profits, string $length ){
        
        parent::__construct($title, $language, $vote, $genre);
        
        $this->profits = $profits;
        $this->length = $length;
        
    }

      public function getProfits(): string
    {
        return "$this->profits";
    }

    public function getLength(): string
    {
        return "$this->length hours";
    }

}    