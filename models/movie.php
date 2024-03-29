
<?php
/**
* andrò a creare una classe di movie
*/

class movie{
    public $title;
    public $genre;
    public $realesyear;
    public $image;


/**
 * qui inserirò il costruttore
 * 
 * @param string $title che produce il titolo
 * @param string $genre che produce il genere
 * @param string $realesyear che produce l'anno che è stato prodotto
 * @param string $image l'immagine per ogni film
 */

 public function __construct($title, $genre, $realesyear, $image) {
        $this->title = $title;
        $this->genre = $genre;
        $this->realesyear = $realesyear;
        $this->image = $image;
    }
 

 /**
 * qui inserirò il metodo per stampare titolo, genere e infine la data di realizzazione del film
 */

    public function movieInfo() {
        echo "Title: {$this->title}";
        echo "Genre:" . implode(',' , $this->genre);
        echo "Year: {$this->realesyear}";
    }
}
    ?>

