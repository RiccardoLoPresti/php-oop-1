<?php 

class Movie{
    public $title;
    public $poster;
    public $length;
    public $year;
    public $genre;


    /**
     * @param String titolo film
     * @param String durata film
     * @param String anno film
     * @param String genere film
     */
    public function __construct($_title, $_length, $_year, $_genre)
    {
        $this->title = $_title;
        $this->length = $_length;
        $this->year = $_year;
        $this->genre = $_genre;
    }

    public function getPoster($_poster){
        $this->poster = $_poster;
    }
}