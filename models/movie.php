
<?php
/**
* andrò a creare una classe di movie
*/

class movie{
    public $title;
    public $genre;
    public $realesyear;


/**
 * qui inserirò il costruttore
 * 
 * @param string $title che produce il titolo
 * @param string $genre che produce il genere
 * @param string $realesyear che produce l'anno che è stato prodotto
 */

 public function __construct($title, $genre, $realesyear) {
        $this->title = $title;
        $this->genre = $genre;
        $this->realesyear = $realesyear;
    }
 

 /**
 * qui inserirò il metodo per stampare titolo, genere e infine la data di realizzazione del film
 */

    public function movieInfo() {
        echo "Title: {$this->title}";
        echo "Genre: {$this->genre}";
        echo "Year: {$this->realesyear}";
    }
}
    ?>

