<?php

class Movie {
    public $title;
    public $genre;
    public $votes;

    function __construct($_title, $_genre, $_votes) 
    {
       $this->title = $_title;
       $this->genre = $_genre;
       $this->votes = $_votes;
    }

    public function get_average_votes()
    {
        return array_sum($this->votes) / count($this->votes);
    }

}