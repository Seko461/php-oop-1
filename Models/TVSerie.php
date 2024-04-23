<?php
/**
 * ## Class TVSerie
 * Define a TVSerie object
 */
class TVSerie extends Production{

    /**
     * @var $seasons = TVSerie seasons
     */

    public $seasons;
    
   


    //constructor

    public function __construct(string $title, string $language, int $vote, Genre $genre,string $seasons ){
        
        parent::__construct($title, $language, $vote, $genre);
        
        
        $this->seasons = $seasons;
     
        
    }

}    