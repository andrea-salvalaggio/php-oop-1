<?php

class Movie{

    private $title;
    private $genre;
    private $publishDate;

    function __construct($_title, $_genre, $_publishDate){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->publishDate = $_publishDate;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function getPublishDate(){
        return $this->publishDate;
    }
}