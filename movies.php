<?php 

class Movie {

    public $title;
    public $year;
    public $director;

    public function __construct($title, $year, $director)

    {
    $this->title = $title;
    $this->year = $year;
    $this->director = $director;
    }

    public function getYearDiff($currentYear) {
        return 'This movie premiered ' . $currentYear - $this->year . ' years ago';
    }

}

?>