<?php

/**
 * ## Class genre
 * Describes a genre object
 */
class Genre {

    /**
     * @var $name = genre name
     * @var $description = genre description
     */
     public $name;
     public $description;

     public function __construct($name, $description){
        $this->name = $name;
        $this->description = $description;
       
    }

}
