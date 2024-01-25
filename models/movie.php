
<?php
/**
* andrò a creare una classe di movie
*/

class movie{
    public $title;
    public $genre;
    public $RealesYear;
}

/**
 * qui inserirò il costruttore
 */

 public function __construct($title, $genre, $RealesYear) {
        $this->title = $title;
        $this->genre = $genre;
        $this->realesyear = $RealesYear;
 }

 /**
 * qui inserirò il metodo per stampare titolo, genere e infine la data di realizzazione del film
 */

    public function movieInfo() {
        echo "Title: {$this->title}",
        echo "Genre: {$this->genre}",
        echo "Year: {$this->realesyear}";
    }