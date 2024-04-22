<?php
/**
 * ## Class Production
 * Define a production object
 */
class Production {

    /**
     * @var $title = production title
     * @var $language = production language
     * @var $vote = production vote
     */

    public $title;
    public $language;
    public $vote;


    //constructor

    public function __construct(string $title, string $language, int $vote){
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
    }

    //getters

    public function getTitle() {
        
        return $this->title;
    }

    public function getLanguage() {
        
        return $this->title;
    }

    public function getVote() {
        
        return $this->title;
    }

    
}