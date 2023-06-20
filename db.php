<?php 

class Info {

    public $language;
    public $length;
    public $thumb;

    public function __construct($language, $length, $thumb) {
        $this->language = $language;
        $this->length = $length;
        $this->thumb = $thumb;
    }
}

class Movie {

    public $title;
    public $year;
    public $director;
    public $genre;
    public $info;

    public function __construct($title, $year, $director, $genre, Info $info) {
        $this->title = $title;
        $this->year = $year;
        $this->director = $director;
        $this->genre = $genre;
        $this->info = $info;
    }

    public function getYearDiff($currentYear) {
        return 'This movie premiered ' . $currentYear - $this->year . ' years ago';
    }

}

$lotr_fellowship = new Movie('The Lord of the Rings', 2001, 'Peter Jackson', ['fantasy', 'action'], new Info('english', '178', 'https://static.posters.cz/image/750/poster/lord-of-the-rings-fellowship-i11723.jpg'));
$the_gladiator = new Movie('The Gladiator', 2000, 'Ridley Scott', ['epic', 'historical', 'action'], new Info('english', '155', 'https://m.media-amazon.com/images/I/519aVPCY1bL._AC_UF894,1000_QL80_.jpg'));
$back_to_the_future = new Movie('Back to the Future', 1985, 'Robert Zemeckis', ['sci-fi', 'action', 'comedy'],  new Info('english', '178', 'https://static.posters.cz/image/750/poster/back-to-the-future-i2795.jpg'));
$il_buono_il_brutto_il_cattivo = new Movie('Il buono, il brutto, il cattivo', 1966, 'Sergio Leone', ['western', 'action', 'drama'], new Info('italian', 161, 'https://www.goposter.it/1490/film-poster-il-buono-il-brutto-il-cattivo-sergio-leone-70x100-cm.jpg'));

$movies = [
    $lotr_fellowship,
    $the_gladiator,
    $back_to_the_future,
    $il_buono_il_brutto_il_cattivo
]

?>