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
    public function __construct($_title, $_length, $_year, Genre $_genre)
    {
        $this->title = $_title;
        $this->length = $_length;
        $this->year = $_year;
        $this->genre = $_genre;
    }

    public function setPoster($_poster){
        $this->poster = $_poster;
    }

    public function getPoster(){
        $placeholderImg = 'https://t4.ftcdn.net/jpg/05/07/58/41/360_F_507584110_KNIfe7d3hUAEpraq10J7MCPmtny8EH7A.jpg';
        
        if($this->poster){
            return $this->poster;
        }

        return $placeholderImg;
    }
}