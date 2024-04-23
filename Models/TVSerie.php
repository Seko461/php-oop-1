<?php
/**
 * ## Class TVSerie
 * Define a TVSerie object
 */
class TVSerie {

    /**
     * @var $seasons = TVSerie seasons
     */

    public $seasons;
    
   


    //constructor

    public function __construct(string $seasons ){
        $this->seasons = $seasons;
     
        
    }

}    