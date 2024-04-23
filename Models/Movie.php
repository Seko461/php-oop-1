<?php
/**
 * ## Class Movie
 * Define a Movie object
 */
class Movie {

    /**
     * @var $profits = Movie profits
     * @var $length = Movie length
     */

    public $profits;
    public $length;
   


    //constructor

    public function __construct(string $profits, string $length ){
        $this->profits = $profits;
        $this->length = $length;
        
    }

}    